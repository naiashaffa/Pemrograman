<!DOCTYPE html>
<?php 
 
session_start();
 
if (!isset($_SESSION['login'])) {
    header("Location: studikasus.php");
}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <title>Berhasil Login</title>
</head>

<body>
<h1 align="center" style="font-weight: bold; color: rgb(0, 0, 0)">Beranda</h1>    
<!--file full.php-->
<h4>Menambahkan Data Mahasiswa</h4>
    <form action="tambah.php" method="post">
        <table>
        <tr>
            <td>NIM</td>  
            <td><input type="number" name="NIM"></td>
        </tr>
        <tr>
            <td>Nama</td> 
            <td><input type="text" name="Nama"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="Alamat"></td>
        </tr>
        </table>
            <input type="submit" name="Simpan">
    </form>

    <br>
    Data Mahasiswa :
    <br>

    <table border="1">
        <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Menu</th>
        </tr>

        <?php
        include 'koneksi.php';
        $no=1;
        $data = mysqli_query($koneksi, "SELECT * from mahasiswa");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['NIM'];?></td>
                <td><?php echo $d['Nama'];?></td>
                <td><?php echo $d['Alamat'];?></td>
                <td>
                    <a href="lihat.php?NIM=<?php echo $d['NIM']; ?>">Lihat</a>
                    <a href="edit.php?NIM=<?php echo $d['NIM']; ?>">Edit</a>
                    <!--Membuat konfirmasi apakah yakin ingin menghapus data ini-->
                    <a href="hapus.php?NIM=<?php echo $d['NIM']; ?>"
                    onclick="return confirm('Anda yakin mau menghapus data pada NIM <?php echo $d['NIM'] ?> ini?')">Hapus</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
    <br>
            <div class="input-group">
            <a href="studikasus.php" class="btn">Logout</a>
            </div>
</body>
</html>