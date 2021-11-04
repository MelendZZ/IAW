<?php
function producto($a,$b){
    $prod=$a*$b;
    return $prod;
}
function productoValores(){
    $numargs = func_num_args();
    echo "Número de elementos a multiplicar: $numargs <br><br>";
    $arg_list = func_get_args();
    echo 'Valores: (';
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

?>
