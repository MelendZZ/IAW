<html>
    <body>
        <?php        
$vect=array(10,20,30,40);
$num_ele=count($vect);
for ($i=0;$i<$num_ele;$i++)
{
   echo '<li>Elemento '.$i.' vale: '.$vect[$i];
   echo '</li><br>';
}
 echo'<br><br><br><br><br>';

  $num_rang=range(10,40,10);
  $cont=count($num_rang);
  
  for($i=0;$i<$cont;$i++)
  {
      echo '<li>Elemento '.$i.' vale: '.$num_rang[$i];
      echo '</li><br>';
  }
       ?>
    </body>
</html>