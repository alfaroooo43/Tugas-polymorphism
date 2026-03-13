<?php

require_once "BangunDatar.php";

class Segitiga extends BangunDatar {

    public $alas = 6;
    public $tinggi = 8;

    public function hitungLuas(){
        $luas = 0.5 * $this->alas * $this->tinggi;
        echo "Luas Segitiga : " . $luas . "<br>";
    }

}

?>