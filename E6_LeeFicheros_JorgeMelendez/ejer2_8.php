<?php
$fich="./ejer2_8_0.txt";
$fp= fopen($fich, "r");
$fecha=getdate();
$hoy="$fecha[mday]/$fecha[mon]/$fecha[year]";

echo "<b>Lee archivo con fgets</b><br><br>";
echo 'Contenido del fichero <b>ejer2_8_0.txt</b> hasta fecha de hoy ('.$hoy.')<br><br>';

while (!feof($fp))
{
    $linea=fgets($fp,255);
    echo "<b>$linea</b><br><br>";
}

?>
