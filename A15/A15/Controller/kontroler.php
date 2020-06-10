<?php

require_once "../Model/Auto.php";

class Kontroler extends Auto {

    public function dodajAuto() {
        return $this->dodaj();
    }
}

if (isset($_POST['snimi'])) {
    $kontroler = new Kontroler($_POST['auto'], $_POST['dat'], $_POST['startp'], $_POST['krajp'], $_POST['km']);
    echo $kontroler->dodajAuto();
    header("location: index.php");
}

