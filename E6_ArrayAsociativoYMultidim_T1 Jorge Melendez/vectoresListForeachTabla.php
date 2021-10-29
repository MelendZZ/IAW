<html>
    <body>
        <h1>Visualizamos con una tabla</h1>
        Recorremos el vector creado<br><br>
        Construimos una tabla con sus elementos <br>
        <table border="1">
            <?php
            $personas = array(
                "ape0" => "nom0",
                "ape1" => "nom1",
                "ape2" => "nom2",
                "ape3" => "nom3",
                "ape4" => "nom4"
            );
            $personas["ape5"] = "nom5";
            $personas["ape6"] = "nom6";
            $personas["ape7"] = "nom7";
            $personas["ape8"] = "nom8";
            $personas["ape9"] = "nom9";
            echo 'Recorremos el vector creado ==><br><br>';
            echo '<tr><th>Apellido</th><th>Nombre</th></tr>';
            foreach ($personas as $ape => $nom) {
                echo '<tr><td>' . $ape . '</td><td>' . $nom . '</td></tr>';
            }
            ?>
        </table>
    </body>
</html>
