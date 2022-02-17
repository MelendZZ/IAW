<?php

function borra_cookie($nomCookie) {
    if (isset($_COOKIE[$nomCookie])) {
        $tiempo_vida = -1;
        setcookie($nomCookie);
        unset($_COOKIE[$nomCookie]);
        return true;
    } else {
        return false;
    }
}

//PROGRAMA PRINCIPAL
$nomCookie = 'contador1';
echo '<b>Intentamos borrar manualmente la cookie...</b><br>';
$borra = borra_cookie($nomCookie);

if (isset($_COOKIE[$nomCookie])) {
    $veces = $_COOKIE[$nomCookie] + 1;
    setcookie($nomCookie, $veces);
    $mess = 'La pagina web ha sido visitada ' . $_COOKIE[$nomCookie] . ' veces';
    echo $mess . '<br>';
} else {
    $veces = 1;
    setcookie($nomCookie, $veces);
    $mess = 'Has visitado la página por primera vez';
    echo $mess . '<br>';
}

if ($borra) {
    echo "Borrada la cookie <b>$nomCookie</b><br>";
    echo "Intentamos ver su contenido...<br><br>";

    if (isset($_COOKIE[$nomCookie])) {
        echo "Valor de la cookie: $_COOKIE[$nomCookie]";
    } else {
        echo 'No tiene contenido <br>';
    }
} else {
    echo "No se ha podido borrar la cookie";
}
?>