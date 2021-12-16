<?php

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

echo '<h3>Añadiendo en fichero</h3>';
echo '<b>Se AÑADEN datos cada vez que ejecutamos</b><br><br>';

$url="./fichero.txt";
$fp= fopen($url, 'a');
fwrite($fp, generateRandomString());
fwrite($fp, "\n");
fclose($fp);
?>
