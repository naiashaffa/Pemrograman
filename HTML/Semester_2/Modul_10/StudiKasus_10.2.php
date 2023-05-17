<!-- Memberikan session pada halaman web -->
<?php
    session_start();
    if (isset($_SESSION['login'])) { //jika login sudah berhasil maka menampilkan isi session
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
                <h2>Selamat datang, <?php echo $_SESSION['login']?>!</h2>
                    Ini adalah halaman beranda !!<br>
                    Tekan tombol di bawah ini untuk mengakhiri session!<br>
                <a href="StudiKasus_10.3.php"><h3>Log out</h3></a>
            </div>
        </body>
        </html>
    <?php            
    } else {
        ?>
        <!-- session tidak muncul karena belum login atau belum berhasil login -->
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
                <h2>Anda belum berhasil Log In!</h2><br>
                    Tekan tombol di bawah untuk kembali ke page Log In!<br>
                <a href="StudiKasus_10.1.php"><h3>Log In</h3></a>
            </div>
        </body>
        </html>
    <?php
    }?>