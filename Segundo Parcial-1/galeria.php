<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php

include('conexion.php');

$orden = isset($_GET['orden']) ? $_GET['orden'] : 'id';
$sql = "SELECT id, imagen, titulo FROM libros ORDER BY $orden";
$resultado = $con->query($sql);
?>

<?php while ($row = $resultado->fetch_assoc()) { ?>
    <button class="buttonim" onclick="mostrarImagen('<?php echo $row['imagen']; ?>', '<?php echo $row['titulo']; ?>')">
        <img src="<?php echo $row['imagen']; ?>" alt="Libro" width="50" height="75">
    </button>
<?php } ?>

<?php
$con->close();
?>
</body>
</html>

