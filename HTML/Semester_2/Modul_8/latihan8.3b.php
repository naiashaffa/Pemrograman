<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casting Tipe</title>
</head>
<body>
    <?php 
    $str = '123abc';

    // Casting nilai variabel $str ke integer
    $bil = (int) $str;       // menggambil integer, $bill = 123
    echo $bil;
    // Ouput = 123

    echo '<br>';

    echo gettype($str);
    // Output = string

    echo '<br>';

    echo gettype($bil);
    // Output = integer    
    ?>
</body>
</html>