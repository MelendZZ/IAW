<?php
include 'libreriaListarArray.php';
$val=array(10,20,30,40);
echo 'Invocamos a la función listarVectorTabla <br><br>';
listarVectorTabla($val);
echo '<br><br>';
echo 'Invocamos a la función listarVectorNoOrdenado <br><br>';
listarVectorNoOrdenado($val);
?>