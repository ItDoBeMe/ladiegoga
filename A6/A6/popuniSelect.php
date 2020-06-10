<?php

$mesta = array();

$source = "./imenik.txt";
$resurs = fopen($source, "r");
while ($line = fgets($resurs)) {
    $data = explode(" | ", $line);
    foreach ($data as $key => $value) {
        if ($key == 4) {
            array_push($mesta, $data[$key]);
        }
    }
}

$uniquemesta = array_unique($mesta);
foreach ($uniquemesta as $value) {
    echo"<option value='" . $value . "'>" . $value . "</option>";
}