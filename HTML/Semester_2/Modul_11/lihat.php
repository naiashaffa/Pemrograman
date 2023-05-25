<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Data Mahasiswa</title>
</head>
<body>
    <div class="judul">
        <h1>Detail Data Mahasiswa</h1>
    </div>

    <?php
    include "koneksi.php";
    $nim =$_GET['nim'];
    $data = mysqli_query($koneksi, "SELECT * from mahasiswa Where nim='$nim'") or die(mysqli_error());
    $no = 1;
    while ($d = mysqli_fetch_array($data)) {
        ?>
        <table>
            <tr>
                <td>Nim</td>
                <td>: <?php echo $d['NIM'] ?></td>
            </tr>

            <tr>
                <td>Nama</td>
                <td>: <?php echo $d['Nama'] ?></td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td>: <?php echo $d['Alamat'] ?></td>
            </tr>
        </table>
        <?php
    }
    ?>
    <a href="themenu.php"> Kembali </a>
</body>
</html>
