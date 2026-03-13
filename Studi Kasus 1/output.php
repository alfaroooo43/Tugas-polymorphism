<?php

require_once "Persegi.php";
require_once "Lingkaran.php";
require_once "Segitiga.php";

$persegi = new Persegi();
$lingkaran = new Lingkaran();
$segitiga = new Segitiga();

$persegi->hitungLuas();
$lingkaran->hitungLuas();
$segitiga->hitungLuas();

?>