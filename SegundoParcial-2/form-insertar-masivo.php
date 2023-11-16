<?php
$n = $_GET['n'];
include('conexion.php');
$sql_usuarios = "SELECT id,nombrecompleto from usuarios";
$sql_editoriales = "SELECT id,editorial from editoriales";
$sql_carreras = "SELECT id,carrera from carreras";
$usuarios = $con->query($sql_usuarios);
$editoriales = $con->query($sql_editoriales);
$carreras = $con->query($sql_carreras);
$opciones_editoriales="";
while ($row = $editoriales->fetch_assoc()) { 
    $opciones_editoriales.='<option value="'.$row['id']. '">'. $row['editorial'].'</option>';
}
$opciones_usuarios="";
while ($row = $usuarios->fetch_assoc()) { 
    $opciones_usuarios.='<option value="'.$row['id']. '">'. $row['nombrecompleto'].'</option>';
}
$opciones_carreras="";
while ($row = $carreras->fetch_assoc()) { 
    $opciones_carreras.='<option value="'.$row['id']. '">'. $row['carrera'].'</option>';
}


?>
<form action="javascript:inserarmasivo()" method="post">
    <table>
        <tr>
            <th>imagen</th>
            <th>titulo</th>
            <th>autor</th>
            <th>editorial</th>
            <th>Año</th>
            <th>usuario</th>
            <th>carrera</th>
        </tr>
        <?php
        for ($i = 0; $i < $n; $i++) { ?>
            <tr>
                <td> <input type="file" name="imagen<?php echo $i ?>"> </td>
                <td> <input type="text" name="titulo<?php echo $i ?>"></td>
                <td><input type="text" name="autor<?php echo $i ?>">
                <td><select name="editorial<?php echo $i ?>">
                        <?php echo $opciones_editoriales?>
                    </select></td>
                <td><input type="number" name="anio<?php echo $i ?>"> </td>
                <td><select name="usuario<?php echo $i ?>">
                <?php echo $opciones_usuarios?>
                </select></td>
                <td><select name="carrera<?php echo $i ?>">
                <?php echo $opciones_carreras?>
                </select></td>


                

                </td>


            </tr>


        <?php } ?>
    </table>
</form>