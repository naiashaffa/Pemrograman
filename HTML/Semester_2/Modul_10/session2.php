<?php 
    session_start();
    // jika login sudah berhasil maka menampilka isi session
    if (isset($_SESSION['login'])) {
        echo "<h1>Selamat datang, ". $_SESSION['login'] ."</h1>";
        echo "<h2>Halaman ini bisa tampil jika berhasil login. Ini adalah HOME Anda.</h2>";
        echo "<h2>KLIK <a href='session3.php'>disini</a> untuk Log Out</h2>";
    // session tidk muncul karena belum login atau belum berhasil login
    } else {
        die ("Anda belum berhasil login! KLIK <a href='session.php'>disini</a>");
    }
?>