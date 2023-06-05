<?php
session_start();

// Memeriksa apakah form login telah disubmit
if (isset($_POST['submit'])) {
    $username_adm = $_POST['username_adm'];
    $password_adm = $_POST['password_adm'];

    $koneksi = mysqli_connect('localhost', 'root', '', 'prakweb');
    if (!$koneksi) {
        die('koneksi gagal: ' . mysqli_connect_error());
    }

    // Membuat query untuk memeriksa kecocokan email dan password di tabel admin
    $query = "SELECT * FROM admin WHERE username_adm = '$username_adm' AND password_adm = '$password_adm'";
    $result = mysqli_query($koneksi, $query);

    // Memeriksa jumlah baris hasil query
    if (mysqli_num_rows($result) == 1) {
        // Jika ditemukan satu baris, berarti login berhasil
        $_SESSION['submit'] = $user;
        header("Location: webpage.php");
        exit();
    } else {
        // Jika tidak ditemukan baris yang cocok, berarti login gagal
        header("Location: login.php?error=1");
        exit();
    }
}
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

        <!-- Form Login -->
        <section class="vh-100" style="background-color: #EADDCA;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                    <div class="col-md-4 col-lg-5 d-none d-md-block">       <!-- gambar sebelah form-->
                        <img src="https://i.pinimg.com/564x/b7/7c/5c/b77c5c98f072f27da5e3e769bda94a92.jpg"
                            alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                    </div>
                    <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5">

                        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return validateForm()">

                        <div class="d-flex align-items-center mb-3 pb-1">
                            <span class="h1 fw-bold mb-0" style="color: #C19A6B">THE STORY OF BOOKS</span>
                        </div>

                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px; color: #6F4E37;">Sign into your account</h5>

                        <div class="form-outline mb-4">
                         <input class="form-control" type="text" name="username" id="Username" placeholder="Username" style="margin-bottom: 10px;height: 50px;">
                        </div>

                        <div class="form-outline mb-4">
                            <input class="form-control" type="password" name="password" id="Password" placeholder="Password" style="margin-bottom:5px ;height: 50px;">
                        </div>

                        <div class="pt-1 mb-2 d-grid">
                            <input type="submit" class="btn btn-primary btn-block" value="Log In" style="margin-top: 2px; margin-bottom: 10px;">
                        </div>
                        
                        <!-- link tidak aktif -->
                        <a class="small text-muted" href="#!">Forgot password?</a>
                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="#!"
                            style="color: #393f81;">Register here</a></p>
                        <a href="#!" class="small text-muted">Terms of use.</a>
                        <a href="#!" class="small text-muted">Privacy policy</a>
                        </form>
                        <!-- Jika login gagal -->
                        <?php
                        if (isset($_GET['error']) && $_GET['error'] == 1) {
                            echo '<p style="color: red;">Email atau password salah</p>';
                        }   
                        ?>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>        
        </html>