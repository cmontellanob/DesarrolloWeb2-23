<?php
    session_start();
    include('conexion.php');

    
    $usuario = $_POST['usuario'];
    $password = sha1($_POST['password']);
    $captcha = $_POST['captcha'];


// echo $captcha;
    

    if($captcha != $_SESSION["oculto"] ){
        echo "captcha no correcto";
    }else{

    $sql = "SELECT id, usuario,nivel from usuarios WHERE 
    usuario = '$usuario' AND password ='$password'";

    $consulta = mysqli_query($con, $sql);
    $usuario = mysqli_fetch_array($consulta);
    if($usuario != null){

        $_SESSION["nivel"] = $usuario["nivel"];

        echo "Autenticado correctamente";

    } else {
        echo "No autenticado";
    }
}