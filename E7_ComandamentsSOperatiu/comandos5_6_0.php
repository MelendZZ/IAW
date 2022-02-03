<?php

$ruta = "C:/Users/alumno/Desktop/ExamenPHPrepaso/PDFPreguntas/";
$abrir = @opendir($ruta);
$read = readdir($abrir);

while ($read != false) {
    $arch = $read;
    $vec = explode(".", $arch);
    $file = $vec[0];
    $ext = $vec[1];
    $size = filesize($ruta.$read);
    if ($ext == "pdf" || $ext == "ps") {
        echo "$arch $size bytes <br>";
    }
    
    $read = readdir($abrir);
}

closedir($abrir);
?>
