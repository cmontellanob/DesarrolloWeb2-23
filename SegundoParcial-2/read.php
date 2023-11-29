<?php include('conexion.php');


$sql = "SELECT l.id,imagen,titulo,autor,editorial,anio,carrera,nombrecompleto  FROM libros l
    LEFT JOIN editoriales e on l.ideditorial=e.id 
    LEFT JOIN carreras c on l.idcarrera=c.id 
    LEFT JOIN usuarios u on l.idusuario=u.id ";

$resultado = $con->query($sql);
if ($resultado->num_rows > 0) {
?>
    <table>
        <tr>
            <th>Imagen</th>
            <th>Titulo</th>
            <th>Autor </th>
            <th>Editorial</th>
            <th>Anio</th>
            <th>Carrera</th>
            <th>usuario</th>
        </tr>
        <?php while ($row = $resultado->fetch_assoc()) {
        ?>
            <tr>
                <td><img src="images/<?php echo $row['imagen'];  ?>" width="100px"></td>
                <td><?php echo $row['titulo']; ?></td>
                <td><?php echo $row['autor']; ?></td>
                <td><?php echo $row['editorial']; ?></td>
                <td><?php echo $row['anio']; ?></td>
                <td><?php echo $row['carrera']; ?></td>
                <td><?php echo $row['nombrecompleto']; ?></td>

            </tr>

        <?php } ?>
    </table>

<?php
} else {
?> <div>No existen registros que mostrar</div>
<?php }
?>