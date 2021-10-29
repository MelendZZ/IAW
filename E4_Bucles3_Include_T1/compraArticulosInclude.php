<?php
$frenos = 5;
$aceite = 1;
$ruedas = 4;

include 'compraArticulosHeader.php';

$suma = $aceite+$frenos+$ruedas;
$subtotal = PRECIOFRENOS*$frenos+PRECIOACEITE*$aceite+PRECIORUEDAS*$ruedas;
$iva = $subtotal*1.21;


if ($frenos < 1 && $aceite < 1 && $ruedas > 0) {
    echo 'No comprados: frenos, aceite';
    echo '<h1><b>La petición ha de contener todos los tipos de artículo!!</b></h1>';
}

else if ($frenos < 1 && $ruedas < 1 && $aceite > 0) {
    echo 'No comprados: frenos, ruedas';
    echo '<h1><b>La petición ha de contener todos los tipos de artículo!!</b></h1>';
}

else if ($aceite < 1 && $ruedas < 1 && $frenos > 0) {
    echo 'No comprados: aceite, ruedas';
    echo '<h1><b>La petición ha de contener todos los tipos de artículo!!</b></h1>';
}

 else if ($aceite < 1 && $ruedas < 1 && $frenos < 1) {
    echo 'Ninguno ha sido comprado';   
    echo '<h1><b>La petición ha de contener todos los tipos de artículo!!</b></h1>';
}

 else if ($aceite >= 1 && $ruedas >= 1 && $frenos >= 1) {
     echo '<b>Se han comprado todos los artículos </b> <br><br>Su petición es la '
.   'siguiente:<br>Frenos: ' . $frenos . '<br>Aceite: ' . $aceite . '<br>Ruedas: '
      . $ruedas . '<br><br>'  ;

    echo '<b>Número de elementos solicitados: ' . $suma . '<br>Subtotal: ' . 
             $subtotal . ' euros<br>Total con el IVA: ' . $iva . ' euros.</b>';
}

include 'compraArticulosFooter.php';
?>