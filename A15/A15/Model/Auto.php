<?php

class Auto {
    
    public $reg;
    public $dat;
    public $od;
    public $do;
    public $km;

    function __construct($reg, $dat, $od, $do, $km) {
        $this->reg = $reg;
        $this->dat = $dat;
        $this->od = $od;
        $this->do = $do;
        $this->km = $km;
    }

    function get_reg() {
        return $this->reg;
    }
    
    function get_dat() {
        return $this->dat;
    }

    function get_od() {
        return $this->od;
    }

    function get_do() {
        return $this->do;
    }

    function get_km() {
        return $this->km;
    }
    
    function dodaj(){
        $registracija=$this->get_reg();
        $source="../datoteke/".$registracija.".txt";
        $resurs= fopen($source, "a");
        $p1= $this->get_dat();
        $p2= $this->get_od();
        $p3= $this->get_do();
        $p4= $this->get_km();
        $data= PHP_EOL.$p1." | ".$p2." | ".$p3." | ".$p4;
        fwrite($resurs, $data);
        return "Uspešno";
    }
    
}

