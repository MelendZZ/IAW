<?php



$num1=((int)$_GET['num1']);
$num2=((int)$_GET['num2']);

echo '<h1>Introducción de dos números</h1>
      <h3>Operaciones básicas</h3>
      <h2>Las operaciones aritméticas son:</h2>';
$suma=$num1+$num2;
$resta=$num1-$num2;
$mult=$num1*$num2;
$div=$num1/$num2;
$rest=$num1%$num2;



echo 'La suma vale: '.$suma.'<br>';
echo 'La resta vale: '.$resta.'<br>';
echo 'La multiplicación vale: '.$mult.'<br>';
echo 'La división vale: '.$div.'<br>';
echo 'El resto de la división vale: '.$rest.'<br>';
echo '<h2>Las operaciones LOGICAS son:</h2>';
if($num1==true && $num2==true){
    echo 'AND de los numeros: '.((int)true).'<br>';
}
 else {
     echo 'AND de los numeros: '.((int)false).'<br>';
}

if($num1==true || $num2==true){
    echo 'OR de los numeros: '.((int)true).'<br>';
}
 else {
     echo 'OR de los numeros: '.((int)false).'<br>';
}
echo '<h2>Las operaciones a nivel de BIT son:</h2>';
$and=$num1 & $num2;
$or=$num1 | $num2;
echo 'AND bit de los numeros: '.$and.'<br>';
echo 'OR bit de los numeros: '.$or.'<br>';
$izq=$num1 << $num2;
$der=$num1 >> $num2;

echo 'Desplazamiento del número: '.$num1. '==>'.$num2.' posiciones a la izqda '.$izq.'<br>';
echo 'Desplazamiento del número: '.$num1. '==>'.$num2.' posiciones a la drcha '.$der;
?>

