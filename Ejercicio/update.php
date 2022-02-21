<?php

$prev = $_POST['prev'];
$post = $_POST['post'];

if(!empty($prev) && !empty($post)){
   
   $hostname = 'localhost';
   $username = 'root';
   $password = 'root';
   $database = 'notasasir';
   
   $link = mysqli_connect($hostname,$username,$password,$database);
   
   
   $update_query = "UPDATE asignatura SET nombre = '$post' WHERE nombre = '$prev';";
   
   mysqli_query($link, $update_query);
   
   printf("Filas modificadas =  %d\n", mysqli_affected_rows($link));
      
   mysqli_close ($link);
   
   }

else {
    echo 'Falta algún valor por rellenar<br>';
} 

?>