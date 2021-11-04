<?php
include './funcionProducto.php';
$a=10;
$b=20;
echo 'Asignamos valores a las variables:<br><br>';
echo 'multiplicando: '.$a;
echo '<br>multiplicador: '.$b;
echo '<br><br>Invocamos a la funcion<br>';
echo 'Se encuentra en el archivo: <b>funcionProducto.php</b><br>';
$res=producto($a, $b);
echo 'El resultado de '.$a.' X '.$b.' es <b>'.$res.'</b>'?>
