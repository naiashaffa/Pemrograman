<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo variabel</title>
</head>
<body>
    <?php
    // deklarasi dan inisialisasi
    $bil = 3;
    $var = "";
    $cek = null;

    echo $bil;
    echo '<br>';    //spasi
    // dumping informasi mengenai variabel
    var_dump ($bil);        // output : int(3)

    echo '<br>';
    // untuk menampilkan data
    print_r ($bil);        // output : 3

    echo '<br>';
    // isset = memeriksa ada suatu variabel di-set
    var_dump (isset ($bil));      // output : bool(true)

    echo '<br>';
    var_dump ($var);        // ouput : string(0) ""
    echo '<br>';
    // isset = memeriksa ada suatu variabel di-set
    var_dump (isset ($var));      // output : bool(true)

    echo '<br>';
    var_dump ($cek);        // output : NULL
    echo '<br>';
    // isset = memeriksa ada suatu variabel di-set
    var_dump (isset ($cek));      // output : bool(true)
    ?>
</body>
</html>