<?php

    if ($_POST['username']&&$_POST['password']){
        $username = htmlentities($_POST['username']);
        $password = htmlentities($_POST['password']);
// set cookies
        setcookie("auth", "ok", time()+10000);
        header('Location: loggedin.php');
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Cookie Data</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Name: <input type="text" name="username">
    Password: <input type="text" name="password"><br/><br/>
    <input type="submit" name="" value="Log Me In">
    </form>
</body>
</html>