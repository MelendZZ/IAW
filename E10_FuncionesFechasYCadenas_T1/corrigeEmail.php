<?php
function corrigeEmail($cadena){
    echo 'Email a analizar: <br>';
    echo "'$cadena'";
    echo "<br><br>";
    
    echo 'Tiene '.strlen($cadena).' letras <br>';
    $filtrado = trim($cadena);
    
    if ($filtrado != $cadena){
        echo 'Se han encontrado blancos <br> Los eliminamos... <br><br>';
        echo 'Hasta ahora <br>email='.$filtrado;
    }
    
    else {
        echo 'No tiene espacios en blanco';
    }
    
    $dominio = explode(".", $filtrado);
    
    echo '<br><br>Buscamos .com en email...<br>Hemos encontrado <b>'.$dominio[1].'</b><br>';
   
    if ($dominio[1] != 'es') {
        $email=str_replace('com','es', $cadena);
        echo "Dirección corregida: '$email'";
    }
    
 else {
        echo 'El dominio es el correcto';
    }
        
    
}

$email=" nombreApellido@ggggggmail.com ";
corrigeEmail($email);

?>
