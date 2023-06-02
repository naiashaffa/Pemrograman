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
        $kode = $_POST['KODE'];
        $data = mysqli_query($koneksi, "SELECT * FROM datbuku WHERE KODE='$kode'");
        $no = 1;
        while($d = mysqli_fetch_array($data)){
    ?>
        <table>
            <tr>
                <td>KODE</td>
                <td>: <?php echo $d['KODE'] ?></td>
            </tr>
            <tr>
                <td>JUDUL</td>
                <td>: <?php echo $d['JUDUL'] ?></td>
            </tr>
            <tr>
                <td>STOK</td>
                <td>: <?php echo $d['STOK'] ?></td>
            </tr>
            <tr></tr>
        </table>
    <?php } ?>
    <a href="studiKasus12.php">Kembali</a>
</body>
</html>