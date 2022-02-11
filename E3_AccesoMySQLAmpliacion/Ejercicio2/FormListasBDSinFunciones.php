<?php
$hostname = 'localhost';
$username = 'root';
$password = 'root';
$database = 'gest_asignaturasdb';

$link = mysqli_connect($hostname, $username, $password, $database);
?><html>
    <body>
        <table width="1200" border="1">
            <tr>
                <td width='250' align='center'><h3>Familia profesional</h3></td>
                <td width='250' align='center'><h3>Grado</h3></td>
                <td width='180' align='center'><h3>Ciclo</h3></td>
                <td width='250' align='center'><h3>Módulo</h3></td>
            </tr> 

            <tr>
                <td align='center'>
                    Seleccione familia profesional <br>
                    <select name='fam'>
                        <?php
                        $sqlfam = "SELECT * FROM famprofesional";
                        $resultfam = mysqli_query($link, $sqlfam);

                        while ($rowfam = mysqli_fetch_array($resultfam, MYSQLI_ASSOC)) {
                            echo '<option value="' . $rowfam["nomFamilia"] . '">' . $rowfam["nomFamilia"] . '</option>';
                        }
                        ?>
                    </select> 
                </td>
                <td align='center'>

                    Seleccione grado 
                    <br>
                    <select name='gra'>
                        <?php
                        $sqlgra = "SELECT * FROM grado";
                        $resultgra = mysqli_query($link, $sqlgra);

                        while ($rowgra = mysqli_fetch_array($resultgra, MYSQLI_ASSOC)) {
                            echo '<option value="' . $rowgra["nomGrado"] . '">' . $rowgra["nomGrado"] . '</option>';
                        }
                        ?>
                    </select> 
                </td>
                <td align='center'>
                    Seleccione ciclo<br>
                    <select name='cic'>
                        <?php
                        $sqlcic = "SELECT * FROM ciclo";
                        $resultcic = mysqli_query($link, $sqlcic);

                        while ($rowcic = mysqli_fetch_array($resultcic, MYSQLI_ASSOC)) {
                            echo '<option value="' . $rowcic["nomCiclo"] . '">' . $rowcic["nomCiclo"] . '</option>';
                        }
                        ?>
                    </select> 
                </td>
                <td align='center'>

                    Seleccione modulo 
                    <br>
                    <select name='mod'>
                        <?php
                        $sqlmod = "SELECT * FROM modulo";
                        $resultmod = mysqli_query($link, $sqlmod);

                        while ($rowmod = mysqli_fetch_array($resultmod, MYSQLI_ASSOC)) {
                            echo '<option value="' . $rowmod["nomModulo"] . '">' . $rowmod["nomModulo"] . '</option>';
                        }
                        ?>
                    </select> 
                </td>
            </tr>

            <tr>
                <td colspan="4" align="center">
                    <form name="visualizar" action="Gest_AsignaturasSinFunciones.php" method="POST">
                    <input type="submit" value="Enviar" name="enviar" />   
                    </form>
                </td>
            </tr>
        </table>
    </body>
</html>