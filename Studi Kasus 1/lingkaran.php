<?php

require_once "BangunDatar.php";

class Lingkaran extends BangunDatar {

    public $r = 7;

    public function hitungLuas(){
        $luas = 3.14 * $this->r * $this->r;
        echo "Luas Lingkaran : " . $luas . "<br>";
    }

}

?>