<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleksi Switch</title>
</head>
<body>
    <?php 
    // deklarasi dan inisialisasi
    $k = 0;

    if ($k == 0) {
        echo 'k equals 0';
    } elseif ($k == 1) {
        echo 'k equals 1';
    } elseif ($k == 2) {
        echo 'k equals 2';
    }

    echo '<br>';
    
    //Ekuivalen dengan pendekatan SWITCH
    switch ($k) {
        case 0:
            echo 'k equals 0';
            break;
        case 1:
            echo 'k equals 1';
            break;
        case 2:
            echo 'k equals 2';
            break;
        default:
             echo 'ERROR';
            break;
    }
    ?>
</body>
</html>