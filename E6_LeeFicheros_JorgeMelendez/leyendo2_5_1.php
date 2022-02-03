<?php
$url="./mensajes2_5_1.txt";
$open=fopen($url,"r");
$contenido=fread($open, filesize($url));

echo '<b>Utiliza fread()</b><br><br>';
echo 'El contenido del fichero mensajes2_5_1.txt es ...<br><br>';

if ($open){
    echo $contenido;
    
}

else {
    echo "No se ha abierto";
}
fclose($open);
?>
