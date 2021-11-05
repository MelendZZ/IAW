<?php

$hoy = getdate();

if ($hoy['hours'] < 12) {
    echo "----------------------<br>";
    echo "<b>Ahora son las: $hoy[hours] horas y $hoy[minutes] minutos.</b>";
    echo "<br>----------------------<br>";
    echo "<b>Tenga Vd Buenos Dias</b>";
} elseif ($hoy['hours'] >= 12 && $hoy['hours'] < 21) {
    echo "----------------------<br>";
    echo "<b>Ahora son las: $hoy[hours] horas y $hoy[minutes] minutos.</b>";
    echo "<br>----------------------<br>";
    echo "<b>Tenga Vd Buenas tardes</b>";
} else {
    echo "----------------------<br>";
    echo "<b>Ahora son las: $hoy[hours] horas y $hoy[minutes] minutos.</b>";
    echo "<br>----------------------<br>";
    echo "<b>Tenga Vd Buenas noches</b>";
}
?>