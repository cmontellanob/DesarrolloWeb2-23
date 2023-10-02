<?php
$mes=$_POST['mes'];
$anio=$_POST['anio'];
$fecha=$anio.'-'.$mes.'-01';
$cantidad=[
    '01'=>31,
    '02'=>28,
    '03'=>31,
    '04'=>30,
    '05'=>31,
    '06'=>30,
    '07'=>31,
    '08'=>31,
    '09'=>30,
    '10'=>31,
    '11'=>30,
    '12'=>31
];
echo $fecha.'<br>';
$numeroDiaSemana = date("w", strtotime($fecha));
if ($numeroDiaSemana==0) {
    $numeroDiaSemana=7;
}
echo $numeroDiaSemana;
?>
<table>
    <tr>
    <th>Lunes</th>
    <th>Martes</th>
    <th>Miercoles</th>
    <th>Jueves</th>
    <th>Viernes</th>
    <th>Sabado</th>
    <th>Domingo</th>
    </tr>
<?php
$contador=1;
for ($i=0;$i<6;$i++)
{
    echo "<tr>";
    for ($j=0;$j<7;$j++)
    {
        echo "<td>";
        if ($j+1>=$numeroDiaSemana and $i==0)
        {
            echo $contador;
            $contador++;
        }
        if ($i>0)
        {
            if ($contador<=$cantidad[$mes])
             {echo $contador;
            $contador++;}
            
        }

        echo "</td>";
    }   
    echo "</tr>";

}

?>
</table>

</table>