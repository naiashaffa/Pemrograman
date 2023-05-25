<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengedit Data Mahasiswa</title>
</head>
<body>
    <div class="judul">
        <h1>Edit Data</h1>
    </div>
    <br/>

    <a href="themenu.php">Lihat Semua Data</a>

    <br/>
    <h3>Edit Data</h3>

    <?php
    include "koneksi.php";
    $nim =$_GET['nim'];
    $data = mysqli_query($koneksi, "SELECT * from mahasiswa Where nim='$nim'") or die(mysqli_error());
    $no = 1;
    while ($d = mysqli_fetch_array($data)) {
        ?>
        <form>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="NIM" value="<?php echo $d['NIM'] ?>" ></input>
                        <input type="text" name="Nama" value="<?php echo $d['Nama'] ?>" ></input>
                    </td>
                </tr>

                <tr>
                    <td>Alamat</td>
                    <td>
                    <input type="text" name="Alamat" value="<?php echo $d['Alamat'] ?>" ></input>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </form> 
        <?php
    }
    ?>
</body>
</html>