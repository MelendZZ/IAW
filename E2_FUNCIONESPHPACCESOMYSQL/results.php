<?php

$search = $_POST['search'];
$dato = $_POST['dato'];


if (!$search || !$dato) {
    echo "Falta uno de los datos a introducir, vuelve a intentarlo";
}

$hostname = 'localhost';
$username = 'root';
$password = 'root';
$database = 'bookorama';

$link = mysqli_connect($hostname, $username, $password, $database);

 if (!$link){
       echo "Error No se pudo conectar a MySQL.". PHP_EOL;
   }
   
   else{
       echo 'Conexión establecida <br>';
       echo '<b>La base de datos es: </b>'.$database.'<br><br>';
       echo 'Estamos buscando mediante '. $search . ' el dato '.$dato.'<br><br>';
       
   $consulta = "SELECT * from books where $search LIKE '%$dato%'";
   $select_query = mysqli_query($link, $consulta);
   $filas_select = mysqli_affected_rows($link);
   printf("Las lineas afectadas son: %d\n", $filas_select);
   
   echo "<br><br>";
   
   $filas = mysqli_fetch_all($select_query,MYSQLI_ASSOC);
   
   foreach ($filas as $fila) {
       echo '<b>ISBN: </b>'. $fila['isbn'].'<br>';
       echo '<b>Autor: </b>'. $fila['author'].'<br>';
       echo '<b>Título: </b>'. $fila['title'].'<br>';
       echo '<b>Precio: </b>'. $fila['price'].'<br><br>';
       }
   }
       
   
   
   mysqli_close($link);
   
   
?>

