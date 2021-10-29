<?php

function precioConIvaPorDefecto(&$num1, $num2 = '1.21') {

    echo '<br>Invocamos a la función<br><br>';
    echo 'El precio INICIAL sin IVA es: <b>'.$num1.'</b><br>';
    $prod = $num1 * $num2;
    $num1 = $prod;
    echo 'El precio con iva es: <b>'.$num1.'</b>';
}

$precio = '100';
echo '<b>Programa principal</b>';
precioConIvaPorDefecto($precio);
?>
