<?php
function media($x){
    $suma=0;
    for ($i = 0; $i < count($x); $i++) {
     $suma=$suma+$x[$i];
     
    }
    $media=$suma/count($x);
    echo '<h3>La media de dichos argumentos es: '.number_format($media,2).'</h3>';
    
    
    
}
$num=array(10,20,30,40);
echo '<b>Programa principal</b><br>';
echo 'Creamos el vector de valores <br>Hacemos la llamada a la función con dicho vector <br><br><br>';
echo '<b>Función media aritmetica con array</b><br>';
echo 'Numero de elementos del array recibido: '.count($num).'<br><br>';
echo 'El contenido del array recibido es: <br>'; 
print_r($num);
media($num);
?>