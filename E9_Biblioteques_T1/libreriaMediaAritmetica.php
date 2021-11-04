<?php

function mediaValores()
{
    echo '<b>Función media Valores</b><br>';
    echo '===================<br><br>';
    $númargs = func_num_args();
    echo "Número de argumentos: $númargs <br>";
    $arg_list = func_get_args();
    $suma=0;
    for ($i = 0; $i < $númargs; $i++) {
        echo "Parametro $i ==> valor: " . $arg_list[$i] . "<br>";
        $suma=$suma+$arg_list[$i];
        
    }
    $media=$suma/$númargs;
   echo '<b>Valor de la media: '.$media.'</b>';
   }

function mediaArray($x)
{
    echo '<br><br><br><b>Función mediaArray</b><br>';
    echo '===================<br><br>';
    $suma=0;
    for ($i = 0; $i < count($x); $i++) {
     $suma=$suma+$x[$i];
     
    }
    $media=$suma/count($x);
    echo 'Numero de elementos del array recibido: '.count($x).'<br><br>';
    echo 'El contenido del array recibido es: <br>'; 
    print_r($x);
    echo '<h3>La media de dichos argumentos es: '.number_format($media,2).'</h3>';
    
    
    
}


function mediaValoresRefer($num1,&$num2)
{
    echo '<br><br><br><b>Función mediaValoresRefer</b><br>';
    echo '===================<br><br>';
    $númargs = func_num_args();
    echo "Número de argumentos utilizados: $númargs <br>";
    echo '<br>Valor de los argumentos utilizados: <br>'.$num1.' y '.$num2.'<br>';
    echo 'No hace falta hacer return<br>';
    echo 'Damos formato al valor de la media con printf<br>';
    $suma=$num1+$num2;
    $media=$suma/$númargs;
    $num2=$media;
    printf("<b>La media de dichos argumentos es: %1\$.2f",$media,"</b>");
   }?>
