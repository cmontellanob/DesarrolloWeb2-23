<?php
$suma=0;
foreach ($_POST['numeros'] as $numero)
{
    $suma+=$numero;
}

echo "el resultado de la suma es:".$suma;

?>