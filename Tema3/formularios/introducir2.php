<?php
$n=$_GET['n'];
?>
<form action="calcular2.php" method="POST">
<?php    
for ($i=0;$i<$n;$i++)
{
?>
<input type="number" name="numeros[]" > <br>
<?php
}
?>

<input type="submit" value="Sumar">
</form>


