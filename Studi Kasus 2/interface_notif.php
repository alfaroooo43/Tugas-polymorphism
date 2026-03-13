<?php
# Interface digunakan sebagai kontrak
# Setiap class yang mengimplementasikan Notifikasi wajib memiliki method kirim()

interface Notifikasi {
    public function kirim();
}

# Class Email mengimplementasikan interface Notifikasi
# Artinya Email harus memiliki method kirim()

class Email implements Notifikasi {

    public function kirim(){
        echo "Notifikasi dikirim melalui Aplikasi <strong>Email</strong>";
    }
}

# Class SMS juga menggunakan interface yang sama
# Method kirim() berisi implementasi sesuai jenis notifikasi

class SMS implements Notifikasi {

    public function kirim(){
        echo "Notifikasi dikirim melalui Aplikasi <strong>SMS</strong>";
    }
}

# Class WhatsApp sebagai implementasi lain dari interface Notifikasi

class WhatsApp implements Notifikasi {

    public function kirim(){
        echo "Notifikasi dikirim melalui Aplikasi <strong>WhatsApp</strong>";
    }
}

# Pembuatan objek dari masing-masing class
$email = new Email();
$sms = new SMS();
$wa = new WhatsApp();

# Pemanggilan method kirim()
# Walaupun methodnya sama, hasilnya berbeda karena tiap class punya implementasi sendiri

echo "<strong>Notifikasi Terkirim Pada App Mobile Pada Berikut: </Strong><br><br>";
$email->kirim();
echo "<br>";

$sms->kirim();
echo "<br>";

$wa->kirim();
?>