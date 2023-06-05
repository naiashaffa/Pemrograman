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
                    <script>        // javascript untuk notif
                        function confirmHelp() {
                        return confirm("Silahkan hubungin nomor 082123456789 \nMohon maaf atas ketidaknyamanannya.");
                    }
                    </script>
                    <title>Home Page</title>    

                </head>

                <body class="web bg-light"> <!--mengatur background -->
                    <!-- HTML -->
                    <header class="d-flex flex-wrap justify-content-end py-2 mb-3 px-3" >       <!-- rata kiri -->
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a href="#" class="nav-link" style="color: #000000DE;" onclick="confirmHelp()">Help Center</a>
                            </li>
                        </ul>
                        <form method="post">
                            <input type="submit" class="nav-link active btn btn-primary" name="logout" value="Log Out">
                        </form>
                    </header>

                    <div class="p-2 p-md-4 mb-3 text-center" style="background-color: #6F4E37; color: #EADDCA;">                            
                        <h2>HELLO Admin!</h2>
                    </div>

                    <div class="b-example-divider"></div>
                    <div class="container">
                    <!-- Two columns of text below the carousel -->
                    <div class="row justify-content-md-center">

                    <div class="col-lg-6 text-center">
                    <svg class="bd-placeholder-img rounded" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <image href="https://cdn-icons-png.flaticon.com/512/5773/5773749.png" width="100%" height="90%" />
                    </svg>
                        <h2>ADD DATA</h2>
                        <p>Menu untuk menambahkan data buku.</p>
                        <p><a class="btn btn-secondary" href="tambah-data.php">Add new »</a></p>
                    </div><!-- /.col-lg-6 -->

                    <div class="col-lg-6 text-center">
                    <svg class="bd-placeholder-img rounded" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <image href="https://cdn-icons-png.flaticon.com/512/2857/2857376.png" width="100%" height="90%" />
                    </svg>                        
                    <h2>CHECK DATA</h2>
                        <p>Menu untuk lihat data, edit, dan hapus.</p>
                        <p><a class="btn btn-secondary" href="buku-data.php">View details »</a></p>
                    </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </body>
                </html> 