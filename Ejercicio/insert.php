<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$sad = $_POST['sad'];
$fol = $_POST['fol'];
$iso = $_POST['iso'];
$iaw = $_POST['iaw'];
$aso = $_POST['aso'];
$par = $_POST['par'];

if (!empty($nombre) && !empty($apellid) && !empty($sad) && !empty($fol) && !empty($iso) && !empty($iaw) && !empty($aso) && !empty($par)) {

    $hostname = 'localhost';
    $username = 'root';
    $password = 'root';
    $database = 'notasasir';

    $link = mysqli_connect($hostname, $username, $password, $database);

    $alumnoquery = "INSERT INTO alumno (nombre,apellido) VALUES('$nombre','$apellido')";

    if (mysqli_query($link, $alumnoquery)) {
        echo 'Alumno registrado en la tabla alumnos <br>';
    } else {
        echo "Error (" . mysqli_errno($link) . ") " . mysqli_error($link);
    }
    
    $sadquery="INSERT INTO alumnonotaasignatura (nota,codAlumno,codAsignatura) VALUES ('$sad',,1)";
}
?>
