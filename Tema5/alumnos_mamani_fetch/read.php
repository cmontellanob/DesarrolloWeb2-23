<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listas de alumnos</title>
    <link rel="stylesheet" href="stylos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body>
    <?php include('conexion.php');

    $sql = "SELECT a.id,nombres,apellidos,CU,c.nombre as carreras FROM alumno a LEFT JOIN carrera c on a.idcarrera=c.id ";

    //echo $sql;
    $resultado = $con->query($sql);
    if ($resultado->num_rows > 0) {
    ?>

    


    <h1 class="text-center">Lista de Alumnos</h1>
    <div class="container">
        <div class="row justify-content-center">

        <div class="primera" style="background-color:aquamarine">
            <div class="col mb-2">
            <a  class="btn btn-info"  href="javascript:cargarContenido('formu_alumno.php')">Crear alumno</a>
            </div>


        </div>



        <table class="table table-dark table-bordered "> 
            <tr>
                <th class="text-center">Nombres</th>
                <th class="text-center">Apellidos</th>
                <th class="text-center">CU</th>
                <th class="text-center">Carrera</th>
                <th class="text-center">Operaciones</th>
            </tr>
            <?php while ($row = $resultado->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['nombres']; ?></td>
                    <td><?php echo $row['apellidos']; ?></td>
                    <td><?php echo $row['CU']; ?></td>
                    <td><?php echo $row['carreras']; ?></td>
                    <td class="text-center">
                        <a class="btn btn-danger"  href="javascript:editarAlumno(<?php echo $row['id'];?>)">Editar</a>
                        <a class="btn btn-primary" href="javascript:deleteAlumno(<?php echo $row['id'];?>)">Eliminar</a>
                    </td>

                </tr>

            <?php } ?>
        </table>
    </div>

    </div>

    <?php
    } else {
    ?> <div>No existen registros que mostrar</div>
    <?php }
    ?>

</body>

</html>