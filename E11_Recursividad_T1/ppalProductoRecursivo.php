<?php

include 'funcionProductoRecursivo.php';
$a=10;
$b=5;
$prod1= productoRecv1($a, $b);
$prod2= productoRecv2($a, $b);


echo 'Asignamos valores a los dos valores <br>$a= '.$a.'<br>$b= '.$b.'<br><br>';
echo "Llamada a función <b>Producto Recursivo Version 1</b><br>El producto de $a por $b es $prod1<br><br>";
echo "Llamada a función <b>Producto Recursivo Version 2</b><br>El producto de $a por $b es $prod2";

?>
