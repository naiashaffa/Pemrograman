<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Checkbook</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 
    Hobby    :
    // menggunakan array ('[]')
    <input type="checkbox" name="input_hobby[]" value="Membaca"/> Membaca
    <input type="checkbox" name="input_hobby[]" value="Belanja"/> Belanja
    <input type="checkbox" name="input_hobby[]" value="Memasak"/> Memasak
    <input type="checkbox" name="input_hobby[]" value="Olahraga"/> Olahraga
    <br />

    <input type="submit" value="OK"/>
    </form>

    <?php
        if (isset($_POST['input_hobby'])) {
            foreach ($_POST['input_hobby'] as $key => $val) {
                // menampilkan nilai dari variabel array input_hobby dengan key dan value
                echo $key . ' -> ' . $val . '<br>';
                /* output :  
                    0 -> Membaca
                    1 -> Belanja
                    2 -> Memasak
                    3 -> Olahraga */

            }
        }
    ?>
</body>
</html>