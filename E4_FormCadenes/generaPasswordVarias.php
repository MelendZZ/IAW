<?php

$basic = $_GET['basico'];
$espec = $_GET['espec'];
$carac = $_GET['carac'];
$numero = $_GET['numero'];

$basicos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$esp = "$@%&\/()_-";


$arrayPass=array();
echo '<b>Genera varias passwords</b><br><br>';
for ($m = 0; $m < $numero; $m++) {
    $passBas = "";
    
    for ($i = 0; $i < $basic; $i++) {
        $a = rand(0, 61);
        $b = substr($basicos, $a, 1);
        $passBas .= $b;
    }
    $passEsp = "";

    for ($j = 0; $j < $espec; $j++) {
        $a = rand(0, 9);
        $b = substr($esp, $a, 1);
        $passEsp .= $b;
    }

    if ($carac == "basesp") {
        $password = $passBas . $passEsp;
        
        
    } elseif ($carac == "espbas") {
        $password = $passEsp . $passBas;
    }
    //array_push($arrayPass,$password);
    $arrayPass[$m]=$password;
    echo $arrayPass[$m].'<br>';
}
?>
