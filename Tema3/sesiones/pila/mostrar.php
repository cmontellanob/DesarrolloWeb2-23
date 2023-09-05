<?php
include ('pila.php');
session_start();
if (isset($_SESSION['p'])) {
    $_SESSION['p']->imprimir();
}


?>
<meta http-equiv="refresh" content="4;url=menu_pila.html">
