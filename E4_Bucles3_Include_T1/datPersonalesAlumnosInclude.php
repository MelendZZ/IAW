<html>
  
    <body>
        <table border="1">
            <tr><th colspan="2"><b>Datos Personales</b></th></tr>
<?php 
        include 'datosAlumnos.php';
            echo '<tr><td>Nombre</td><td>'.$nom1.'</td></tr>';
            echo '<tr><td>Apellidos</td><td>'.$apellidos1.'</td></tr>';
            echo '<tr><td>Edad</td><td>'.$edad1.'</td></tr>';
            echo '<tr><td>Telefono</td><td>'.$tlf1.'</td></tr>';
            echo '<tr><td colspan="2" align="center">==========</td></tr>';
            echo '<tr><td>Nombre</td><td>'.$nom2.'</td></tr>';
            echo '<tr><td>Apellidos</td><td>'.$apellidos2.'</td></tr>';
            echo '<tr><td>Edad</td><td>'.$edad2.'</td></tr>';
            echo '<tr><td>Telefono</td><td>'.$tlf2.'</td></tr>';
            
?>            
        </table>
    </body>
</html>