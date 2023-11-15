<?php
    $numero = intval($_GET['numero']); 
for ($i=0;$i<$numero;$i++)
{
    ?>
    <input type="number" name="numeros" onchange="calcular()" >
    <?php
}
?>
<div id="res"></div>
    

