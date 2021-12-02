<?php

$euro = $_GET['euros'];
echo '<h3>Conversion con control de errores</h3>';

if (empty($euro)) {
    echo '<h3>Error: No hay valor</h3>';
}


else {
    if ($euro > 0) {

        echo '<b>Realizamos la conversion a dolares estadounidenses</b><br><br>';
        echo 'Usted indico la siguiente información:<br><br>';
        echo 'Cantidad: ' . $euro . ' euros <br><br>';
        echo 'Resultado de la conversion: ' . $euro * 1.13 . ' dolares estadounidenses';
    } else {
        echo '<b>Opps...</b><br><br>';
        echo '<b>Error: ' . $euro . ' es valor negativo</b>';
    }
}
?>