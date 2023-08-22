<?php
include("funciones.php");
$cadena=$_GET['cadena'];

echo "cadena re4cibida:".$cadena;
echo "<br>";
echo "cadena en mayusculas:".strtoupper($cadena);
echo "<br>";
echo "cadena en minusculas:".strtolower($cadena);
$palabras=explode(" ",$cadena);
echo "<br>";
echo "palabras en la cadena:".count($palabras);
echo "<br>";
foreach ($palabras as $palabra)
{
    echo $palabra;
    echo "<br>";
}
$separadocomas=implode('-', $palabras); 
echo $separadocomas."<br>\n";

$resultado=sprintf("8x5 = %d <br>",8*5); 
echo $resultado,"<br>"; 
echo substr($cadena,6,3),"<br>"; 

if (chop("Cadena \n\n ") == "Cadena") 
	echo "Iguales<br><br>";

 echo strpos($cadena, "hola"),"<br><br>"; 
 echo str_replace("a","u",$cadena),"<br>"; 
 echo "La Primera Letra es",PrimeraLetra($cadena);
 ?>
