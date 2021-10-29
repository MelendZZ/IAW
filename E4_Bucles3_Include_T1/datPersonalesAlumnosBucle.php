<html>
  
    <body>
        <table border="1">
            <tr><th colspan="2"><b>Datos Personales</b></th></tr>

<?php 
        include 'datosAlumnos.php';
        $numAlumnos=3;
        for ($i=1;$i<=$numAlumnos;$i++){
            $nombre='nom'.$i;
            $apellido='apellidos'.$i;
            $edad='edad'.$i;
            $tlf='tlf'.$i;
            
             echo '<tr><td>Nombre</td><td>'.$$nombre.'</td></tr>';
             echo '<tr><td>Apellidos</td><td>'.$$apellido.'</td></tr>';
             echo '<tr><td>Edad</td><td>'.$$edad.'</td></tr>';
             echo '<tr><td>Telefono</td><td>'.$$tlf.'</td></tr>';
             echo '<tr><td colspan="2" align="center">==========</td></tr>';            
        }
            
?>            
        </table>
    </body>
</html>