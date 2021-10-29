<html>
    <body>
        <b>Visualiza array como tabla</b>
        <br><br>
        <table border="1">
            <tr><th align="center">Posicion</th><th align="center">Valor</th></tr>
           
<?php
$vect=array(100,200,300,400,500);
$num_ele=count($vect);
$sum=0;
for ($i=0;$i<$num_ele;$i++)
{
    echo '<tr><td align="center">'.$i.'</td><td align="center">'.$vect[$i].'</td></tr>';
    $sum=$sum+$vect[$i];
}

echo '<tr><td align="center"><b>SUMA</b></td><td align="center"><b>'.$sum.'</td></b>';
?>
</table>
    </body>
</html>