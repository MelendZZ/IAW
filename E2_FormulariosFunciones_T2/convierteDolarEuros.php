<?php
$euro=$_GET['euros'];
echo '<h3>Conversion sin control de errores</h3>';
echo '<b>Realizamos la conversion a dolares estadounidenses</b><br><br>';

echo 'Usted indico la siguiente información:<br><br>';
echo 'Cantidad: '.$euro. ' euros <br><br>';

echo 'Resultado de la conversion: '.$euro*1.13.' dolares estadounidenses';



?>

