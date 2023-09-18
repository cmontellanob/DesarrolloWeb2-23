<?php
$arreglo=[
    0 => "mapa.png",
    1 => "fisiologia.png",
    2 => "biologia.png",
    3 => "stickers.png",
    
];
$semilla = time();
srand($semilla); // establece la semilla para la generación de números aleatorios
$numero_aleatorio = rand(0, count($arreglo)-1); 
$imagen = imagecreatefrompng($arreglo[$numero_aleatorio]);
header("Content-Type: image/png");
imagepng($imagen);
?>
