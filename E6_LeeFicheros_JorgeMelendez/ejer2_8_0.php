<?php
echo "<b>Lectura con readfile</b><br><br>";
echo 'Las peticiones contenidas ejer2_8_0.txt hasta la fecha 15/01/2022 son: <br><br>';
$fich="./ejer2_8_0.txt";
$fich1="./ejer2_8_0br.txt";
if(file_exists($fich))    readfile($fich);
echo '<br><br>Peticiones con br: <br><br>';
if(file_exists($fich1))    readfile($fich1);

?>
