<?php

    session_start(); 
    if (isset($_POST['logout'])) {
        unset($_SESSION);
        session_destroy();
        echo "<p align=center>Anda berhasil Log Out.";
        echo "<p align=center>Kembali ke halaman Log In...";
        header('Refresh:3 ; URL=webpage.php');
        exit;
    } ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
            crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" 
            crossorigin="anonymous">
        </script>
        <script>
            function confirmHelp() {
                return confirm("Silahkan hubungin nomor 082123456789 \nMohon maaf atas ketidaknyamanannya.");
            }

            function addMore() {
                window.open("tambah-data.php", "tambah-data", "fullscreen");            
            }
        </script>
        <title>Data Buku Page</title>
    </head>

<body class="web bg-light">
    <header class="d-flex flex-wrap justify-content-end py-2 mb-3 px-3" >   
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a href="#" class="nav-link" style="color: #000000DE;" onclick="addMore()">Add Books</a>
            </li>
        </ul>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a href="#" class="nav-link" style="color: #000000DE;" onclick="confirmHelp()">Help Center</a>
            </li>
        </ul>
        <form method="post">
            <input type="submit" class="nav-link active btn btn-primary" name="logout" value="Log Out">
        </form>
    </header>
    
    <div class="container-fluid" style="margin-top: 20px">  
    <div class="d-flex justify-content-start">    
    <form action="" method="post">
        
    <div class="tittle" style="color: #6F4E37;">
        <h3>DATA BUKU</h3>  
    </div>
    <table class="table table-hover table-bordered">
    <thead class="table" style="background-color: #EADDCA; color: #6F4E37;">
        <tr class="text-center">
            <th>No</th>
            <th>Kode Buku</th>
            <th>Judul Buku</th>
            <th>Harga Buku</th>
            <th>Stok Buku</th>
            <th colspan="2">Menu</th>
        </tr>
    </thead>

        <?php
        
        include "koneksi.php";
        $no=1;
        $ambildata = mysqli_query($koneksi,"select * from databuku");
        while ($tampil = mysqli_fetch_array($ambildata)) {
            echo "
            <tr>
                <td>$no</td>
                <td>$tampil[kode_buku]</td>
                <td>$tampil[judul_buku]</td>
                <td>$tampil[harga_buku]</td>
                <td>$tampil[stok_buku]</td>
                <td>
                    <a href='?kode=$tampil[kode_buku]'>Hapus
                </td>
                <td>
                    <a href='edit-data.php?kode=$tampil[kode_buku]'>Edit
                </td>
            </tr>";
            $no++;
        }
        ?>
    </table>
    </form>
    </div>
    </div>
</body>

<?php
if (isset($_GET['kode'])) {
mysqli_query($koneksi,"delete from databuku where kode_buku='$_GET[kode]'");

echo "Data telah berhasil dihapus";
echo "<meta http-equiv=refresh content=2;URL='buku-data.php'>";
}
?>