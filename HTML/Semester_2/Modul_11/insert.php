<?php
include "konkesi.php";
$NIM = $_POST['NIM'];
$Nama = $_POST['Nama'];
$Alamat = $_POST['Alamat'];

mysqli_query($koneksi, "INSERT INTO mahasiswa VALUE (``, `$NIM`, `$Nama`, `$Alamat`)");

header("location:themenu.php?pesan=update");
?>