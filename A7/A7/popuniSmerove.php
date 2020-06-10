<?php

if (isset($_POST['linija'])) {

    $linija=$_POST['linija'];

    $res = ["smerovi" => ""];

    //$linija="linija8";
    if ($linija != "") {
        
        $smerovi = array();

        $source = "./datoteke/".$linija.".txt";
        $resurs = fopen($source, "r");
        while ($line = fgets($resurs)) {
            $data = explode(" | ", $line);
            foreach ($data as $value) {
                
                if(substr( $value, 0, 4 ) === "SMER"){
                    array_push($smerovi, substr( $value, 5));
                }
               
            }
        }
        $res['smerovi']= $smerovi;
        print_r(json_encode($res));
    }
}
