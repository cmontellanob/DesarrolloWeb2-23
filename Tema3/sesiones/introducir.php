<?php session_start();
$n=$_GET['n'];
echo '<form action="calcular.php" method="POST">';
for ($i=0;$i<$n;$i++)
{
?>
<input type="number" name="numero<?php echo $i?>" > <br>
<?php
}
$_SESSION['n']=$n;
echo '<input type="submit" value="Sumar">';
echo "</form>";
?>

