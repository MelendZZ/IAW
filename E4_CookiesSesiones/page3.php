<?php

session_start();
echo "El contenido de \$_SESSION['sess_var'] es: " .$_SESSION['sess_var'];

echo "<br><br>Hemos visto que se ha perdido el valor de la variable<br><br>";

echo "<i>A continuación vamos a destruir el identificador de la sesión<br/>";
echo "mediante session_destroy()</i><br><br>";

if (session_destroy())
{
    echo "<b>Sesión destruida!!</b>";
}  

?>