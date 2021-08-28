<?php
    // Membuat session start agar sessionnya berjalan
    session_start();
    session_destroy();

    // Mengalihkan ke halaman login
    echo '<script>window.location="login.php"</script>';

?>