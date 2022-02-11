<?php

$hostname = 'localhost';
$username = 'root';
$password = 'root';
$database = 'bd1_iaw';

$link = mysqli_connect($hostname, $username, $password, $database);

$eliminado = $_POST['eliminado'];
$eliminar = $_POST['eliminar'];

if (isset($eliminar)) {
    $delete = "DELETE FROM clientes_iaw WHERE nombre = '$eliminado'";
    
    mysqli_query($link, $delete);
    
    printf("Filas eliminadas =  %d\n", mysqli_affected_rows($link));
    
}

   echo "<br><br><html><body><table border='1'>";
   echo "<tr><td><a href='delete.php'>Borra otro registro</a></td></tr>";
   echo "<tr><td><a href='Formu_DML.html'>Volver al formulario</a></td></tr>";
   echo "</table></body></html>";

mysqli_close($link);

?>

