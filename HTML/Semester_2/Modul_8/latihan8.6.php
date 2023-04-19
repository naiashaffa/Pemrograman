<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi dan Prosedur</title>
</head>
<body>
    <?php 
    // Contoh prosedur 
    function do_print() {
        // Mencetak informasi timestamp
        echo time();
        // Ouput = 1681912450

    }

    // Memanggil prosedur
    do_print();
    echo '<br />';

    // Contoh fungsi penjumlahan
    function jumlah($a, $b) {
        return ($a + $b);
    }

    echo jumlah(2,3);
    // Output = 5

    echo '<br>';
    echo '<br>';
    echo '<br>';


    /**
     * Mencetak string
     * $teks nilai string
     * $bold adalah argumen opsional
     */

     function print_text($text, $bold = true) {
        echo $bold ? '<b>' .$text. '</b>' : $text;
    }

    // Mencetak dengan huruf tebal
    print_text('Pemrograman Web 2023');
    // Ouput = Pemrograman Web 2023 (cetak tebal)

    echo '<br>';
    
    // Mencetak dengan huruf reguler
    print_text('Pemrograman Web 2023', false)
    // Ouput = Pemrograman Web 2023

    ?>
</body>
</html>