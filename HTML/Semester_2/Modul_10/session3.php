<?php 
    session_start();
    if (isset($_SESSION['login'])) {
        unset($_SESSION);
        session_destroy();
        echo "<h1>Anda sudah berhasil Log Out</h1>";
        echo "<h2>KLIK <a href='session.php'>disini</a> untuk login lagi. <br> Anda tidak bisa masuk ke 
        <a href='session2.php'>HOME</a>lagi.</h2>";
    }
?>