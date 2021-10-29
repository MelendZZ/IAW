<?php

echo '<b>Programa principal</b><br>';
echo 'El valor de los parámetro lo establecemos desde él<br>Hacemos la llamada a la función<br><br>';
echo '<b>Función aritmetica</b><br>';

function contar()
{
    #$numArgs = func_num_args();
    #echo 'Numero de argumentos utilizados: '.$numArgs;
    $númargs = func_num_args();
    echo "Número de argumentos: $númargs <br>";
    $arg_list = func_get_args();
    $suma=0;
    for ($i = 0; $i < $númargs; $i++) {
        echo "Parametro $i ==> valor: " . $arg_list[$i] . "<br>";
        $suma=$suma+$arg_list[$i];
        
    }
    $media=$suma/$númargs;
    echo '<h1>La media de dichos argumentos es: '. number_format($media,2).' </h1>';
    }

contar(10,20,30,40);
?>