<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="judul">
        <h1>Edit Data</h1>
    </div>
    <?php
        include "koneksi.php";
        $nim = $_GET['nim'];
        $data = mysqli_query($koneksi, "SELECT * FROM mahasiswadat WHERE NIM='$nim'") or die(mysqli_error($koneksi));
        $no = 1;
        while($d = mysqli_fetch_array($data)){
    ?>
        <form action="update2.php" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                        <input type="text" name="nama" value="<?php echo $d['NAMA'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?php echo $d['ALAMAT'] ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
            </table>
        </form>
    <?php } ?>
</body>
</html>