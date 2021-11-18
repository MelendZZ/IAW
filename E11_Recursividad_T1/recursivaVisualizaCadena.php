<?php

function visualizaCadena ($cad){
    
    for ($i=strlen($cad)-1;$i>=0;$i--)
    {
        echo "$cad[$i]";
    }
}

$frase='Cadena de ejemplo';

visualizaCadena($frase); 
?>

