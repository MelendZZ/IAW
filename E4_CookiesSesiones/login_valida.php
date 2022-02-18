<?php
session_start();

if (isset($_POST['user']) && isset($_POST['password'])) {
    $user = $_POST['user'];
    $password = $_POST['password'];

    $hostname = 'localhost';
    $username = 'root';
    $password = 'root';
    $database = 'bd1_iaw';

    $link = mysqli_connect($hostname, $username, $password, $database);
    $query = "SELECT * from usuarios WHERE user='$user' and pass='$password'";

    if ($link) {
        $result = mysqli_query($link, $query);
        $num_filas = mysqli_affected_rows($link);

        if ($num_filas > 0) {
            $_SESSION['valid_user'] = $user;
            echo 'Usuario existente <br>';
            mysqli_close($link);
        }
    } else {
        echo "Error: No se pudo conectar a MySQL. " . PHP_EOL;
    }
}
?>


<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h2>Página inicial</h2>
<?php
if (isset($_SESSION['valid_user'])) {
    echo "Estas conectado como " . $_SESSION['valid_user'] . "<br><br>";
    echo '<a href="logout_alumno.php">Salir (LOG OUT)</a><br><br>';
} else {
    if (isset($user)) {
        echo 'No se ha podido hacer la conexión!';
    } else {
        echo 'No estas conectado<br>';
    }
}
?>
        <br><br>
        <table>

            <form name="login" action="login_valida.php" method="POST">
                <tr><td>Usuario: </td><td><input type="text" name="user" value="" size="10" /></td></tr>
                <tr><td>Password:</td><td><input type="password" name="password" value="" size="10" /></td></tr>
                <tr><td colspan="2" align="center"><input type="submit" value="Conectar" name="conectar" /></td></tr>
            </form>
        </table>

        <a href="members_only.php">Sección Privada (sólo socios)</a>
    </body>


</html>


