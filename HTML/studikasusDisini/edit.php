<?php
    include ('koneksi.php');
    $nim = $_GET['NIM'];
    $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE NIM='$nim'") or die(mysqli_error());
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Data</title>

</head>
<body>
        <h1>Edit Data Mahasiswa</h1>
    <form method="post" action="update.php">
        <table>
            <?php while($d = mysqli_fetch_array($data)) { ?>
                <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                <input type="hidden" value="<?= $d['NIM'] ?>" name="NIM">
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="Nama" value="<?php echo $d['Nama'] ?>">
                </td>
            </tr>
            
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="Alamat" value="<?php echo $d['Alamat'] ?>"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="SIMPAN"></td>
            </tr>
            <?php } ?>
        </table>
    </form>
</body>
</html>