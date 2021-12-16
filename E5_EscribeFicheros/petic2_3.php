<?php

$nombre = $_POST['nombre'];
$dir = $_POST['direccion'];
$url = "./encargos2_3.txt";
$fp = fopen($url, 'a');
$fecha = getdate();

$registro = "$fecha[mday]/$fecha[mon]/$fecha[year] \t $nombre \t $dir";
if ($fp) {
    fwrite($fp, $registro);
    fwrite($fp, "\n");
    fclose($fp);
}
?>
