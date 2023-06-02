<?php
include ("koneksi.php");
$nim = $_POST['NIM'];
$nama = $_POST['Nama'];
$alamat = $_POST['Alamat'];
mysqli_query($koneksi, "INSERT INTO mahasiswa VALUE ('$id','$nim', '$nama', '$alamat')");
header("location:studikasus.php?pesan=update");

if($query){
    $message = (object) [
        'type' => 'success',
        'text' => 'Data berhasil ditambahkan'
    ];
    header("location:studikasus.php?pesan=update");
} else {
    echo "Data gagal ditambahkan";
}
?>