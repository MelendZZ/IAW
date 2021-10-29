<?php

include ('funcionSumaProducto.php');

$a=10;
$b=20;
echo 'Asignamos valores a los dos valores<br>';
echo '$a= '.$a;
echo '<br>$b= '.$b;
echo '<br><br><br>';
echo 'Llamada a Funcion Suma<br>La suma de '.$a.' y '.$b.' es '.suma($a,$b);
echo '<br><br>Llamada a Funcion Producto<br>El producto de '.$a.' y '.$b.' es '.producto($a,$b);

?>