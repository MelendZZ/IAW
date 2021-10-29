<?php

function creaURL($a,$b,$c,$d,$e,&$salida) {
    $salida= $a.'://'.$b.'.'.$c.'.'.$d.'.'.$e;
    echo '<b>'.$salida.'</b>';
};

$prot='http';
$serv='www';
$nom='lagaceta';
$ent='com';
$suf='ar';
$salida='url';

echo 'Invocando a función.......<br><br>La URL completa es.........<br><br>';

creaURL($prot,$serv,$nom,$ent,$suf,$salida);
?>
