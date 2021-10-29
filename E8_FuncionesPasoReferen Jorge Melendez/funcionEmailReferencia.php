<?php

function creaEmail($a,$b,$c,&$salida) {
    $salida= $a.$b.$c;
    if($c!='gmail.com' && $c!='gmail.es'){
        echo 'Extension incorrecta: <b>'.$c.'</b>';
    }
    else
    {
        echo '<b>'.$salida.'</b>';
    }
};

$nomb='jorgeMelendez';
$at='@';
$dom='gmail.com';
$salida='';


echo 'Invocando a función.......<br><br>El email completo es.........<br><br>';

creaEmail($nomb,$at,$dom,$salida);
?>
