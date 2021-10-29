<?php
function suma($num1,$num2)
{
    $suma=$num1+$num2;
    return $suma;
    
    
}

$a=10;
$b=20;

echo 'Asignamos valores a las variables:<br>';
echo '$a=10<br>$b=20<br>';
echo 'A continuación hacemos la llamada a la funcion <br>';
echo 'La suma de '.$a.' y '.$b.' es '.suma($a,$b);

?>
