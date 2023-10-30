<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include('conexion.php');
    $iddepartamento=$_GET['iddepartamento'];
    $sql = "SELECT id,provincia FROM `provincias` WHERE iddepartamento=$iddepartamento";
    $resultado = $con->query($sql);

    if ($resultado->num_rows > 0) {
    ?>
            <?php while ($row = $resultado->fetch_assoc()) {
            ?>
                <option value="<?php echo $row ["id"] ?> ">
                    <?php echo $row["provincia"] ?>
                </option>
            <?php } ?>
            
    <?php
    } else {
    ?> <div>No existen registros que mostrar</div>
    <?php }
    ?>
    
</body>

</html>