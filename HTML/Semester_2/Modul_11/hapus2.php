<?php
    include "koneksi.php";
    $nim = $_GET['nim'];
    mysqli_query($koneksi, "DELETE FROM mahasiswadat WHERE NIM='$nim'") or die(mysqli_error($koneksi));
    header("location:studikasus.php?pesan=hapus");
?>
