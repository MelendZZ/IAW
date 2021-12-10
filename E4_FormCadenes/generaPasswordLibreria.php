<?php
include 'lib_generaPassword';
$basic=$_GET['basico'];
$espec=$_GET['espec'];
$carac=$_GET['carac'];
contrasena($basic, $espec, $carac);    
?>
