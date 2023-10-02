<?php
include("conexion.php");
$id = $_GET['id'];
$nuevorol = $_GET['nuevorol'];
    $sql = "UPDATE  usuario set rol='$nuevorol' WHERE  id=$id ";

// echo $sql;
if ($con->query($sql) === TRUE) {
    echo "Se actualizo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close()
?>
<meta http-equiv="refresh" content="3; url=pregunta5.php" />