<?php
$hostname = 'localhost';
$username = 'root';
$password = 'root';
$database = 'gest_asignaturasdb';

$link = mysqli_connect($hostname, $username, $password, $database);

echo 'Estamos en listar Familias Profesionales<br>';

$fam="SELECT * from famprofesional";
$cic="SELECT * from ciclo";
$mod="SELECT * from modulo";
$gra="SELECT * from grado";
$colfam="SHOW columns from famprofesional";
$colcic="SHOW columns from ciclo";
$colmod="SHOW columns from modulo";
$colgra="SHOW columns from grado";

//Listar FAMILIAS

$famquery=mysqli_query($link, $fam);
$familias = mysqli_fetch_all($famquery, MYSQLI_ASSOC);
$colfamquery=mysqli_query($link, $colfam);
$familiascol = mysqli_fetch_all($colfamquery, MYSQLI_ASSOC);

foreach ($familiascol as $familiacol) {
    echo $familiacol['Field'].' | ';
}


foreach ($familias as $familia){
    echo '<br>'.$familia['codFamilia'].' | '.$familia['nomFamilia'];
}


//Listar CICLOS

//Listar MODULOS

//Listar GRADOS

?>
