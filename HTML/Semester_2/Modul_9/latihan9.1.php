<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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