<?php
        include ('koneksi.php');
        $nim = $_GET['NIM'];
        $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE NIM='$nim'") or die (mysqli_error());
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan Data dari Database</title>
</head>
<body>
    <div class="judul">
        <h1>Detail Data</h1>
        </div>
        <br>

        <form method="post" action="update.php">
            <table>
            <?php while ($d = mysqli_fetch_array($data)) { ?>
                <tr>
                    <td>NIM</td>
                    <td>: <?php echo $d['NIM']?></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>: <?php echo $d['Nama']?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: <?php echo $d['Alamat'] ?></td>
                </tr>
            </table>
            </form>
        <?php } ?>
        <a href="full.php"><<< Kembali Lihat Semua Data </a>
</body>
</html>