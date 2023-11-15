<?php
include("conexion.php");

$titulo=$_POST['titulo'];
$autor =$_POST['autor'];
$idet =$_POST['idet'];
$idcar =$_POST['idcar'];
$id =$_POST['id'];
$img =$_POST['imagen'];
$idusu =$_POST['idusu'];
$anho =$_POST['anho'];

$sql="INSERT INTO libros(id,imagen,titulo,autor,ideditorial,anio,idusuario,idcarrera) value s
 ($id,'$img','$titulo','$autor',$idet,$anho,$idusu,$idcar)";

 //echo $sql;
 if ($con->query($sql) === TRUE) {
    echo "Se creo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close()
?>
