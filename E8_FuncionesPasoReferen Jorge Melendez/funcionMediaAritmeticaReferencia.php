<?php

function mediaValoresRefer($num1,&$num2)
{
    $númargs = func_num_args();
    echo "Número de argumentos utilizados: $númargs <br>";
    echo '<br>Valor de los argumentos utilizados: <br>'.$num1.' y '.$num2.'<br>';
    $suma=$num1+$num2;
    $media=$suma/$númargs;
    $num2=$media;
    echo 'El resultado está en num2 y es: '.$num2;
   }
$num1=10;
$num2=30;
echo '<b>Programa principal</b><br>';
echo 'El valor de los parámetros lo establecemos desde él <br>';
echo 'Hacemos la llamada a la función<br><br>';

mediaValoresRefer($num1,$num2);

?>
