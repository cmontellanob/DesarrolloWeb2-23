<?php
include("conexion.php");

// var_dump($_POST);
// die("matar");
$n = $_POST['n'];
for ($i = 0; $i < $n; $i++) {
    $titulo = $_POST['titulo' . $i];
    $autor = $_POST['autor' . $i];
    $ideditorial = $_POST['ideditorial' . $i];
    $anio = $_POST['anio' . $i];
    $idcarrera = $_POST['idcarrera' . $i];
    $idusuario = $_POST['idusuario' . $i];

    $archivo_original = $_FILES['imagen' . $i]['name'];
    $arreglo = explode(".", $archivo_original);
    $extension = $arreglo[1];
    $imagen = uniqid() . '.' . $extension;

    copy($_FILES['imagen' . $i]['tmp_name'], 'images/' . $imagen);


    $sql = "INSERT INTO libros(imagen,titulo,autor,ideditorial,anio,idcarrera,idusuario) values
     ('$imagen','$titulo','$autor',$ideditorial,$anio,$idcarrera,$idusuario) ";

if ($con->query($sql) === TRUE) {
    echo "Se creo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
}
$con->close();
?> 
