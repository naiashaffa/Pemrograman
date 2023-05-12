<?php 
    // set jam expiration date 1 jam yang lalu
    setcookie("username", "", time() -120);
    setcookie("nama_lengkap", "" , time() -125);
    echo "<h1>Cookies berhasil dihapus<h1/>";
    echo "<h2>KLIK <a href='cookies2.php'>disini </a> untuk pemeriksaan cookies.<h2/>";
?>