<?php

require_once "BangunDatar.php";

class Persegi extends BangunDatar {

    public $sisi = 4;

    public function hitungLuas(){
        $luas = $this->sisi * $this->sisi;
        echo "Luas Persegi : " . $luas . "<br>";
    }

}

?>