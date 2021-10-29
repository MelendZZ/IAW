<?php

function suma($n1, $n2, &$res) {
    $suma = $n1 + $n2;
    $res = $suma;
    echo 'Llamada a Funcion <b>Suma(a,b,resultado)</b>';
    echo '<br>El resultado se obtiene en el parametro resultado pasado por referencia <br>';
    echo 'La suma de ' . $n1 . ' y ' . $n2 . ' es ' . $res;


}

$a = 10;
$b = 20;
$res = 0;

echo 'Asignamos valores a los dos valores';
echo '<br>$a= ' . $a;
echo '<br>$b= ' . $b;
echo '<br><br>';
suma($a, $b, $res);


?>