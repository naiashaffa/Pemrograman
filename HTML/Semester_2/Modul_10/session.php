<?php
    session_start();
    if (isset($_POST['login'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        //periksa login
        if ($user == "Naia" && $pass == "12345") {
            //menciptakan session
            $_SESSION['login'] = $user;
            //menuju ke halaman pemeriksaan session
            echo "<h1>Anda berhasil Login!</h1>";
            echo "<h2>Klik <a href='session2.php'>disini</a> untuk menuju ke halaman pemeriksaan session";
        }
    } else {
        ?>
        <html>
            <head>
                <title>Log in Page</title>
            </head>
            <body>
                <form action="" method="post">
                    <h2>Log In</h2>
                    <div>
                        <input class="form-control" type="text" name="user" id="Username" placeholder="Username" style="margin-bottom: 12px">
                    </div>
                    <div>
                        <input class="form-control" type="password" name="pass" id="Password" placeholder="Password" style="margin-bottom: 12px">
                    </div>
                    <div>
                    <input type="submit" name="login" value="Log In">
                    </div>
                </form>
            </body>
        </html>
    <?php
    }
?>