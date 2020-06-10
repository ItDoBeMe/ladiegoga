<?php


if (isset($_POST['trazi'])) {

    $ime = $prezime = $adresa = $mesto = $bt = "";
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $adresa = $_POST['adresa'];
    $mesto = $_POST['mesto'];
    $bt = $_POST['bt'];

    $rez = array();
    $rezm = array();

    $lines = file('imenik.txt');
    foreach ($lines as $line) {
        $rez = explode(' | ', $line);
        array_push($rezm, $rez);
    }
    
    foreach ($rezm as $key => $value) {

        if ($ime !== "") {
            if (stripos($value[1], $ime) === false) {
                unset($rezm[$key]);
            }
        }
        if ($prezime !== "") {
            if (stripos($value[2], $prezime) === false) {
                unset($rezm[$key]);
            }
        }
        if ($adresa !== "") {
            if (stripos($value[3], $adresa) === false) {
                unset($rezm[$key]);
            }
        }
        if ($mesto !== "") {
            if (stripos($value[4], $mesto) === false) {
                unset($rezm[$key]);
            }
        }
        if ($bt !== "") {
            if (stripos($value[5], $bt) === false) {
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
        echo "<td>" . $value[5] . "</td>";
        echo "<td>" . $value[6] . "</td>";
        echo "</tr>";
    }
}

