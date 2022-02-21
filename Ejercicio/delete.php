<?php

$hostname = 'localhost';
$username = 'root';
$password = 'root';
$database = 'notasasir';

$link = mysqli_connect($hostname, $username, $password, $database);

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

if ($link) {
    $delete = "DELETE FROM alumno WHERE nombre = '$nombre' AND apellido = '$apellido'";
     if (mysqli_query($link, $delete)){       
                
                    printf("Filas modificadas= %d", mysqli_affected_rows($link));
                
            }
            else{
                echo "Error (" .mysqli_errno($link) .") " .mysqli_error($link);
            }
    
}
 else {
    echo 'No se ha podido conectar con la base de datos';
}
mysqli_close($link);
?>

