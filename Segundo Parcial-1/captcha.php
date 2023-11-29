<?php session_start();
// estas cabeceras evitan que se almacene la imagen en el caché
header ("Expires: Sat, 12 Jul 2020 09:00:00 GMT");
header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header ("Cache-Control: no-store, no-cache, must-revalidate");
header ("Cache-Control: post-check=0, pre-check=0", false);
header ("Pragma: no-cache");
// creamos la imagen con el tamaño determinado
$imagen = imagecreate(250, 250);

// construimos la palabra
$caracteres ="ABCDEFGHJKMNPRSTUVWXYZabcdefghjkmnpqrstuvwxyz23456789";
//indicar la cantidad de caracteres que tendrá la palabra del CAPTCHA
$cantidad=4;
$palabra="";
for($i=1;$i<=$cantidad;$i++) {
$pos = mt_rand(0,strlen($caracteres)-1);
$palabra.= substr($caracteres,$pos,1);
}

imagettftext($imagen, 100, 0,0, 0, 0,"", $palabra);
$_SESSION["oculto"] = $palabra;
// enviamos la cabecera correspondiente al navegador y luego la imagen

header("Content-type: image/png");
imagepng($imagen);
// eliminamos la imagen
imagedestroy($imagen);

