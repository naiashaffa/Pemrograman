<!-- Menghapus session -->
<?php
    session_start();
    if (isset($_SESSION['login'])) {
        unset ($_SESSION);
        session_destroy();
        ?>
        <!DOCTYPE html>
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">

                <!-- Bootstrap 5 CSS -->
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
                    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
                    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
                </script>
                <title>StudiKasus_10</title>
        </head>
        <body>
            <div class="container-fluid text-center">
                <h2>Anda berhasil Log Out!</h2><br>
                    Silakan tekan tombol di bawah untuk kembali ke page Log In!<br>
                <a href="StudiKasus_10.1.php"><h3>Log In</h3></a>
                    Tekan tombol di bawah untuk mengecek session<br>
                <a href="StudiKasus_10.2.php"><h3>Cek Session</h3></a>
            </div>
        </body>
        </html>
    <?php    
    }
?>