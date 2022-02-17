<?php
/*CREAMOS LAS COOKIES ANTES DE REALIZAR LA ETIQUETA HTML*/

$secs=365*24*60*60;
$fechaFin=time()+$secs;  //Caduca en un año

if(isset($_COOKIE['cont'])){
    $veces=$_COOKIE['cont'] + 1;
    setcookie('cont', $veces, $fechaFin);
    $mess='La pagina web ha sido visitada '.$_COOKIE['cont'].' veces';
    echo $mess.'<br>';
}
 else {
     $veces=1;
     setcookie('cont', $veces, $fechaFin);
     $mess='Has visitado la página por primera vez';
     echo $mess.'<br>';
}
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Ejemplo de cookies</title>
    </head>
    <body>
        <h4>
            Ejemplo de COOKIES en página 
        </h4>
    </body>
</html>