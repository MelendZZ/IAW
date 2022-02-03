<html>
    <body>
        <table border="1">
            <tr><td>Fichero</td><td>Tamaño</td></tr><?php

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
        echo "<tr><td>$file</td><td>$size</td></tr>";
    }
    
    $read = readdir($abrir);
}

closedir($abrir);
?>
        </table>
    </body>
</html>
