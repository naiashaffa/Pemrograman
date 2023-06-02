<?php
    include "koneksi.php";
    $kode = $_POST['kode'];
    mysqli_query($koneksi, "DELETE FROM datbuku WHERE KODE='$kode'") or die(mysqli_error($koneksi));
    header("location:studiKasus12.php?pesan=hapus");
?>
