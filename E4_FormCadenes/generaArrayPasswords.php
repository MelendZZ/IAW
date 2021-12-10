<?php

function generaArrayPasswords($basic, $espec, $carac, $numero) {
    $arrayPass = array();
    for ($m = 0; $m < $numero; $m++) {
        $passBas = "";
        $basicos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $esp = "$@%&\/()_-";

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
        $arrayPass[$m] = $password;
    }
    return $arrayPass;
}

$basic = $_GET['basico'];
$espec = $_GET['espec'];
$carac = $_GET['carac'];
$numero = $_GET['numero'];
$array = generaArrayPasswords($basic, $espec, $carac, $numero);

echo '<h2>Genera passwords varias funcion<br></h2>';
echo '<h3>El contenido del array de passwords es:<br></h3>';
for ($i=0;$i<$numero;$i++){
    echo '<b>'.$array[$i].'</b><br>';
    
}
?>