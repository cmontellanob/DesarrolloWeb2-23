<?php
$n=$_GET['n'];
echo '<form action="calcular.php" method="POST">';
for ($i=0;$i<$n;$i++)
{
?>
<input type="number" name="numero<?php echo $i?>" > <br>
<?php
}
setcookie('n',$n,0);
echo '<input type="submit" value="Sumar">';
echo "</form>";
?>

