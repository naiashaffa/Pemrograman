<?php
    include "koneksi.php";
    $kode = $_POST['KODE'];
    $judul = $_POST['JUDUL'];
    $stok = $_POST['ALAMAT'];
    mysqli_query($koneksi, "UPDATE datbuku SET judul='$JUDUL', stok='$STOK' WHERE kode='$KODE'") or die(mysqli_error($koneksi));
    header("location:studiKasus12.php?pesan=update");
?>