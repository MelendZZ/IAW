<?php
session_start();

$_SESSION['sess_var']='Hola mundo!';

echo 'El contenido de $_SESSION['."'sess_var'".'] es '. $_SESSION['sess_var'];

echo '<br><br>Veamos cómo se mantiene su valor al enlazar con la siguiente página ... <br><br>';

echo 'Pulsa SIGUIENTE PÁGINA, se ejecutara page2...<br><br>';
?>

<a href="page2.php">Siguiente página</a>