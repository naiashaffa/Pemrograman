<?php 
    $value1 = 'Naia';
    $value2 = 'Naia Shaffa';
    setcookie("username", $value1);
    setcookie("nama_lengkap", $value2); //login akan expired dalam waktu 1 jam
    echo "<h2>Ini halaman untuk set cookie</h2>";
    echo "<h2>KLIK <a href='cookies2.php'>disini </a> untuk mengecek cookies.</h2>";
?>