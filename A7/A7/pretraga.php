<?php

if (isset($_POST['trazi'])) {

    $linija = $smer = "";
    $linija = $_POST['linija'];
    $smer = 'SMER:' . $_POST['smer'];

    $rez = array();
    $rezm = array();
    $provera = 0;

    $lines = file('./datoteke/' . $linija . '.txt');
    
    foreach ($lines as $line) {
        
        if($provera!==0 && (substr(trim($line), 0, 5 ) === 'SMER:')){
            $provera++;
        }
        if($provera===1){
            array_push($rez, $line);
        }
        if(trim($line)===trim($smer)){
             $provera++;
        }
        
    }

    foreach ($rez as $key => $value) {
        echo "<tr>";
        echo "<td>" . ($key+1) . "</td>";
        echo "<td>" . $value . "</td>";
        echo "</tr>";
    }
}