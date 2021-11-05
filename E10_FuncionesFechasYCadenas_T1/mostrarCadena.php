<?php

function contarImpares($cadena) {
    echo 'La cadena recibida como argumento era:<br>'.$cadena.'<br>';
    echo 'La cadena con los caracteres impares es: <br>';
    for ($i = 0; $i < strlen($cadena); $i++) {
        if ($i % 2 == 0) {
            echo "<b>$cadena[$i]</b>";
        }
    }
    echo '<br><br>';
}

function contarwordImpares($cadena) {
    echo 'La cadena recibida como argumento era:<br>'.$cadena.'<br>';
    echo 'La cadena con las palabras impares es: <br>';
    $palabra = explode(" ", $cadena);
    for ($i = 0; $i < count($palabra); $i++) {
        if ($i % 2 == 0) {
            echo "<b>$palabra[$i] </b>";
        }
    }
}

$frase = "A quien madruga Dios le ayuda";
echo 'Invocamos a la funcion contarImpares<br>';
contarImpares($frase);
echo 'Invocamos a la funcion contarwordImpares<br>';
contarwordImpares($frase);
?>