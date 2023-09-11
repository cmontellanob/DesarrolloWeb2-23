<?php session_start();
include("conexion.php");
$correo = $_POST['correo'];
$password = sha1($_POST['password']);
$sql = "SELECT nombre,correo,rol from usuario where correo='$correo' and password='$password'";
echo $sql;
$resultado = $con->query($sql);
if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    $_SESSION['nombre'] = $fila['nombre'];
    $_SESSION['correo'] = $fila['correo'];
    $_SESSION['rol'] = $fila['rol'];
    header("Location:read.php");
} else { ?>
    <div>
        Usuario o contraseña incorrectos
    </div>
    <meta http-equiv="refresh" content="3;url=form_login.html">
<?php } ?>
