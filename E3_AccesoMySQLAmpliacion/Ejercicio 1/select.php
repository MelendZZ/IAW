<?php
$hostname = 'localhost';
$username = 'root';
$password = 'root';
$database = 'bd1_iaw';

$link = mysqli_connect($hostname, $username, $password, $database);

echo "<h3>Lectura de la tabla</h3>";
$consulta = "SELECT * from clientes_iaw";
$select_query = mysqli_query($link, $consulta);
$filas_select = mysqli_affected_rows($link);


$filas = mysqli_fetch_all($select_query, MYSQLI_ASSOC);

echo "<html><body><table border='1'>";

echo "<tr><td><b>ID</b></td><td><b>Nombre</b></td><td><b>Teléfono</b></td></tr>";

foreach ($filas as $fila) {
    echo "<tr><td>".$fila['id']."</td><td>".$fila['nombre']."</td><td>".$fila['telefono']."</td></tr>";
 }
 echo "</table></body></html>";



mysqli_close($link);
?>

