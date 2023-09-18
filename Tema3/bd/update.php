<?php
include('verificar.php');
include('permiso.php');
include("conexion.php");
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$CU = $_POST['CU'];
$idcarrera = $_POST["idcarrera"];
$id = $_POST['id'];

if (isset($_FILES['fotografia'])) {
    $archivo_original = $_FILES['fotografia']['name'];
    $arreglo = explode(".", $archivo_original);
    $extension = $arreglo[1];
    $fotografia = uniqid() . '.' . $extension;
    copy($_FILES['fotografia']['tmp_name'],'images/'.$fotografia);

    $sql = "UPDATE  alumno set fotografia='$fotografia',nombres='$nombres',apellidos='$apellidos',CU='$CU', idcarrera = $idcarrera
    WHERE  id=$id ";
} else {
    $sql = "UPDATE  alumno set nombres='$nombres',apellidos='$apellidos',CU='$CU', idcarrera = $idcarrera
    WHERE  id=$id ";
}

// echo $sql;
if ($con->query($sql) === TRUE) {
    echo "Se actualizo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close()
?>
<meta http-equiv="refresh" content="3; url=read.php" />