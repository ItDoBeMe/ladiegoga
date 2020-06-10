<?php

$godine = array();

$source = "./katalog.txt";
$resurs = fopen($source, "r");
while ($line = fgets($resurs)) {
    $data = explode(" | ", $line);
    foreach ($data as $key => $value) {
        if ($key == 3) {
            array_push($godine, $data[$key]);
        }
    }
}

$uniquegodine = array_unique($godine);
foreach ($uniquegodine as $value) {
    echo"<option value='" . $value . "'>" . $value . "</option>";
}