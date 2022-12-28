<?php  

session_start();

require 'functions.php';

if( isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    $result = mysql_query($conn, "SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    if( $key === hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;
    }
}

if( isset($_SESSION["login"])) {
    header("Location: admin.php");
    exit;
}

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysql_query($conn, "SELECT * FROM user WHERE
        username = '$username'");

    if ( mysql_num_rows($result) === 1 ) {
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"])) {

            $_SESSION["login"] = true;

            if( isset($_POST['remember'])) {

                setcookie('id', $row['id'], time() + 60);
                setcookie('key', hash('sha256', $row['username']), time()+60);
            }

            header("Location: admin.php");
            exit;
        }
    }

    $error = true;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Login</title>
    <link rel="stylesheet" href="style.css">

    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>

    <h1>Halaman Login</h1>

    <?php if( isset($error)) : ?>
        <p style="color: red; font-style: italic;">username /password salah</p>
    <?php endif; ?>

    <font size="+2" color="navy" face="Calibri">
    <center>
    <form action="" method="post">
    
    
        <br>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
        </br>
        <br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </br>
        <br>
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Remember me</label>
        </br>
        <br>
            <button type="submit" name="login">Login!</button>
        </br>
    
    
    </form>
    </center>
</body>
</html>