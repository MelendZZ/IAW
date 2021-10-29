<html>
    <body>
        <b>Array Datos Alumno Tabla</b>
        <br><br>
        <table border="1">
            <tr><th align="center" colspan="2">Datos Personales</th></tr>
           
  <?php
include 'datosPersonales.php';
$datos=array($nom1,$apellidos1,$edad1,$tlf1,$nom2,$apellidos2,$edad2,$tlf2);
echo '<tr><td><b>Nombre</b></td><td>'.$datos[0].'</td></tr>';
echo '<tr><td><b>Apellidos</b></td><td>'.$datos[1].'</td></tr>';
echo '<tr><td><b>Edad</b></td><td>'.$datos[2].'</td></tr>';
echo '<tr><td><b>Teléfono</b></td><td>'.$datos[3].'</td></tr>';
echo '<tr><td><b>Nombre</b></td><td>'.$datos[4].'</td></tr>';
echo '<tr><td><b>Apellidos</b></td><td>'.$datos[5].'</td></tr>';
echo '<tr><td><b>Edad</b></td><td>'.$datos[6].'</td></tr>';
echo '<tr><td><b>Teléfono</b></td><td>'.$datos[7].'</td></tr>';
?>