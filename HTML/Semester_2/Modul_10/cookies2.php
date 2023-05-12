<?php
    if (isset($_COOKIE['username'])) {
        echo "<h1>Cookie 'uusername' ada</h1><br>Isinya : " . $_COOKIE['username'];
    } else {
        echo "<h1>Cookie 'username' TIDAK ada.</h1>";
    }

    if (isset($_COOKIE['nama_lengkap'])) {
        echo "<h1>Cookie 'nama_lengkap' ada</h1><br>Isinya : " . $_COOKIE['nama_lengkap'];
    } else {
        echo "<h1>Cookie 'nama_lengkap' TIDAK ada.</h1>";
    }

    echo "<h1>Klik <a href='cookies3.php'>disini</a> untuk menghapus cookies.</h1>";
?>