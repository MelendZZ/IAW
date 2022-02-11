<?php

$id = $_POST['id'];
$name = $_POST['name'];
$telf = $_POST['telf'];

if(!empty($id) && !empty($name) && !empty($telf)){
   
   $hostname = 'localhost';
   $username = 'root';
   $password = 'root';
   $database = 'bd1_iaw';
   
   $link = mysqli_connect($hostname,$username,$password,$database);
   
   
   $insert_query = "INSERT INTO clientes_iaw (id,nombre,telefono) VALUES($id,'$name','$telf')";
   mysqli_query($link, $insert_query);
   
   printf("Filas insertadas =  %d\n", mysqli_affected_rows($link));
   
   echo "<br><br><html><body><table border='1'>";
   echo "<tr><td><a href='insertar.html'>Insertar un nuevo registro</a></td></tr>";
   echo "<tr><td><a href='Formu_DML.html'>Volver al formulario</a></td></tr>";
   echo "</table></body></html>";
   
   mysqli_close ($link);
   
   }

else {
    echo 'Falta algún valor por rellenar<br>';
} 

?>