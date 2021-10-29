<?php
$personas = array(
    "ape0"=>"nom0",
    "ape1"=>"nom1",
    "ape2"=>"nom2",
    "ape3"=>"nom3",
    "ape4"=>"nom4"
);
$personas["ape5"]="nom5";
$personas["ape6"]="nom6";
$personas["ape7"]="nom7";
$personas["ape8"]="nom8";
$personas["ape9"]="nom9";

reset($personas);
$valor= each($personas);
echo 'ESTE FRAGMENTO SOLO captaria el primer elemento del vector asociativo<br>';
echo $valor[0].' => '.$valor[1].'<br><br><br>';
echo 'AHORA RECORRE TODO el vector asociativo <br>';
reset($personas);
while($a=each($personas))
{
    echo '<li>'.$a[0].' => '.$a[1].'</li>';
}
?>
