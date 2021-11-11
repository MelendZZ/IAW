<?php 
function arrayInicial($x){
    for ($i=0;$i<count($x);$i++){
        echo $x[$i].' ';
    }
    
}

function my_sort($a,$b)
{
if ($a==$b) return 0;
return ($a<$b)?-1:1;
}

$array=array('i12.png','i10.png','i2.png','i1.png');
$backup=$array;
echo 'El array inicial es: <br>';
$bac=arrayInicial($array);
usort($array,"my_sort");
echo '<br><br>';
echo 'Comparación-Ordenacion de cadenas standard:<br>';
arrayInicial($array);
echo '<br><br>';
natsort($array);

echo 'El array inicial es: <br>';
arrayInicial($backup);


sort($array,SORT_NUMERIC);
echo '<br><br>Comparación-Ordenación de cadenas en forma natural:<br>';
arrayInicial($array);


?>