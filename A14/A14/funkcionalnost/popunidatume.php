<?php

$dir = '../datoteke';
$files1 = array_slice(scandir($dir), 2);

foreach ($files1 as $value) {
    $data=substr($value, 0, -4);
    echo"<option value='".$data."'>".$data."</option>";
}
