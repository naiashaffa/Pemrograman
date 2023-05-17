<?php 
    session_start();
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        //periksa login
        if ($username == "admin" && $password == "12345") {
            // menciptakan session
            $_SESSION['login'] = $username;
            ?>
            <!DOCTYPE html>
            <html lang="en">
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
                    <title>choose menu</title>
                </head>
                <body>
                    <div class="container-fluid">
                        <h2>Kamu berhasil Log In!</h2>
                        <p>Pilih tombol di bawah untuk melanjutkan...</p>
                        <a href="StudiKasus_10.2.php">Beranda</a><br>
                        <a href="StudiKasus_10.3.php">Log out</a>
                    </div>
                </body>
            </html>               
            <?php   
        } else {
            ?>
            <!DOCTYPE html>
            <html lang="en">
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
                    <div class="container-fluid">
                        <h2>Kamu Gagal Log In!</h2>
                        <p>Pilih tombol di bawah untuk kembali ke page Log In...</p>
                        <a href="StudiKasus_10.1.php">Log in</a><br>
                    </div>
                </body>
            </html>               
            <?php   
        } 
    } else {
        ?>
        <!DOCTYPE html>
        <html lang="en">
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
            
            <title>Log In Page</title>

            <!-- JavaScript-->
            <script>
                // Fungsi untuk validasi form
                function validateForm() {
                    var username = document.getElementById("input_username").value;
                    var password = document.getElementById("input_password").value;
                    if (username == "" || password == "") { 
                        alert("Username dan Password harus diisi."); 
                        document.getElementById("input_username").focus(); 
                        document.getElementById("input_username").select(); 
                        return false; 
                    }
                    if (!/^[a-zA-Z]+$/.test(username) || !/^[a-zA-Z]+$/.test(password)) { 
                        document.getElementById("input_username").focus(); 
                        document.getElementById("input_username").select(); 
                        return false; 
                    }
                    return true; 
                }
            </script>
        </head>

        <body>
            <!-- Form HTML -->
            <div class="container-fluid text-center col-13 col-md-8 col-lg-4">
                <div class="card" style="margin-top: 80px; margin-bottom: 60px;">
                    <h2 style="margin-top: 20px; margin-bottom: 20px;">LOG IN</h2>

                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return validateForm()">
                        <div class="container text-center">
                            <div>
                                <input class="form-control" type="text" name="username" id="Username" placeholder="Username" style="margin-bottom: 12px;">
                            </div>
                            <div>
                                <input class="form-control" type="password" name="password" id="Password" placeholder="Password">
                            </div>
                        </div>
                        <input type="submit" value="Log In" style="margin-top: 25px; margin-bottom: 25px;">
                    </form>
                </div>
            </div>
            
        </body>
        </html>
    <?php
    }
?>