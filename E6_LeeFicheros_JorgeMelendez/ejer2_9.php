<?php

$fich = "./ejer2_8_0n.txt";
$fp = fopen($fich, "r");
$fecha=getdate();
$hoy="$fecha[mday]/$fecha[mon]/$fecha[year]";

echo '<b>Utiliza fgetc()</b><br><br>';
echo 'Contenido del fichero ejer2_8_0n.txt hasta la fecha '.$hoy.':<br>';
if (!$fp) {
    echo 'No se pudo abrir el archivo';
}
while (!feof($fp)) {
    $carac = fgetc($fp);

    if ($carac == "\n") {
        echo "<br>";
    } else {
        echo $carac;
    }
}
fclose($fp);
?>

