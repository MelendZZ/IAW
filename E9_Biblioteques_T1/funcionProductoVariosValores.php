<?php
function producto(){
    $numargs = func_num_args();
    echo "Número de elementos a multiplicar: $numargs <br><br>";
    $arg_list = func_get_args();
    echo 'Valores:<br>=========<br>(';
    $pro=1;
    for ($i = 0; $i < $numargs; $i++) {
        if($i==$numargs-1){
            echo $arg_list[$i];
            $pro=$pro*$arg_list[$i];
        } 
        else{
        echo $arg_list[$i].',';
        $pro=$pro*$arg_list[$i];
    }}
    echo ') <br>';
    echo '<b>El producto es: '.$pro.'</b>';
}

echo '<b>Estamos en programa principal</b><br>';
echo 'El valor de los parametros lo establecemos desde él<br>';
echo 'Hacemos la llamada a la función<br><br>';

producto(6,5,4,3,2,1);
?>
