<?php
echo '<h3>Gestión de ficheros en PHP</h3>';
echo '<b>Genera un fichero .txt en directorio actual</b><br><br>';
echo 'Versión sin comprobación de errores en acceso al archivo<br>';
echo 'El fichero se crea cada vez que ejecutamos';

$url="./missatges.txt";
$open=fopen($url,"w");
$nombres=array("Jorge","Victor","Ruben","Borja","Javi");
$rand= array_rand($nombres,1);
$rand2= array_rand($nombres,1);
$rand3= array_rand($nombres,1);
if ($open)
{
fwrite($open, "Hola buenos dias $nombres[$rand]\n");
fwrite($open, "Hola buenas tardes $nombres[$rand2]\n");
fwrite($open, "Hola buenas noches $nombres[$rand3]\n");
fclose($open);
}
?>