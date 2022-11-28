<?php  
if( isset($_POST["submit"])) {
    if( $_POST["username"] == "dheni" && $_POST["password"] == "789" ) {
        header("Location: Admin.php");
        exit;
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    <font size="+3" color="green" face="Calibri">
        <center>
            <h1>Login</h1>
        </center>
    </font>
    
    <font size="+2" color="green" face="Calibri">
    <center>
        <form action="" method="post">
            <br>
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </br>
            <br>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </br>
            <br>
                <?php if( isset($error) ) : ?>
                <p style="color: red; font-style: italic">Username / Password salah!!</p>
                <?php endif; ?>

                <button type="submit" name="submit">Log In</button>
            </br>
        </form>
    </center>
</body>
</html>