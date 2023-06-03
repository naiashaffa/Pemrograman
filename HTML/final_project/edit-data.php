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
        <title>Add Data Page</title>
    </head>


<?php
include "koneksi.php";

$sql=mysqli_query($koneksi, "select * from databuku where kode_buku='$_GET[kode]'") or die(mysqli_error());
$data=mysqli_fetch_array($sql);

?>

<body class="web bg-light">
    <form action="" method="post">
    <div class="container" style="margin-top: 80px">
    <h3>Edit Data Buku</h3>

    <form action="" method="post">
        <table>
            <tr>
                <td width="100">Kode Buku</td>
                <td>
                    <input type="text" name="kode_buku" value="<?php echo $data['kode_buku']; ?>">
                </td>
            </tr>
            <tr>
                <td width="100">Judul Buku</td>
                <td>
                    <input type="text" name="judul_buku" value="<?php echo $data['judul_buku']; ?>">
                </td>
            </tr>
            <tr>
                <td width="100">Harga Buku</td>
                <td>
                    <input type="text" name="harga_buku" value="<?php echo $data['harga_buku']; ?>">
                </td>
            </tr>
            <tr>
                <td width="100">Stok Buku</td>
                <td>
                    <input type="text" name="stok_buku" value="<?php echo $data['stok_buku']; ?>">
                </td>
            </tr>
            <tr>
                <td ></td>
                <td>
                    <input type="submit" value="SIMPAN" name="proses" onclick="confirmEdit()"></td>
                </td>
            </tr>
        </table>
    </form>

<?php
include "koneksi.php";

if (isset($_POST['proses'])) {
    mysqli_query($koneksi, "update databuku set
    judul_buku = '$_POST[judul_buku]',
    harga_buku = '$_POST[harga_buku]',
    stok_buku = '$_POST[stok_buku]'
    
    where kode_buku = '$_GET[kode]'");
    
    echo "<meta http-equiv=refresh content=1;URL='buku-data.php'>";

}
?>