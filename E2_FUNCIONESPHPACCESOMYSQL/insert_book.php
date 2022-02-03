<?php

$isbn = $_POST['isbn'];
$author = $_POST['author'];
$title = $_POST['title'];
$price = $_POST['price'];

if(!empty($isbn) && !empty($author) && !empty($title) && !empty($price)){
   
   $hostname = 'localhost';
   $username = 'root';
   $password = 'root';
   $database = 'bookorama';
   
   $link = mysqli_connect($hostname,$username,$password,$database);
   
   if (!$link){
       echo "Error No se pudo conectar a MySQL.". PHP_EOL;
   }
   
   else{
       echo 'Conexión establecida <br>';
       echo '<b>La base de datos es: </b>'.$database.'<br><br>';
   }
   
   $insert_query = "INSERT INTO books (isbn,author,title,price) VALUES('$isbn','$author','$title',$price)";
   mysqli_query($link, $insert_query);
   
   printf("Affected rows (INSERT): %d\n", mysqli_affected_rows($link));
   
   mysqli_close ($link);
   
   }

elseif (empty($isbn)) {
    echo 'Falta añadir valor en el isbn <br>';
} 

elseif (empty($author)){
    echo 'Falta añadir valor en el author <br>';
} 

elseif (empty($title)){
    echo 'Falta añadir valor en el title<br>';
} 

elseif (empty($price)){
    echo 'Falta añadir valor en el price <br>';
} 


?>