<?php
$vect=array("Pepito","Juanito","Andresito","Felipito","Gerardito");
$cadena=reset($vect);
echo 'Contenido del vector de cadenas con WHILE-RESET-NEXT:<br><br>';
while ($cadena)
{
    echo '<li>'.$cadena.'</li>';
    $cadena=next($vect);
 }
?>
