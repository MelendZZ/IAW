<?php
function listarVectorTabla($vect){
echo '<html>
<body>
<b>Visualiza en forma de tabla</b>
<br><br>
<table border="1">
<tr><th align="center">Posicion</th><th align="center">Valor</th></tr>';
list($vect[0], $vect[1], $vect[2], $vect[3]) = $vect;
$num_ele=count($vect);
for ($i=0;$i<$num_ele;$i++)
{
echo '<tr><td align="center">'.$i.'</td><td align="center">'.$vect[$i].'</td></tr>';
}

echo '</table>
</body>
</html>';
}

function listarVectorNoOrdenado ($vect){

list($vect[0], $vect[1], $vect[2], $vect[3]) = $vect;
echo 'En forma de lista no ordenada: <br>';
foreach($vect as $nombre)
{
echo '<li>'.$nombre.'</li>';
}
}
?>