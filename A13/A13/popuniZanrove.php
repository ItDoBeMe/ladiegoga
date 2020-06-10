<?php

$zanrovi = array();

$source = "./katalog.txt";
$resurs = fopen($source, "r");
while ($line = fgets($resurs)) {
    $data = explode(" | ", $line);
    foreach ($data as $key => $value) {
        if ($key == 2) {
            array_push($zanrovi, $data[$key]);
        }
    }
}

$uniquezanrovi = array_unique($zanrovi);
foreach ($uniquezanrovi as $value) {
    echo"<option value='" . $value . "'>" . $value . "</option>";
}