<?php
$num[0][0]=0;
$num[0][1]=1;
$num[0][2]=2;
$num[1][0]=3;
$num[1][1]=4;
$num[1][2]=5;
$num[2][0]=6;
$num[2][1]=7;
$num[2][2]=8;

$m=0;
$n=0;
echo 'VISUALIZAMOS CON FOR ANIDADO LAS FILAS Y COLUMNAS DE LA MATRIZ <br>';
for ($m=0;$m<3;$m++)
{
    for ($n=0;$n<3;$n++)
    {
        echo $num[$m][$n].'<br>';
    }
}

echo '<br><br>';

echo 'Visualizamos con WHILE <br>';

$letr=array(
    array('a','b','c'),
    array('d','e','f'));

$i=0;
$j=0;
$cont=count($letr);

while ($i < 2){
    while ($j < 3){
       echo $letr [$i][$j] ."<br>"; 
       $j++;
    }
    
    $j =0;
    $i++;
}

?>