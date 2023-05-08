<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metode GET</title>
</head>
<body>
    <br />
    // metode GET
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="get"> Nama :
        <input type="text" name="input_nama" />
        <br />
        <input type="submit" value="OK" />
        <br />
    </form>

    <?php 
    echo '<br />';
    if (isset($_GET['input_nama'])) {
        echo 'Hello, ' . $_GET['input_nama'];
        echo '<br />';
        echo 'Have a nice day!';}
        /* output :
        Hello, Naia Shaffa Camila
        Have a nice day! */
    ?>
</body>
</html>