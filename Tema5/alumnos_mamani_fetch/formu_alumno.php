<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body>
    <?php include("conexion.php");
    $sql = "SELECT id,nombre from  carrera";
    $resultado = $con->query($sql);
    ?>


<div class="container" style="max-width: 500px; margin-top: 45px;">
    

    <form class="bg-dark text-white p-4 rounded" action="javascript:crearAlumno()" method="post" id="form-alumno">
        <div class="mb-3"> 
            <label for="nombres">Nombres</label>
            <input type="text" name="nombres">
        </div>
        <div class="mb-3">
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos">
        </div>
        <div class="mb-3 form-check">
            <label for="cu">CU</label>
            <input type="text" name="CU">
        </div>
        <div class="mb-3">

        <label for="idcarrera">Carrera:</label>
            <select name="idcarrera">
                <?php while ($row = $resultado->fetch_assoc()) { ?>
                    <option value="<?php echo $row['id'] ?>">
                    <?php echo $row['nombre'] ?></option>


                <?php } ?>

            </select>
        </div>
        <input  class="btn btn-primary" type="submit" value="Crear">





    </form>

</div>

</body>

</html>