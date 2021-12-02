<?php

$num1 = ((int) $_GET['num1']);
$num2 = ((int) $_GET['num2']);
echo '<html><body>';

if (empty($num1) && empty($num2)) {
    echo 'num1=' . $num1 . ' <br>num2=' . $num2;
    echo '<br><b>Ambos campos están vacíos</b>';
} elseif (empty($num1)) {
    echo 'num1=' . $num1 . ' <br>num2=' . $num2;
    echo '<br><b>El primer campo está vacío</b>';
} elseif (empty($num2)) {
    echo 'num1=' . $num1 . ' <br>num2=' . $num2;
    echo '<br><b>El segundo campo está vacío</b>';
} else {
    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $mult = $num1 * $num2;
    $div = $num1 / $num2;
    $rest = $num1 % $num2;
    echo '<b>Los dos campos están completos</b><br>';
    echo 'El primer campo es '.$num1.' y el segundo es '.$num2.'<br><br>';
    echo 'La suma vale: ' . $suma . '<br>';
    echo 'La resta vale: ' . $resta . '<br>';
    echo 'La multiplicación vale: ' . $mult . '<br>';
    echo 'La división vale: ' . $div . '<br>';
    echo 'El resto de la división vale: ' . $rest . '<br>';
}
echo '</body></html>';
?>

