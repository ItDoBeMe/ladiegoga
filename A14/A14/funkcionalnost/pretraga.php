<?php

if (isset($_POST['pretraga'])) {

    if ($_POST['datum'] != "") {
        $datum = $_POST['datum'];
        $tip = $_POST['tip'];
        $source = "../datoteke/" . $datum . ".txt";
        $resurs = fopen($source, "r");

        while ($line = fgets($resurs)) {
            echo "<tr>";
            $data = explode(" | ", $line);

            foreach ($data as $key => $value) {
                if ($data[2] == $tip) {
                    if ($key != 2 && $key != 3){
                        echo "<td>" . $data[$key] . "</td>";
                    }
                    if ($key == 3) {
                        $slika = explode("\\", $data[$key]);
                        echo "<td> <img height='50' src='..\img\\" . $slika[5] . "'></td>";
                    }
                }
                if($tip==""){
                    if ($key != 2 && $key != 3){
                        echo "<td>" . $data[$key] . "</td>";
                    }
                    if ($key == 3) {
                        $slika = explode("\\", $data[$key]);
                        echo "<td> <img height='50' src='..\img\\" . $slika[5] . "'></td>";
                    }
                }
            }
            echo "</tr>";
        }
    } else {
        echo 'Izaberite datum';
    }
}
