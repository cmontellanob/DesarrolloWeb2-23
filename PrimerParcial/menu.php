<?php  include('calculadora.php');
session_start();

if (!isset($_SESSION['cal']))
{
    $a=$_GET['a'];
    $b=$_GET['b'];
    $_SESSION['cal']=new Calculadora($a,$b);

}
?>
<ul>
    <li><a href="sumar.php">Sumar</a></li>
    <li><a href="restar.php">Restar</a></li>
    <li><a href="multiplicar.php">Multiplicar</a></li>
    <li><a href="dividir.php">Dividir</a></li>
</ul>

