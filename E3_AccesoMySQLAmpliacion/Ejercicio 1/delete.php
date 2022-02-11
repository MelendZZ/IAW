<?php

$hostname = 'localhost';
$username = 'root';
$password = 'root';
$database = 'bd1_iaw';

$link = mysqli_connect($hostname, $username, $password, $database);

$select = "SELECT nombre from clientes_iaw";

$query = mysqli_query($link, $select);

echo '<h3>Borrar un registro</h3>';
echo "<form name='borrar' action='delete2.php' method='post'>
            <select name='eliminado'>";

if ($query) {
    
    while ($row = mysqli_fetch_assoc($query)) {

    echo "<option value='" . $row['nombre'] . "'>" . $row['nombre']. "</option>";
}

    }
    
    echo '</select>';
   echo '<br><br><input type="submit" value="Eliminar" name="eliminar"></form>';

mysqli_close($link);
?>