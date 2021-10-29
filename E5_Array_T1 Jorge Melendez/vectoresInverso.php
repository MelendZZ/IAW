<?php
$vect=array("Pepito","Juanito","Andresito","Felipito","Gerardito");
$cadena= end($vect);
echo 'Contenido del vector de cadenas con WHILE-END-PREV:<br><br>';
while ($cadena)
{
    echo '<li>'.$cadena.'</li>';
    $cadena=prev($vect);
 }
?>
