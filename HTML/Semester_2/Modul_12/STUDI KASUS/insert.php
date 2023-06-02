<?php
include ("koneksi.php");
$kode = $_POST['kode'];
$judul = $_POST['judul'];
$stok = $_POST['stok'];
mysqli_query($koneksi, "INSERT INTO datbuku VALUE ('id','$KODE', '$JUDUL', '$STOK')");
header("location:studKasus12.php?pesan=update");

if($query){
    $message = (object) [
        'type' => 'success',
        'text' => 'Data berhasil ditambahkan'
    ];
    header("location:studKasus12.php?pesan=update");
} else {
    echo "Data gagal ditambahkan";
}
?>