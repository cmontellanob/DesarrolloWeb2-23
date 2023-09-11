<?php if ($_SESSION['rol']!="Administrador")
{
    ?>
    <meta http-equiv="refresh" content="3;url=read.php">
    <?php
     die("No esta autorizado para realizar esta acción");
}