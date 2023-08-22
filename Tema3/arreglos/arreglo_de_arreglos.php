<?php

$matriz[0][0]=1;
$matriz[0][1]=2;
$matriz[0][2]=3;
$matriz[1][0]=4;
$matriz[1][1]=5;
$matriz[1][2]=5;
$matriz[2][0]=7;
$matriz[2][1]=8;
$matriz[2][2]=9;

echo "<br>";
echo "<h1> Recorrer conel ciclo foreachon indices </h1>";
foreach ($matriz as $indice=>$fila)
{
    foreach ($fila as $indice2=>$elemento)
    {
        echo "[".$indice.",".$indice2."]=".$elemento;
        
    }
    echo "<br>";
    
}
