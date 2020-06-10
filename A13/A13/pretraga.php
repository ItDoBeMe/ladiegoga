<?php


if (isset($_POST['pretrazi'])) {

    $i = $a = $z = $g = $k = "";
    $i = $_POST['izvodjac'];
    $a = $_POST['album'];
    $z = $_POST['zanr'];
    $g = $_POST['godina'];
    $k = $_POST['kuca'];


    $rez = array();
    $rezm = array();

    $lines = file('katalog.txt');
    foreach ($lines as $line) {
        $rez = explode(' | ', $line);
        array_push($rezm, $rez);
    }

    foreach ($rezm as $key => $value) {

        if ($i !== "") {
            if (stripos($value[0], $i) === false) {
                unset($rezm[$key]);
            }
        }
        if ($a !== "") {
            if (stripos($value[1], $a) === false) {
                unset($rezm[$key]);
            }
        }
        if ($z !== "") {
            if (stripos($value[2], $z) === false) {
                unset($rezm[$key]);
            }
        }
        if ($g !== "") {
            if (stripos($value[3], $g) === false) {
                unset($rezm[$key]);
            }
        }
        if ($k !== "") {
            if (stripos($value[4], $k) === false) {
                unset($rezm[$key]);
            }
        }
    }
    
    foreach ($rezm as $value) {
        echo "<tr>";
        echo "<td>" . $value[0] . "</td>";
        echo "<td>" . $value[1] . "</td>";
        echo "<td>" . $value[2] . "</td>";
        echo "<td>" . $value[3] . "</td>";
        echo "<td>" . $value[4] . "</td>";
        $slika = explode("\\", $value[5]);
        echo "<td> <img src='img\\" . $slika[5] . "'></td>";
        echo "</tr>";
    }
}

