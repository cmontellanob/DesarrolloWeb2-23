<?php session_start();
if (!isset($_SESSION['nombre'])) {
    ?>
    <meta http-equiv="refresh" content="3;url=form_login.html">
    <?php
     die("No esta autorizado");
}
?>
