<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <h4>Menambahkan Data Mahasiswa</h4>
    <form action="post" action=".php">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="number" name="nim"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="test" name="alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SUBMIT"></td>
            </tr>
        </table>
    </form>
    <h4>Menampilkan Data Mahsiswa</h4>
    <table border="1">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
        <?php
            include("koneksi.php");
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
            while($d = mysqli_fetch_array($data)){ ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nim']; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td>
                        <a href="lihat.php?nim=<?php echo $d['nim']; ?>">Lihat</a>
                        <a href="edit.php?nim=<?php echo $d['nim']; ?>">Edit</a>
                        <a href="hapus.php?nim=<?php echo $d['nim']; ?>">Hapus</a>
                    </td>
                </tr> 
                <?php
            }
        ?>
    </table>
</body>
</html>