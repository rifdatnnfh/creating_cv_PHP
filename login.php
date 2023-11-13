<?php
session_start();

if(isset($_POST['submit'])){
    if($_POST['username'] == 'Rifda' && $_POST['password'] == '12345678'){
        $_SESSION['username'] = 'Rifda';
        header("Location: index.php");
    }else{
        header("Location: index.php?error");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="index.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>