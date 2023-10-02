<?php  include('calculadora.php');
session_start();
echo "la suma es ",$_SESSION['cal']->multiplicar();
?>