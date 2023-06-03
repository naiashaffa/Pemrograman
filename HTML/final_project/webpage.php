<!-- PHP -->
<?php

    session_start(); 
    if (isset($_POST['logout'])) {
        unset($_SESSION);
        session_destroy();
        echo "<p align=center>Anda berhasil Log Out.";
        echo "<p align=center>Kembali ke halaman Log In...";
        header('Refresh:3 ; URL=webpage.php');
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
                    <script>
                        function confirmHelp() {
                        return confirm("Silahkan hubungin nomor 082123456789 \nMohon maaf atas ketidaknyamanannya.");
                    }
                    </script>
                    <title>Home Page</title>

                </head>

                <body class="web bg-light">
                    <!-- HTML -->
                    <header class="d-flex flex-wrap justify-content-end py-2 mb-3 px-3" >
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a href="#" class="nav-link" style="color: #000000DE;" onclick="confirmHelp()">Help Center</a>
                            </li>
                        </ul>
                        <form method="post">
                            <input type="submit" class="nav-link active btn btn-dark" name="logout" value="Log Out">
                        </form>
                    </header>

                    <div class="p-2 p-md-4 mb-3 text-center text-white bg-dark">                            
                        <h2>HELLO Admin!</h2>
                    </div>

                    <div class="b-example-divider"></div>
                    <div class="container">
                    <!-- Three columns of text below the carousel -->
                    <div class="row justify-content-md-center">
                    <div class="col-lg-6 text-center">
                    <svg class="bd-placeholder-img rounded" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <image href="https://cdn-icons-png.flaticon.com/512/5773/5773749.png" width="100%" height="90%" />
                    </svg>
                        <h2>ADD DATA</h2>
                        <p>Menu untuk menambahkan data buku.</p>
                        <p><a class="btn btn-secondary" href="tambah-data.php">Add new »</a></p>
                    </div><!-- /.col-lg-6 -->

                    <div class="col-lg-6 text-center">
                    <svg class="bd-placeholder-img rounded" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <image href="https://cdn-icons-png.flaticon.com/512/2857/2857376.png" width="100%" height="90%" />
                    </svg>                        
                    <h2>CHECK DATA</h2>
                        <p>Menu untuk lihat data, edit, dan hapus.</p>
                        <p><a class="btn btn-secondary" href="buku-data.php">View details »</a></p>
                    </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </body>
                </html> 
                <?php
            } else { 
                die("Anda belum berhasil Log In! Silahkan login <a href='webpage.php'>Log In</a>"); // jika belum login jangan melanjutkan
            }
        } else { // jika username dan password tidak sesuai dengan yang ditentukan
            echo "<p align=center> <font color=red size=4px> Login gagal. Username atau Password salah.";
            echo "<p align=center> <font color=black> Kembali ke halaman Log In...";
            header('Refresh:4 ; URL=webpage.php');
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

        <section class="vh-100" style="background-color: #A7C7E7;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                    <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="https://i.pinimg.com/564x/8a/e4/9a/8ae49abb1016d82a118115a6a6516802.jpg"
                        alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                    </div>
                    <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">

                        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return validateForm()">

                        <div class="d-flex align-items-center mb-3 pb-1">
                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                            <span class="h1 fw-bold mb-0">Little Story Store</span>
                        </div>

                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                        <div class="form-outline mb-4">
                         <input class="form-control" type="text" name="username" id="Username" placeholder="Username" style="margin-bottom: 10px;height: 50px;">
                        </div>

                        <div class="form-outline mb-4">
                            <input class="form-control" type="password" name="password" id="Password" placeholder="Password" style="margin-bottom:5px ;height: 50px;">
                        </div>

                        <div class="pt-1 mb-2 d-grid">
                            <input type="submit" class="btn btn-primary btn-block" value="Log In" style="margin-top: 2px; margin-bottom: 10px;">
                        </div>

                        <a class="small text-muted" href="#!">Forgot password?</a>
                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="#!"
                            style="color: #393f81;">Register here</a></p>
                        <a href="#!" class="small text-muted">Terms of use.</a>
                        <a href="#!" class="small text-muted">Privacy policy</a>
                        </form>

                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>        
        </html> <?php
    }
?>