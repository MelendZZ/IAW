<?php
function precioIVA($n1,&$precio){
    echo 'El precio INICIAL sin IVA es: <b>'.$precio.'</b><br>';
    $prod=$n1*$precio;
    $precio=$prod+$precio;
    echo 'El precio con IVA es: <b>'.$precio.'</b>';
}

$iva=0.21;
$precio=100;
echo '<b>Programa principal</b><br>';
echo 'El valor del IVA lo establecemos desde él <br>';
echo 'El valor del IVA es: <b>'.$iva.'</b><br><br>';
precioIVA($iva,$precio);

?>
