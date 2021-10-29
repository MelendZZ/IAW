<html>
    <body>
        <b>El contenido de las variables almacenadas es:</b> <br><br>
        
        <table border="1">
            <tr><th><b>Variable</b></th><th><b>Valor</b></th></tr>
        <?php
        include 'varsFrutas.php';
        echo '<tr><td>Fruta</td><td>'.$fruta.'</td></tr>';
        echo '<tr><td>Tamaño</td><td>'.$tamaño.'</td></tr>';      
        echo '<tr><td>Color</td><td>'.$color.'</td></tr>';
        echo '<tr><td>Posición</td><td>'.$posicion.'</td></tr>';
        ?>
        </table>
    </body>
</html>
    
    
