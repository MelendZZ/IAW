<?php

include 'libreriaProductos.php';

echo 'Estamos en Programa principal<br><br>';
$a=12;
$b=10;
$res= producto($a, $b);
echo '<b>Producto</b><br>';
echo 'Producto de '.$a.' y '.$b.' = <b>'.$res.'</b><br><br>';

echo '<b>Funcion Producto Varios</b><br>';
productoValores(6,5,4,3,2,1);
?>
