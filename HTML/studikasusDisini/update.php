<?php
include ('koneksi.php');
$nim = $_POST['NIM'];
$nama = $_POST['Nama'];
$alamat = $_POST['Alamat'];

$hasil= mysqli_query($koneksi, "UPDATE mahasiswa SET Nama='$nama', Alamat='$alamat' WHERE NIM='$nim'");
if($hasil) {
    header("location: full.php");
}
?>