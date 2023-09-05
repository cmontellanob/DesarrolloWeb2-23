<?php session_start();
if (!isset($_SESSION['contador']))
{
  $_SESSION['contador']=1;
  $contador=1;
}
else
{
  $contador=$_SESSION['contador']; 
  $contador++;
  $_SESSION['contador']=$contador;
  

}

echo "esta es la $contador vez que visita este sitio";
?>