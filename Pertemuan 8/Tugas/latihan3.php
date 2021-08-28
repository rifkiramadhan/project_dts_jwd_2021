<?php 
    // Membuat fungsi
    function hitungUmur($thn_lahir, $thn_sekarang) {
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }

    function perkenalan($nama, $salam="Selamat Datang") {
        echo $salam.", ";
        echo "Perkenalkan, nama Saya ".$nama."<br/>";

        // Memanggil fungsi lain
        echo "Saya berusia ".hitungUmur(1999, 2021) ." tahun <br/>";
        echo "Senang berkenalan dengan Anda <br/>";
    }

    // Memanggil fungsi perkenalan
    perkenalan("Rifki Ramadhan");
?>