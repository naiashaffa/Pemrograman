<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prefillling Text Field</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    Nama
    <input type="text" name="input_nama"
        value="<?php
        echo isset($_POST['input_nama']) ? $_POST['input_nama'] : '';  // fungsi TERNARY line 14 == line 24-25
        ?>"
    />
    <br />

    <input type="submit" value="OK" />
    </form>

    <?php 
    echo '<br />';
    if (isset($_POST['input_nama'])) {
        echo 'Hello, ' . $_POST['input_nama'];
        echo '<br />';
        echo 'Have a nice day!';
    }
    ?>
</body>
</html>