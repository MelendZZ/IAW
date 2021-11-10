<?php

function letrasFrase($cadena){
    
    echo 'La frase <i>'.$cadena.'</i> tiene '.strlen($cadena).' letras <br>';
}

function palabrasFrase($cadena) {
    
    $palabra = explode(" ", $cadena);
    echo 'Hay '.count($palabra).' palabras en la frase <br>';
}

function longitudPalabras ($cadena) {
    $palabra = explode(" ", $cadena);
    
    for($i=0;$i<count($palabra);$i++){
        
        echo '<br><b>'. $palabra[$i].'</b> '. strlen($palabra[$i]). ' letras';
        
    }
}


$frase='Tengo que ir al oculista pero nunca veo el momento';

letrasFrase($frase);
palabrasFrase($frase);
longitudPalabras($frase);

?>