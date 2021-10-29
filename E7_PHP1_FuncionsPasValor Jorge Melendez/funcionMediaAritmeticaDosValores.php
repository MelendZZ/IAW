<?php
function contar()
{
    $numArgs = func_num_args();
    echo 'Numero de argumentos utilizados: '.$numArgs;
}
function mediaAritmetica($num1,$num2)
{    
    $suma=$num1+$num2; 
    $media=$suma/2;
    echo '<h1>La media de dichos argumentos es: '. number_format($media,2).' </h1>';
}

echo '<b>Programa principal</b><br>';
echo 'El valor de los parámetro lo establecemos desde él<br>Hacemos la llamada a la función<br><br>';
echo '<b>Función media aritmética de dos valores</b><br>';
$a=10;
$b=20;
contar($a,$b);
echo 'Valor de los argumentos utilizados:<br>=================<br>';
echo 'Argumento 1: '.$a.'<br>';
echo 'Argumento 2: '.$b.'<br>';

mediaAritmetica($a,$b);
?>