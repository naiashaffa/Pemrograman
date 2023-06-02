<?php
include ("koneksi.php");
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
mysqli_query($koneksi, "INSERT INTO mahasiswa VALUE ('id','$NIM', '$NAMA', '$ALAMAT')");
header("location:studikasus.php?pesan=update");

if($query){
    $message = (object) [
        'type' => 'success',
        'text' => 'Data berhasil ditambahkan'
    ];
    header("location:latihan.php?pesan=update");
} else {
    echo "Data gagal ditambahkan";
}
?>