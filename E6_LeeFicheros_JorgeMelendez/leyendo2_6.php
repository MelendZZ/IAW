<?php
$url="./mensajes2_5_1.txt";
$open=fopen($url,"r");
$contenido=fread($open, filesize($url));

echo '<b>Utiliza filesize()</b><br><br>';
echo 'El contenido del fichero mensajes2_5_1.txt es ...<br><br>';

if ($open){
    echo $contenido;
    echo "<br><br>El tamaño es:<br><b>".filesize($url)."</b> caracteres";
    
}

else {
    echo "No se ha abierto";
}
fclose($open);
?>
