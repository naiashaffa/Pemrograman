<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metode POST</title>
</head>
<body>
    <br />
    // metode POST 
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post"> Nama :
        <input type="text" name="input_nama" />
        <br />
        <input type="submit" value="OK" />
        <br />
    </form>

    <?php 
    echo '<br />';
    if (isset($_POST['input_nama'])) {
        echo 'Hello, ' . $_POST['input_nama'];
        echo '<br />';
        echo 'Have a nice day!';}
        /* ouput :
        Hello, Naia Shaffa Camila
        Have a nice day!
        */
    ?>
</body>
</html>