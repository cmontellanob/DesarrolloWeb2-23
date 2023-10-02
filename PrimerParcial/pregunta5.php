<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include('conexion.php');
   
    
    $sql = "SELECT id,correo,nombre,rol FROM usuario";
    
    //echo $sql;
    $resultado = $con->query($sql);
    if ($resultado->num_rows > 0) {
    ?>
        <table>
            <tr>
                <th>Correo</a></th>
                <th>Nombre</a> </th>
                <th>Rol</a></th>
                
                <th>Operacion</th>
            </tr>
            <?php while ($row = $resultado->fetch_assoc()) {
            ?>
                <tr>
                    
                    <td><?php echo $row['correo']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['rol']; ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $row['id'];?>&nuevorol=<?php echo $row['rol']=="Administrador"?"Usuario":"Administrador";?>">
                        <?php echo "Cambiar a ",$row['rol']=="Administrador"?"Usuario":"Administrador";?>
                
                        </a>
                    
                    </td>

                </tr>

            <?php } ?>
        </table>

    <?php
    } else {
    ?> <div>No existen registros que mostrar</div>
    <?php }
    ?>


</body>

</html>