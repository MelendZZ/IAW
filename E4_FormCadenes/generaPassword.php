<?php
$basic=$_GET['basico'];
$espec=$_GET['espec'];
$carac=$_GET['carac'];

$basicos="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$esp="$@%&\/()_-";

$passBas="";

for ($i=0;$i<$basic;$i++){
    $a=rand(0,61);
    $b= substr($basicos, $a,1);
    $passBas.=$b;
    }
 $passEsp="";   
 
for ($j=0;$j<$espec;$j++){
    $a=rand(0,9);
    $b= substr($esp, $a,1);
    $passEsp.=$b;
    }
    
if ($carac == "basesp"){
    $password=$passBas . $passEsp;
    echo '<h3>El password generado aleatoriamente es:</h3><br>';
    echo '<h2>'.$password.'</h2>';
}

elseif ($carac == "espbas"){
    $password=$passEsp . $passBas;
    echo '<h3>El password generado aleatoriamente es:</h3><br>';
    echo '<h2>'.$password.'</h2>';
}

?>
