<?php
include('verificar.php');
include('permiso.php');

include("conexion.php");
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$CU=$_POST['CU'];
$idcarrera=$_POST['idcarrera'];

$archivo_original=$_FILES['fotografia']['name'];
$arreglo=explode(".",$archivo_original);
$extension=$arreglo[1];
$fotografia=uniqid().'.'.$extension;

copy($_FILES['fotografia']['tmp_name'],'images/'.$fotografia);


$sql="INSERT INTO alumno(fotografia,nombres,apellidos,cu,idcarrera) values
 ('$fotografia','$nombres', '$apellidos','$CU',$idcarrera) ";

 //echo $sql;
 if ($con->query($sql) === TRUE) {
    echo "Se creo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close()
?>
<meta http-equiv="refresh" content="3; url=read.php" />


