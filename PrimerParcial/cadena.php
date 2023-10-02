<?php
$cadena1=$_POST['cadena1'];
$cadena2=$_POST['cadena2'];
if ( strpos($cadena1, $cadena2))
{
    echo "la cadena $cadena1 contiene $cadena2 <br>";
    echo str_replace($cadena2,"",$cadena1); 
}
else
{
echo "la cadena $cadena1 no contiene la $cadena2 ";
}
 

?>