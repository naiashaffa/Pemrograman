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
            function confirmAdd() {
            return confirm("Apakah Anda yakin akan menambahkan data?");
        }
        </script>
        <title>Add Data Page</title>
    </head>
    <body class="web bg-light">
    <header class="d-flex flex-wrap justify-content-end py-2 mb-3 px-3" >   
        <ul class="nav nav-pills">
            <li class="nav">
                <a href="#" class="nav-link" style="color: #000000DE;" onclick="confirmHelp()">Help Center</a>
            </li>
        </ul>
        <form method="post">
            <input type="submit" class="nav-link active btn btn-primary" name="logout" value="Log Out">
        </form>
    </header>


        <div class="container-fluid" style="margin-top: 80px">  
        <div class="d-flex justify-content-center">        
        <form action="" method="post">
        <h2>Tambah Data Buku</h2>
        <br/>
        
        <div class="card" style="background-color: #A7C7E7; color: #191970;">
        <div class="card-body">
                <tr>
                    <td width="100">Kode Buku</td>
                    <td>
                        <input type="text" name="kode_buku"></td>
                    </td>
                </tr>
                <tr>
                    <td width="100">Judul Buku</td>
                    <td>
                        <input type="text" name="judul_buku"></td>
                    </td>
                </tr>
                <tr>
                    <td width="100">Harga Buku</td>
                    <td>
                        <input type="text" name="harga_buku"></td>
                    </td>
                </tr>
                <tr>
                    <td width="100">Stok Buku</td>
                    <td>
                        <input type="text" name="stok_buku"></td>
                    </td>
                </tr>
                <tr>
                    <td ></td>
                    <td>
                        <input type="submit" value="Submit" name="proses" onclick="confirmAdd()"></td>
                    </td>
                </tr>
            </div>
            </div>

            <br/>
            <br/>
            <br/>
            <br/>

            <div class="row">
                <div class="text-center">
                    <h5>Lihat data buku bisa  klik button dibawah ini</h5>
                </div>
                <script>
                    function bukawindow(){
                        window.open("buku-data.php", "buku-data", "fullscreen");
                    }
                </script>
                <div class="d-flex justify-content-center">
                    <input type="button" class="btn btn-primary" onclick="bukawindow()" value="View details »">
                </div>
            </div>
        </form>
        </div>
        </div>


        <?php
        include "koneksi.php";

        if (isset($_POST['proses'])) {
            mysqli_query($koneksi, "insert into databuku set
            kode_buku = '$_POST[kode_buku]',
            judul_buku = '$_POST[judul_buku]',
            harga_buku = '$_POST[harga_buku]',
            stok_buku = '$_POST[stok_buku]' ");
        }
        ?>
    </body>
</html>