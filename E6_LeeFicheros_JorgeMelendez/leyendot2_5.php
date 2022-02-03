<?php
$fich="./mensajes2_5.txt";
$leer=readfile($fich);

if(file_exists($fich)) $leer;


else {
    echo "<b>El fichero no existe</b>";
}
?>