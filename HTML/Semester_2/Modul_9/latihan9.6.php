<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Seleksi</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        Pekerjaan
        <select name="input_job">
            <option value="Mahasiswa"> Mahasiswa
            <option value="ABRI"> ABRI
            <option value="PNS"> PNS
            <option value="Wiraswasta"> Wiraswasta
        </select>
        <br />

        <input type="submit" value="OK"/>
    </form>

    <?php 
    if (isset($_POST['input_job'])) {
        echo $_POST['input_job'];
        /* output :
        Mahasiswa (sesuai dg inputan)
        */
    }
    ?>
</body>
</html>