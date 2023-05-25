<?php
include 'konkesi.php';
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$Nama', alamat='Alamat' WHERE nim='$NIM'");

header("location:themenu.php?pesan=update");
?>