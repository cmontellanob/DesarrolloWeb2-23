<?php
include("conexion.php");
$id=$_GET['id'];

$sql="DELETE FROM alumno WHERE id=$id";

 //echo $sql;
 if ($con->query($sql) === TRUE) {
    echo "Se elimino el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close()
?>
