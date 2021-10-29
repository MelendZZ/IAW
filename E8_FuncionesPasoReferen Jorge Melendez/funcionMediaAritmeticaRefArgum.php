<?php
function mediaValoresRefer($num1,$num2,$num3,$num4,&$suma,&$media)
{
    $númargs = func_num_args();
    $args=$númargs-2;
    $arg_list = func_get_args();
    echo 'Número de argumentos utilizados: '. $args . '<br>';
    echo '<br>Valor de los argumentos utilizados: <br>';
    for ($i=0;$i<$args;$i++){
       echo '<ul><li>Parametro '.($i+1).' ==> '.$arg_list[$i].' </li></ul>';
    }
    $suma1=$num1+$num2+$num3+$num4;
    $suma=$suma1;
    $media1=$suma1/($númargs-2);
    $media=$media1;
    echo 'Valor del parámetro SUMA= '.$suma;
    echo '<br>Valor del parámetro MEDIA= '.$media;
   }
$num1=10;
$num2=20;
$num3=30;
$num4=40;
$suma=0;
$media=0;
echo '<b>Programa principal</b><br>';
echo '<b>================================</b><br>';

echo 'El valor de los parámetros lo establecemos desde él <br>';
echo 'Hacemos la llamada a la función<br><br>';
echo '<b>================================</b><br>';


mediaValoresRefer($num1,$num2,$num3,$num4,$suma,$media);

echo '<br><br><b>Estamos de nuevo en el Programa principal</b>';
echo '<br><b>================================</b><br>';
echo 'La SUMA está en el quinto parametro y es: <b>'.$suma.'</b><br>';
echo 'La MEDIA está en el sexto parametro y es: <b>'.$media.'</b><br>';

?>
