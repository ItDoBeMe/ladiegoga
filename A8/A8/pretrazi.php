<?php

if (isset($_POST['trazi'])) {

    $proizvodjac = $ram = $cpu = $kamera = $ekran = "";
    $proizvodjac = $_POST['proizvodjac'];
    $ram = $_POST['ram'];
    $cpu = $_POST['cpu'];
    $kamera = $_POST['kamera'];
    $ekran = $_POST['ekran'];

    $rez = array();
    $rezm = array();

    $lines = file('vebprodavnica.txt');
    foreach ($lines as $line) {
        $rez = explode(',', $line);
        array_push($rezm, $rez);
    }

    foreach ($rezm as $key => $value) {
        if ($proizvodjac !== "") {
            if (stripos(trim($value[2]), $proizvodjac) === false) {
                unset($rezm[$key]);
            }
        }
        if ($ram !== "") {
            if (stripos($value[3], $ram) === false) {
                unset($rezm[$key]);
            }
        }
        if ($cpu !== "") {
            if (stripos($value[4], $cpu) === false) {
                unset($rezm[$key]);
            }
        }
        if ($kamera !== "") {
            if (stripos($value[5], $kamera) === false) {
                unset($rezm[$key]);
            }
        }
        if ($ekran !== "") {
            if (stripos($value[6], $ekran) === false) {
                unset($rezm[$key]);
            }
        }
    }
    
    
    foreach ($rezm as $value) {
        echo "<tr>";
        echo "<td> <img src='slike\\" . trim($value[7]) . "'></td>";
        echo "<td>" . $value[0] . "</td>";
        echo "<td>" . $value[1] . "</td>";
        echo "<td>" . $value[2] . "</td>";
        echo "<td>" . $value[3] . "</td>";
        echo "<td>" . $value[4] . "</td>";
        echo "<td>" . $value[5] . "</td>";
        echo "<td>" . $value[6] . "</td>";
        echo "<td>" . $value[8] . "</td>";
        echo "</tr>";
    }
}