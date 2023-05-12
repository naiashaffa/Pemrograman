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
    
    <title>Login Page</title>

    <!-- JavaScript-->
    <script>
        // Fungsi untuk validasi form
        function validateForm() {
            var username = document.getElementById("Username").value;
            var password = document.getElementById("Password").value;
            if (username == "" || password == "") { 
                alert("Username dan Password harus diisi."); 
                document.getElementById("Username").focus(); 
                document.getElementById("Username").select(); 
                return false; 
            }
            if (!/^[a-zA-Z]+$/.test(username) || !/^[a-zA-Z]+$/.test(password)) { 
                alert("Username dan Password harus diisi dengan huruf."); 
                document.getElementById("Username").focus(); 
                document.getElementById("Username").select(); 
                return false; 
            }
            return true; 
        }
    </script>
</head>

<body class="web bg-light">
    <!-- Form HTML -->
    <div class="container-fluid text-center col-13 col-md-8 col-lg-4">
        <div class="card" style="margin-top: 80px; margin-bottom: 60px;">
            <h2 style="margin-top: 20px; margin-bottom: 20px;">SIGN IN</h2>

            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return validateForm()">
                <div class="container text-center">
                    <div>
                        <input class="form-control" type="text" name="input_username" id="Username" placeholder="Username" style="margin-bottom: 12px;">
                    </div>
                    <div>
                        <input class="form-control" type="password" name="input_password" id="Password" placeholder="Password">
                    </div>
                </div>
                <input type="submit" value="Log In" style="margin-top: 25px; margin-bottom: 25px;">
            </form>
        </div>
    </div>
    
    <!-- PHP -->
    <?php
        if (isset($_POST['input_nama']) || isset($_POST['input_password'])) { 
            $input_username = $_REQUEST['input_username'];
            $input_password = $_REQUEST['input_password'];

            if ($_POST['input_username'] == "NaiaShaffa" && $_POST['input_password'] == "admin") {  // ada inputan khusus (NaiaShaffa, admin)
                // tampilan pesan login berhasil
                echo "<p align=center> <font color=green size=5px> Selamat Datang, " . $_POST['input_username'] . "!";
            } else { 
                // tampilan pesan login gagal
                echo "<p align=center> <font color=red size=4px> !!Login gagal!! <br /> Username atau Password salah.";
            }
        }
    ?>
</body>
</html>