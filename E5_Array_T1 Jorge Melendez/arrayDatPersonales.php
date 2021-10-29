<?php
echo '<b>Los datos del array son:</b><br>';

include 'datosPersonales.php';

$datos=array($nom1,$apellidos1,$edad1,$tlf1,$nom2,$apellidos2,$edad2,$tlf2);

$cont=count($datos);
  
for($i=0;$i<$cont;$i++)
  {
      echo $datos[$i] .'<br>';
  }
?>