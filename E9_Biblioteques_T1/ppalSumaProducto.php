<?php
$a=10;
$b=20;
include 'funcionSumaProducto.php';
echo 'Asignamos valores a los dos valores<br>$a= '.$a.'<br>$b= '.$b;
echo '<br><br>Llamada a Funcion<b> Suma</b><br>';
$sum=suma($a, $b);
echo 'La suma de '.$a.' y '.$b.' es '.$sum;

echo '<br><br>Llamada a Funcion<b> Producto</b><br>';
$prod=producto($a, $b);
echo 'La suma de '.$a.' y '.$b.' es '.$prod;
?>
