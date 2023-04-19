<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Tipe</title>
</head>
<body>
    <?php 
    // deklarasi dan inisialisasi
    $bil = 3;
    $var = "";

    echo $bil;
    echo '<br>';
    var_dump(is_int($bil));     //int = integer 
    // Output : true
    echo '<br>';
    var_dump(is_float($bil));   // float
    // Output : false

    echo '<br>';
    echo '<br>';

    echo $var;
    echo '<br>';
    var_dump(is_string($var));     // string 
    // Output : true
    echo '<br>';
    var_dump(is_int($var));        // int = integer
    // Output : false

    ?>
</body>
</html>