<?php
    include "koneksi.php";
    $nim = $_POST['NIM'];
    $nama = $_POST['NAMA'];
    $alamat = $_POST['ALAMAT'];

    $query = mysqli_query($koneksi, "INSERT INTO mahasiswadat (NIM, NAMA, ALAMAT) VALUES ('$nim', '$nama', '$alamat') ");
    
    if ($query) {
        $message = (object) 
        [
            'type' => 'success',
            'text' => 'Data Berhasil Ditambahkan'
        ];
        header("location:studikasus.php? pesan=update");
    } else {
        echo "Data Gagal Ditambahkan";
    }  
?>