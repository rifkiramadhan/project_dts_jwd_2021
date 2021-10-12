<?php
    // Membuat session start agar sessionnya berjalan
    session_start();
    session_destroy();

    // Mengalihkan ke halaman login
    header("Location: ../admin/login.php");
?>