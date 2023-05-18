<!-- php -->
<?php
    //memulai session
    session_start();
    if (isset($_POST['logout'])) {
        unset($_SESSION);
        session_destroy;
        echo "<p align=center> Anda berhasil Log Out :)"; 
        echo "<br><p align-center> Kembali Page Log In";
        header('Refresh:2 ; URL=StudiKasus_10.php'); 
        exit;
    }
    if (isset($_POST['username']) || isset($_POST['password'])) { 
            if ($username === "naia" && $password === "admin") { 
                $_SESSION['login'] = $username;
                if (isset($_SESSION['login'])) {
                    ?>
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
                        
                        <title>Studi Kasus Page</title>
                    </head>
                    <body>
                        <div class="container-fluid">
                            <h2>Anda berhasil Log In!</h2>
                            <p>Pilih tombol di bawah sesuai keinginan Anda..</p>
                            <a href="StudiKasus_10.2.php"><h4>HOME</h4></a> 
                            <p></p>
                            <a href="StudiKasus_10.3.php"><h4>LOG OUT</h4></a>
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
                    
                    <title>Studi Kasus Page</title>
                </head>
                <body>
                    <div class="container-fluid text-center">
                        <h2>Anda gagal Log In!</h2><br>
                        Silakan tekan tombol di bawah untuk kembali ke page Log In!<br>
                        <a href="StudiKasus_10.php"><h3>Log In</h3></a>
                    </div>
                </body>
                </html>
            <?php    
            }
        } else {
            die("Anda belum berhasil login! Silahkan login <a href='StudiKasus_10.php'>di sini</a>");
        }
    } else {
            ?>
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
                    
                <title>Studi Kasus Page</title>

                    <!-- javascript -->
                    <script>
                        function validateForm() { 
                            var username = document.getElementById("username").value;
                            var password = document.getElementById("password").value;
                            if (username == "" && password == "") { 
                                alert("Username dan Password harus diisi!");
                                document.getElementById("username").focus();
                                document.getElementById("username").select();
                                return false;
                            }

                            if (!/^[a-zA-Z]*$/g.test(username) && !/^[a-zA-Z]*$/g.test(password)) { //jika username dan password mengandung angka
                                document.getElementById("username").focus();
                                document.getElementById("username").select();
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
                                <h2 style="margin-top: 20px; margin-bottom: 20px;">SIGN IN</h2>

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