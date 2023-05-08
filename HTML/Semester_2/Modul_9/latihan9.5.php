<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Radio Button</title>
</head>
<body>
    
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" >
        Jenis Kelamin
        <br />
        <input type="radio" name="input_gender" value="Pria"/> Pria
        <input type="radio" name="input_gender" value="Wanita"/> Wanita
        <br />

        <input type="submit" value="OK"/>
    </form>

    <?php 
    echo '<br />';
    if (isset($_POST['input_gender'])) {
        echo $_POST['input_gender'];
        /* output: 
        Wanita (sesuai input)
        */
    }
    ?>
</body>
</html>