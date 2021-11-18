<?php

include 'funcionPotenciaRecursiva.php';
$a=10;
$b=5;
$prod1= potenciaRecv1($a, $b);
$prod2= potenciaRecv2($a, $b);


echo 'Asignamos valores a los dos valores <br>$a= '.$a.'<br>$b= '.$b.'<br><br>';
echo "Llamada a función <b>Potencia Recursiva Version 1</b><br>La potencia de $a elevado a $b es $prod1<br><br>";
echo "Llamada a función <b>Potencia Recursiva Version 2</b><br>La potencia de $b elevado a $a es $prod2";

?>