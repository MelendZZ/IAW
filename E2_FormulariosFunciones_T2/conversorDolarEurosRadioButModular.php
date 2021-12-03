<?php

$cantidad = $_GET['cantidad'];
$conver = $_GET['conver'];

include './lib_EuroDolar.php';

if (empty($cantidad)) {
    error_valor($cantidad);
} else {
    if ($conver == "euro") {
        if ($cantidad > 0) {
            conv_EUtoUSD($cantidad);
            visualiza($cantidad, $conver);
        } else {
            error_negativo($cantidad);
        }
    } elseif ($conver == "dolar") {
        if ($cantidad > 0) {
            conv_USDtoEU($cantidad);
            visualiza($cantidad, $conver);
        } else {
            error_negativo($cantidad);
        }
    }
}
?>
