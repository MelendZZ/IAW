<?php

$cabecera = array("Data", "Precipitacio", "TªMin", "TªMax", "Vel.Vent", "Hores Sol");
$MATDADES = array(
    array("2022-02-01", 0, "4.2", "17.3", '1.4', '8.8'),
    array("2022-02-02", 0, '4.8', '16.9', '1.9', '8.7'),
    array("2022-02-03", 25, '5.9', '20.3', '2.2', '7.3'),
    array("2022-02-04", 26, '7.5', '22', '43', '9.4'),
    array("2022-02-05", 10, '6.8', '23.3', '44', '8.8'),
    array("2022-02-06", 30, '-7', '23.8', '50', '9.2'),
    array("2022-02-07", 0, '-5', '20.4', '0.3', '8.7'),
    array("2022-02-08", 0, '-8', '18.6', '0.8', '8.5'),
    array("2022-02-09", 0, '4.5', '20.8', '1.1', '8.4'),
    array("2022-02-10", 0, '7.3', '21.2', '2.8', '9.1'),
    array("2022-02-11", 0, '4.2', '16.9', '1.4', '7.8'),
    array("2022-02-12", '2.4', 6, '18.4', '1.4', '7'),
    array("2022-02-13", '3.8', '8.4', '14.6', '5.3', '5.2'),
    array("2022-02-14", 0, 3, '15.2', '1.1', '6.4'),
    array("2022-02-15", 0, 3, 16, '1.7', '8.9'),
);

//VISUALIZAR MATRIZ MATDADES

echo "<html><body>";
echo"<table border='1'>";
echo "<tr>";
for ($i = 0; $i < 6; $i++) {
    echo "<td align='center'><b>" . $cabecera[$i] . "</b></td>";
}
echo "</tr>";
for ($m = 0; $m < 15; $m++) {
    echo "<tr>";
    for ($n = 0; $n < 6; $n++) {
        echo "<td align='center'>" . $MATDADES[$m][$n] . "</td>";
    }
    echo "</tr>";
}
echo "</table><br><br>";


//CREAR MATRESULT
$cabeceraRESULT = array("DATA", "INTER TERMIC", "RISC VENT", "RISC PLUJA", "RISC TERMIC");
$MATRESULT = array(
    array("2022-02-01", "", "", "", ""),
    array("2022-02-02", "", "", "", ""),
    array("2022-02-03", "", "", "", ""),
    array("2022-02-04", "", "", "", ""),
    array("2022-02-05", "", "", "", ""),
    array("2022-02-06", "", "", "", ""),
    array("2022-02-07", "", "", "", ""),
    array("2022-02-08", "", "", "", ""),
    array("2022-02-09", "", "", "", ""),
    array("2022-02-10", "", "", "", ""),
    array("2022-02-11", "", "", "", ""),
    array("2022-02-12", "", "", "", ""),
    array("2022-02-13", "", "", "", ""),
    array("2022-02-14", "", "", "", ""),
    array("2022-02-15", "", "", "", ""),
);
//INTERVALO TERMICO

for ($i = 0; $i < 15; $i++) {
    $maxTemp = $MATDADES[$i][3];
    $minTemp = $MATDADES[$i][2];
    $intTer = $maxTemp - $minTemp;
    $MATRESULT[$i][1] = $intTer;
}

//RIESGO VIENTO

for ($i = 0; $i < 15; $i++) {

    if ($MATDADES[$i][4] >= 40) {
        $MATRESULT[$i][2] = "RISC";
    } else {
        $MATRESULT[$i][2] = "NO";
    }
}

//RIESGO LLUVIA

for ($i = 0; $i < 15; $i++) {

    if ($MATDADES[$i][1] >= 20) {
        $MATRESULT[$i][3] = "RISC";
    } else {
        $MATRESULT[$i][3] = "NO";
    }
}

//RIESGO TERMICO

for ($i = 0; $i < 15; $i++) {

    if ($MATRESULT[$i][1] >= 25) {
        $MATRESULT[$i][4] = "RISC";
    } else {
        $MATRESULT[$i][4] = "NO";
    }
}

//VISUALIZAR MATRIZ RESULTADO
echo"<table border='1'>";
echo "<tr>";
for ($i = 0; $i < 5; $i++) {
    echo "<td align='center'><b>" . $cabeceraRESULT[$i] . "</b></td>";
}
echo "</tr>";
for ($m = 0; $m < 15; $m++) {
    echo "<tr>";
    for ($n = 0; $n < 5; $n++) {
        echo "<td align='center'>" . $MATRESULT[$m][$n] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo"</body></html>";


//CONEXION BASE DE DATOS. INSERCCIÓN TABLA METEoDATA Y METEORESULT

$hostname = 'localhost';
$username = 'root';
$password = 'root';
$database = 'meteodb';

$link = mysqli_connect($hostname, $username, $password, $database);
$filasinsertadas=0;
$filasinsertadas2=0;
if ($link) {

    for ($i = 0; $i < 15; $i++) {
        $data = $MATDADES[$i][0];
        $precip = $MATDADES[$i][1];
        $tempMin = $MATDADES[$i][2];
        $tempMax = $MATDADES[$i][3];
        $velVent = $MATDADES[$i][4];
        $horesSol = $MATDADES[$i][5];

        $querydata = "INSERT INTO meteodata (Data,Precipitacio,TempMin,TempMax,VelVent,HoresSol) VALUES('$data','$precip','$tempMin','$tempMax','$velVent','$horesSol')";
        mysqli_query($link, $querydata);
        $filasinsertadas++;
        

        
    }
    echo '<br><br><b>Insertando en BD METEODATA</b><br><br>';
    echo "Filas insertadas en tabla METEODATA= $filasinsertadas";
   
     for ($i = 0; $i < 15; $i++) {
        $data = $MATRESULT[$i][0];
        $intTerm = $MATRESULT[$i][1];
        $riscVent = $MATRESULT[$i][2];
        $riscLluvia = $MATRESULT[$i][3];
        $riscTerm= $MATRESULT[$i][4];
       

        $queryresult = "INSERT INTO meteoresult (Data,InterTermic,RiscVent,RiscPluja,RiscTermic) VALUES('$data','$intTerm','$riscVent','$riscLluvia','$riscTerm')";
        mysqli_query($link, $queryresult);
        $filasinsertadas2++;
        

        
    }
    echo '<br><br><b>Insertando en BD METEORESULT</b><br><br>';
    echo "Filas insertadas en tabla METEORESULT= $filasinsertadas2";}
    
?>