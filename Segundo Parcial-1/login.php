
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
   
    $random = rand(1,4);


    $letras = ["qwert","hyyee","fghsa","sdeer"];
    $_SESSION["oculto"]=$letras[$random-1];

    
    ?>
    <form id="login_form" method="post" action="javascript:autenticar()">
        <div class="form">
            <div>Usuario: <input type="text" name="usuario"></div>
            <div>Contraseña: <input type="password" name="password"></div>
            <div id="img_captcha">
                <img src="captcha<?php echo $random?>.png" alt="captcha<?php echo $random?>" width="100">
                <input type="text" name="captcha" id="captcha" placeholder="escriba aqui el captcha">
            </div>
        </div>
        <input type="submit"value="Logearse">
    </form>
</body>
</html>