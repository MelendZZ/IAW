<?php


function creaEmail($a = 'jorgeMelendez',$b = '@',$c = 'gmail.com') {
    $numargs= func_num_args();
    
    if ($numargs==3)
    {
        echo 'Has dado correctamente los argumentos<br><br>';
    }
    elseif ($numargs==2) {
        echo 'Solo has dado dos argumento, los demás se han dado por defecto<br><br>';
    }
    
    else {
        echo 'Solo has dado un argumento, los demás se han dado por defecto<br><br>';
        
    }
    
    return $a.$b.$c;
        
}

$nomb='jorgeMelendez';
$at='@';
$dom='gmail.com';



echo 'Invocando a función.......<br><br>El email completo es.........<br><br>';


echo '<b>'.creaEmail($nomb).'</b>';
?>



