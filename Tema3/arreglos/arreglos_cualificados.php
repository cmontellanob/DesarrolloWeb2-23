<?php
$a=[];
$a["nombre"]="juan";
$a["apellido"]="perez";
$a["edad"]=30;
$a["telefono"]="12345678";
echo "<br>";
echo "<h1> Recorrer conel ciclo foreachon indices </h1>";
foreach ($a as $indice=>$elemento)
{
    echo $indice."=>".$elemento;
    echo "<br>";
}