<?php

function conv_EUtoUSD(&$cantidad) {
    $cantidad = $cantidad * 1.13;
}

function conv_USDtoEU(&$cantidad) {
    $cantidad = $cantidad * 0.88;
}

function error_negativo($cantidad) {
    echo '<b>Opps...</b><br><br>';
    echo '<b>Error: ' . $cantidad . ' es valor negativo</b>';
}

function error_valor($cantidad) {
    echo '<h3>Error: No hay valor</h3>';
}

function visualiza(&$cantidad,$conver){
    if ($conver == "euro"){
        echo '<b>Realizamos la conversion a dolares estadounidenses</b><br><br>';
        echo 'La conversion es: '.$cantidad;
           
    }
    
    elseif ($conver == "dolar"){
         echo '<b>Realizamos la conversion a euros</b><br><br>';
        echo 'La conversion es: '.$cantidad;
    }
}
?>