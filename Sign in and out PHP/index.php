<?php
    require_once 'bdd.php';
    require 'login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Superglobales</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="username">Username :</label>
        <input type="text" id="username" name="username">
        <br>
        <label for="password">Password :</label>
        <input type="password" name="password" id="password">
        <br>
        <button><a href="register.php">Register</a></button>
        <button type="submit">Login</button>
    </form>
</body>
</html>