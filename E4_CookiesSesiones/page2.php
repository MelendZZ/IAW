<?php
session_start();
echo 'Intentemos acceder al contenido de la VARIABLE $_SESSION:...<br><br>';

echo 'El contenido de $_SESSION['."'sess_var'".'] es '. $_SESSION['sess_var'].'<br><br>';

echo "Ahora aplicamos unset(\$SESSION['sess_var'])<br>Por lo que pierde el valor de la variable<br><br>";

unset($_SESSION['sess_var']);
echo 'Pulsa SIGUIENTE PÁGINA, se ejecutará page3 <br><br>';
?>

<a href="page3.php">Siguiente página</a>