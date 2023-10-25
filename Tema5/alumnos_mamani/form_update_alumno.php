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
    $id=$_GET['id'];
    $sql="SELECT nombres,apellidos,CU,idcarrera from alumno where id=$id";
    $sql1 = "SELECT id,nombre from  carrera";
    $resultado1 = $con->query($sql1);
    $resultado=$con->query($sql);
    $row = $resultado->fetch_assoc();
    
    ?>



<div class="container" style="max-width: 500px; margin-top: 45px;">
    <form class="bg-dark text-white p-4 rounded"  action="javascript:update()" method="post" id="form-alumno">

        <div class="mb-3">
            <label for="nombres">Nombres</label>
            <input type="text" name="nombres" value="<?php echo $row['nombres']?>">
        </div>
        <div class="mb-3">
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" value="<?php echo $row['apellidos']?>">
        </div>
        <div class="mb-3">
        <label for="idcarrera">Carrera:</label>
            <select name="idcarrera">
                <?php while ($row_carrera = $resultado1->fetch_assoc()) { ?>
                    <option value="<?php echo $row_carrera['id'] ?>" 
                    <?php echo $row_carrera['id']==$row['idcarrera']?"selected":"";  ?>     
                    ><?php echo $row_carrera['nombre'] ?></option>


                <?php } ?>

            </select>
        </div>
        <div class="mb-3">
            <label for="CU">CU</label>
            <input type="text" name="CU" value="<?php echo $row['CU']?>">
        </div>
        <input type="hidden" name="id" value="<?php echo $id?>">
        <input  class="btn btn-primary"  type="submit" value="Editar">


    </form>
</div>

</body>

</html>