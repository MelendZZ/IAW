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
echo 'Recorremos el vector creado ==><br><br>';
while(list($clave,$val) = each($personas)){
    echo '<li>'.$clave.' => '.$val.'</li>';
}
?>
