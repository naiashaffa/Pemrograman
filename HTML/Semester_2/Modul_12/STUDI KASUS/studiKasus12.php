<!-- PHP -->
<?php

    session_start(); 
    if (isset($_POST['logout'])) {
        unset($_SESSION);
        session_destroy();
        echo "<p align=center>Anda berhasil Log Out.";
        echo "<p align=center>Kembali ke halaman Log In...";
        header('Refresh:3 ; URL=studikasus.php');
        exit;
    }
    // jika form sudah diisi
    if (isset($_POST['username']) || isset($_POST['password'])) { 
        // jika username dan password sesuai dengan yang ditentukan
        if ($_POST['username'] === "admin" && $_POST['password'] === "admin") {
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
                    <h1>Data Buku</h1>
                    <h4>Menambahkan Data Buku</h4>
                    <form method="post" action="insert.php">
                        <table>
                            <tr>
                                <td>KODE</td>
                                <td><input type="number" name="kode"></td>
                            </tr>
                            <tr>
                                <td>JUDUL</td>
                                <td><input type="text" name="judul"></td>
                            </tr>
                            <tr>
                                <td>STOK</td>
                                <td><input type="test" name="stok"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" value="SUBMIT"></td>
                            </tr>
                        </table>
                    </form>
                    <h4>Menampilkan Data Buku</h4>
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Judul</th>
                            <th>Stok</th>
                            <th>Action</th>
                        </tr>
                        <?php
                            include("koneksi.php");
                            $no = 1;
                            $data = mysqli_query($koneksi, "SELECT * FROM datbuku");
                            while($d = mysqli_fetch_array($data)){ ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $d['KODE']; ?></td>
                                    <td><?php echo $d['JUDUL']; ?></td>
                                    <td><?php echo $d['STOK']; ?></td>
                                    <td>
                                        <a href="lihat.php?nim=<?php echo $d['KODE']; ?>">Lihat</a>
                                        <a href="edit.php?nim=<?php echo $d['KODE']; ?>">Edit</a>
                                        <a href="hapus.php?nim=<?php echo $d['KODE']; ?>">Hapus</a>
                                    </td>
                                </tr> 
                                <?php
                            }
                        ?>
                    </table>
                </body>
                </html> 
                <?php
            } else { 
                die("Anda belum berhasil Log In! Silahkan login <a href='studiKasus12.php'>Log In</a>"); // jika belum login jangan melanjutkan
            }
        } else { // jika username dan password tidak sesuai dengan yang ditentukan
            echo "<p align=center> <font color=red size=4px> Login gagal. Username atau Password salah.";
            echo "<p align=center> <font color=black> Kembali ke halaman Log In...";
            header('Refresh:4 ; URL=studiKasus12.php');
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
                    Little Story Store
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