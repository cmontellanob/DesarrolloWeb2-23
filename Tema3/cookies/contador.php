<?php 
if (!isset($_COOKIE['contador']))
{
  setcookie("contador",1,time()+3600*60);
  $contador=1;
}
else
{
  $contador=$_COOKIE['contador']; 
  $contador++;
  setcookie("contador",$contador,time()+3600*60);

}

echo "esta es la $contador vez que visita este sitio";
?>