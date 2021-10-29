<?php
$vect=array(10,20,30,40,50);
$num_ele=count($vect);
$sum=0;
echo 'Numero de elementos del array: '.$num_ele .'<br><br>';
echo 'Los elementos son: <br>';
for ($i=0;$i<$num_ele;$i++)
{
    echo $vect[$i].'<br>';
    $sum=$sum+$vect[$i];
}

echo '<br><b>SUMA= '.$sum.'</b>';
?>
       