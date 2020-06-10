<?php

$source="../datoteke/vozila.txt";
$resurs=fopen($source,"r");

$reg;

while ($line = fgets($resurs)) {
    echo "<tr>";
    $data = explode(" | ", $line);

    foreach ($data as $key => $value) {
        if ($key == 0) {
            $reg = $data[$key].".txt";
        }
        if ($key < 3) {
            echo "<td>" . $data[$key] . "</td>";
        }
        if ($key == 3) {
            $source1="../datoteke/".$reg;
            $resurs1=fopen($source1,"r");
            $sum=0;
            while ($line = fgets($resurs1)) {
                $data = explode(" | ", $line);
                $sum+=intval($data[3]);
            }
            echo "<td>".$sum."</td>";
        }
    }
    echo "</tr>";
}