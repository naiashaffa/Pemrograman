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
        function confirmEdit() {
                return confirm("Apakah Anda yakin akan mengedit data ini? Yakin sudah benar?");
            }
        </script>
        <title>Edit Data Page</title>
    </head>


<?php
include "koneksi.php";

$sql=mysqli_query($koneksi, "select * from databuku where kode_buku='$_GET[kode]'") or die(mysqli_error());
$data=mysqli_fetch_array($sql);

?>

<section class="bg-light">
        <div class="container py-3 h-90 pt-5">
        <div class="card" style="border-radius: 2rem;background-color: #FFFFFF; color:#7B3F00;">
        <div class="col-lg-9 d-flex">
        <div class="card-body p-2 p-lg-4">
            <h3 class="fw-bold mb-2" style="letter-spacing: 1px;">Edit Data Buku</h3>
            <form action="" method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-outline mb-3">
                        Kode Buku<input type="text" name="kode_buku" value="<?php echo $data['kode_buku']; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-outline mb-3">
                        Judul Buku<input type="text" name="judul_buku" value="<?php echo $data['judul_buku']; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-outline mb-3">
                        Harga Buku<input type="text" name="harga_buku" value="<?php echo $data['harga_buku']; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-outline mb-3">
                        Stok Buku<input type="text" name="stok_buku" value="<?php echo $data['stok_buku']; ?>">
                    </div>
                </div>
            </div>
            <div>
                <input type="submit" class="btn btn-primary" name="proses" value="Submit" onclick="confirmEdit()">
            </div>
                
        </div>
        </div>
        </div>
        </div>
    </section>

<?php
include "koneksi.php";

if (isset($_POST['proses'])) {
    mysqli_query($koneksi, "update databuku set
    judul_buku = '$_POST[judul_buku]',
    harga_buku = '$_POST[harga_buku]',
    stok_buku = '$_POST[stok_buku]'
    
    where kode_buku = '$_GET[kode]'");
    
    echo "<meta http-equiv=refresh content=2;URL='buku-data.php'>";

}
?>