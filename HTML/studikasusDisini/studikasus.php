<!--Membuat page -->

<!-- PHP -->
<?php
      session_start();
      if(isset($_POST['login'])) {
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        //digunakan untuk membuat session
        if ($email == "revalin@gmail.com" && $pwd == "alin") {
          //membuat session
            $_SESSION['login'] = $email;
            header("location: studikasus2.php");
        } else {
          echo "<br><p align=center style= font-weight: bold;> Login Gagal!!!";
        }
      } 
?>

<!--Code HTML Bootstrap 3-->
<!DOCTYPE html>
<html lang="en" id="facebook" class="tinyViewport tinyWidth">
<head>
  <title>Studi Kasus</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
         <!--Merupakan script javascript-->
          <script type="text/javascript">
                    function validateForm() {
                        var email = document.forms["loginForm"]["email"].value;
                        var pwd = document.forms["loginForm"]["pwd"].value;
                        if (email == "" || pwd == "") {
                            alert("Email dan Password tidak boleh kosong.");
                            if (email == "") {
                                document.forms["loginForm"]["email"].focus();
                            } else {
                                document.forms["loginForm"]["pwd"].focus();
                            }
                            return false;
                      }
                    }
          </script>
</head>

<!--Membuat class jumbotron untuk keseluruhan web-->
<body>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <div class="row-justify-content-server">
        <!--Membuat bagian kiri web menggunakan sistem grid pada bootstrap-->
        <div class="col-sm-3">
          <h1 align="right" style="font-weight: bold; color: brown"></h1>    
        </div>
      </div>

  <!--Membuat bagian kanan web menggunakan sistem grid bootstrap-->
  <!--Membuat form dan button dari code bootstrap-->
  <div class="col-sm-4">
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post"> 
      <label for="email"> </label>
        <div class="form-group">
          <input class="email" type="email" class="form-control" id="email" placeholder="Email address or phone number" name="email">
        </div>
        <div class="form-group">
          <input class="pass" type="password" class="form-control" id="pwd" placeholder="Password" name="pwd">
        </div>
        <?php $status = ''; ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
          <button type="submit" value="Log In" style="font-weight: bold;" class="btn" name="login">Log in</button>
            <div class="form-group"></div>
            <div class="text-center"><a href="">Forgotten password?</a></div>
            <div class="form-group">
          <hr color="grey"></div>
    </form>
  </div>
  
</body>
</html>