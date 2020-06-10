<?php

$source="../datoteke/vozila.txt";
$resurs=fopen($source,"r");

while ($line = fgets($resurs)) {
    $data = explode(" | ", $line);
    echo "<option value='".$data[0]."'>".($line)."</option>";
}