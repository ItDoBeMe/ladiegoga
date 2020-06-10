<?php

$dir = '../datoteke';
$files1 = array_slice(scandir($dir), 2);

$tipovi=array();


foreach ($files1 as $value) {
    $source = "../datoteke/" . $value;
    $resurs = fopen($source, "r");
    while ($line = fgets($resurs)) {
        $data = explode(" | ", $line);
        foreach ($data as $key => $value) {
            if ($key == 2) {
                array_push($tipovi, $data[$key]);
            }
        }
    }
}

$tipoviuq= array_unique($tipovi);
foreach ($tipoviuq as $value) {
    echo"<option value='".$value."'>".$value."</option>";
}
