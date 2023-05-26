<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Data</title>
</head>
<body>
    <div class="judul">
        <h1>Detail Data</h1>
    </div>
    <br>
    <br>
    <?php
        include "koneksi.php";
        $nim = $_GET['nim'];
        $data = mysqli_query($koneksi, "SELECT * FROM mahasiswadat WHERE NIM='$nim'");
        $no = 1;
        while($d = mysqli_fetch_array($data)){
    ?>
        <table>
            <tr>
                <td>NIM</td>
                <td>: <?php echo $d['NIM'] ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>: <?php echo $d['NAMA'] ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: <?php echo $d['ALAMAT'] ?></td>
            </tr>
            <tr></tr>
        </table>
    <?php } ?>
    <a href="studikasus.php">Kembali</a>
</body>
</html>