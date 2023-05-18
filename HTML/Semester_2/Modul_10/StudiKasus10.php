<!-- PHP -->
<?php

    session_start(); 
    if (isset($_POST['logout'])) {
        unset($_SESSION);
        session_destroy();
        echo "<p align=center>Anda berhasil Log Out.";
        echo "<p align=center>Kembali ke halaman Log In...";
        header('Refresh:3 ; URL=StudiKasus10.php');
        exit;
    }
    // jika form sudah diisi
    if (isset($_POST['username']) || isset($_POST['password'])) { 
        // jika username dan password sesuai dengan yang ditentukan
        if ($_POST['username'] === "naia" && $_POST['password'] === "admin") {
            $_SESSION['login'] = $_POST['username'];
            // masuk ke halaman login page
            if (isset($_SESSION['login'])) { 
                ?>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <!-- Bootstrap -->
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
                        rel="stylesheet" 
                        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
                        crossorigin="anonymous">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
                        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" 
                        crossorigin="anonymous">
                    </script>
                    <title>Home Page</title>
                </head>
                <body class="web bg-white">
                    <!-- HTML -->
                    <header class="d-flex flex-wrap justify-content-end py-2 mb-3 px-3" >
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a href="#" class="nav-link" style="color: #000000DE;" >Category</a>
                            </li>
                        </ul>
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a href="#" class="nav-link" style="color: #000000DE;">Help Center</a>
                            </li>
                        </ul>
                        <form method="post">
                            <input type="submit" class="nav-link active" name="logout" value="Log Out">
                        </form>
                    </header>
                    <div class="p-2 p-md-4 mb-3 text-center text-white bg-dark">                            
                        <h2>Welcome to FLOWERS MAKE UP!</h2>
                        <h3>Take Your Shopping Time :) </h3>
                    </div>
                    <div class="b-example-divider"></div>
                    <div class="container marketing">
                    <!-- Three columns of text below the carousel -->
                    <div class="row">
                    <div class="col-lg-4">
                        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

                        <h2>Heading</h2>
                        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
                        <p><a class="btn btn-secondary" href="#">View details »</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

                        <h2>Heading</h2>
                        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
                        <p><a class="btn btn-secondary" href="#">View details »</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

                        <h2>Heading</h2>
                        <p>And lastly this, the third column of representative placeholder content.</p>
                        <p><a class="btn btn-secondary" href="#">View details »</a></p>
                    </div><!-- /.col-lg-4 -->
                    </div><!-- /.row -->
                </body>
                </html> 
                <?php
            } else { 
                die("Anda belum berhasil Log In! Silahkan login <a href='StudiKasus10.php'>Log In</a>"); // jika belum login jangan melanjutkan
            }
        } else { // jika username dan password tidak sesuai dengan yang ditentukan
            echo "<p align=center> <font color=red size=4px> Login gagal. Username atau Password salah.";
            echo "<p align=center> <font color=black> Kembali ke halaman Log In...";
            header('Refresh:4 ; URL=StudiKasus10.php');
        }
    } else { 
        ?>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- Bootstrap -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
                rel="stylesheet" 
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
                crossorigin="anonymous">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
                integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" 
                crossorigin="anonymous">
            </script>
            <title>Login Page</title>
            <!-- Script JS -->
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
        <body class="web bg-light">
            <!-- HTML -->
            <header class="bd-header bg-dark py-3 d-flex align-items-stretch border-bottom border-dark">
                <div class="container-fluid d-flex align-items-center">
                    <h1 class="d-flex align-items-center fs-4 text-white mb-0">
                    Flowers Make Up
                    </h1>
                </div>
            </header>
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
                                <div>
                                    <input type="submit" value="Log In" style="margin-top: 25px; margin-bottom: 25px;">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </body>
        </html> <?php
    }
?>