<?php
function comprobarEmail($cadena){
    echo 'Email a analizar: <br>';
    echo "'$cadena'";
    echo "<br><br>";
    
    echo 'Tiene '.strlen($cadena).' letras <br>';
    
    $correo = explode("@", $cadena);
    
    if ($correo[0] == '' || $correo[1] == '') {
        echo 'Es una dirección de email no válida';
    }
    
    else {
        echo 'Es una dirección de correo valida';
    }
    
    echo '<br><br>';
    
    echo 'El nombre de usuario es: <b>'.$correo[0].'</b><br>';
    echo 'El dominio es: <b>'.$correo[1].'</b>';
  
        
    
}

$email="nombreApellido@gmail.com";
comprobarEmail($email);

?>
