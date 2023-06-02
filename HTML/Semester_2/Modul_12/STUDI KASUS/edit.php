<?php
        include "koneksi.php";
        $kode = $_GET['kode'];
        $data = mysqli_query($koneksi, "SELECT * FROM datbuku WHERE KODE='$kode'") or die(mysqli_error($koneksi));
        $no = 1;
        while($d = mysqli_fetch_array($data)){
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
</head>
<body>
    <div class="judul">
        <h1>Edit Data</h1>
    </div>
        <form action="update.php" method="post">
            <table>
                <tr>
                    <td>Judul</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                        <input type="text" name="judul" value="<?php echo $d['JUDUL'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td><input type="text" name="stok" value="<?php echo $d['STOK'] ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
            </table>
        </form>
    <?php } ?>
</body>
</html>
    