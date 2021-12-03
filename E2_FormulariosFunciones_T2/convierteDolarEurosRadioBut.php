<?php

$cantidad = $_GET['cantidad'];
$conver = $_GET['conver'];

if (empty($cantidad)) {
    echo '<h3>Error: No hay valor</h3>';
} 

else {
    if ($conver == "euro") {

        if ($cantidad > 0) {
            echo '<b>Realizamos la conversion a dolares estadounidenses</b><br><br>';
            echo 'Usted indico la siguiente información:<br><br>';
            echo 'Cantidad: ' . $cantidad . ' euros <br><br>';
            echo 'Resultado de la conversion: ' . $cantidad * 1.13 . ' dolares estadounidenses';
        } else {
            echo '<b>Opps...</b><br><br>';
            echo '<b>Error: ' . $cantidad . ' es valor negativo</b>';
        }
    } elseif ($conver == "dolar") {

        if ($cantidad > 0) {
            echo '<b>Realizamos la conversion a euros</b><br><br>';
            echo 'Usted indico la siguiente información:<br><br>';
            echo 'Cantidad: ' . $cantidad . ' dolares <br><br>';
            echo 'Resultado de la conversion: ' . $cantidad * 0.88 . ' euros';
        } else {
            echo '<b>Opps...</b><br><br>';
            echo '<b>Error: ' . $cantidad . ' es valor negativo</b>';
        }
    }
}
?>
