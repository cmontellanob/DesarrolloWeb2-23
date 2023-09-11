<?php include('verificar.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="text-align: right;"><a href="cerrarsession.php">Cerrar Session</a></div>

    <div>
        <form action="read.php" method="GET">
        <div>
            <label for="buscar">buscar</label>
            <input type="text" name="buscar" >
            <input type="submit" value="Buscar">
        </div>
        </form>
    </div>
    <?php include('conexion.php');
    $orden=isset($_GET['orden'])?$_GET['orden']:'id';
    
    $sql = "SELECT a.id,fotografia,nombres,apellidos,CU,c.nombre as carrera FROM alumno a
    LEFT JOIN carrera c on a.idcarrera=c.id ";
    if (isset($_GET['buscar']))
    {
        $buscar=$_GET['buscar'];
        $sql .=" WHERE nombres like '%$buscar%' ";
    }
    $sql.="order by $orden";

    //echo $sql;
    $resultado = $con->query($sql);
    if ($resultado->num_rows > 0) {
    ?>
        <table>
            <tr>
                <th>Fotografia</th>
                <th><a href="read.php?orden=nombres">Nombres</a></th>
                <th><a href="read.php?orden=apellidos">Apellidos</a> </th>
                <th><a href="read.php?orden=CU">CU</a></th>
                <th><a href="read.php?orden=carrera">Carrera</a></th>
                <th>Operaciones</th>
            </tr>
            <?php while ($row = $resultado->fetch_assoc()) {
            ?>
                <tr>
                    <td><img src="images/<?php echo $row['fotografia'];  ?>" width="100px" ></td>
                    <td><?php echo $row['nombres']; ?></td>
                    <td><?php echo $row['apellidos']; ?></td>
                    <td><?php echo $row['CU']; ?></td>
                    <td><?php echo $row['carrera']; ?></td>
                    <td><?php if ($_SESSION['rol']=="Administrador") {?>
                        <a href="form_update_alumno.php?id=<?php echo $row['id']; ?>">Editar</a>
                        <a href="delete.php?id=<?php echo $row['id']; ?>">Eliminar</a>
                        <?php } ?>
                    </td>

                </tr>

            <?php } ?>
        </table>

    <?php
    } else {
    ?> <div>No existen registros que mostrar</div>
    <?php }
    ?>
    <?php if ($_SESSION['rol'] == "Administrador") {
    ?>

        <a href="formu_alumno.php">Crear Alumno</a>
    <?php } ?>



</body>

</html>