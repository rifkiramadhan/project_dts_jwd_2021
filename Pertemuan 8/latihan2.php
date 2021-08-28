<?php
    // Membuat fungsi
    function perkenalan($nama, $salam="Selamat Datang") {
        echo $salam.", ";
        echo "Perkenalkan, nama Saya ".$nama."<br/>";
        echo "Senang berkenalan dengan Anda <br/>";
    }

    // Memanggil fungsi yang sudah dibuat
    perkenalan("Rifki", "Hi");
    echo "<hr>";

    $saya = "Ramadhan";
    $ucapanSalam = "Selamat Pagi";

    // Memanggilnya lagi tanpa mengisi parameter salam
    perkenalan($saya);
?>