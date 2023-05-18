<?php
    session_start();
    if (isset($_SESSION['login'])) {
        session_unset();
        session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap 5 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>StudiKasus_10</title>
    </head>
    <body class="d-flex h-100 text-center text-white bg-dark">
        <div>
            <h2>Anda berhasil Log Out!</h2><br>
            Silakan tekan tombol di bawah untuk kembali ke halaman Log In!<br>
            <a href="StudiKasus_10.1.php"><h3>Log In</h3></a>
            Tekan tombol di bawah untuk mengecek session<br>
            <a href="StudiKasus_10.2.php"><h3>Cek Disini</h3></a>
        </div>
        
        <!-- Bootstrap 5 JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>
    </body>
</html>
<?php    
    }
?>
