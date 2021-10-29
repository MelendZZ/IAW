<?php

$jug= array(
    array('Rooney','Giggs','Suarez'),
    array('Messi','Torres','Etoo'),
    array('Villa','Benzema','Ronaldo')    
);
        
$i=0;
$j=0;
echo 'Declarar vector bidimensional y recorrerlo:<br><br>';
for ($i=0;$i<3;$i++){
    for($j=0;$j<3;$j++){
        echo 'Fila '.$i.'-Col '.$j.'<br>';
        echo '<li>'.$jug[$i][$j].'</li>';        
    }
}
?>
