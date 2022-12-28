<?php
require 'functions.php';

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0 )  {
        echo "<script>
                alert('user baru telah ditambahkan')
              </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Registrasi</title>
    <link rel="stylesheet" href="style.css">

    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    
    <h1>Halaman Registrasi</h1>
    <font size="+2" color="navy" face="Calibri">
    <center>
    <form action="" method="post">

        <br>
            <label>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>
            </label>
        </br>
        <br>
            <label>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </label>
        </br>
        <br>
            <label>
                <label for="password2">Konfirmasi Password</label>
                <input type="password" name="password2" id="password2" required>
            </label>
        </br>
        <br>
            <button type="submit" name="register">Register!</button>
        </br>

    </form>
    </center>
</body>
</html>