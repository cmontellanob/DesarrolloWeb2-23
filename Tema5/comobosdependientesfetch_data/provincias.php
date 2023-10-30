
    <?php include('conexion.php');
    $iddepartamento=$_GET['iddepartamento'];
    $sql = "SELECT id,provincia FROM `provincias` WHERE iddepartamento=$iddepartamento";
    $resultado = $con->query($sql);

    $provincias = array();
    while ($row = $resultado->fetch_assoc()) {
        $provincias[] = $row;
    }
    echo json_encode($provincias, JSON_UNESCAPED_UNICODE);
    ?>
