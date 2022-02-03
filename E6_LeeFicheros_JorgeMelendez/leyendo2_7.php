<?php
$fich="./mensajes2_7.txt";
echo 'Visualizamos con readfile():<br>';
if(file_exists($fich))    readfile($fich);

$fp= fopen($fich, "r");
if ($fp)
{
    $linea=fgets($fp,255);
    echo "<br><b>$linea</b><br>";
    echo 'Resto con fpassthru():<br>';
    fpassthru($fp);
}
fclose($fp);
?>
