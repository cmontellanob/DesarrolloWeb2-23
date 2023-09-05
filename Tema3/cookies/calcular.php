<?php
$n=$_COOKIE['n'];
$suma=0;
for ($i=0;$i<$n;$i++)
{
    $suma+=$_POST['numero'.$i];
}

echo "el resultado de la suma es:".$suma;

?>