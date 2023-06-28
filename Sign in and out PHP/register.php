<?php
    require_once 'bdd.php';
    require 'signup.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Superglobales - Register</title>
</head>
<body>
    <form action="register.php" method="POST">
        <label for="username">Username :</label>
        <input type="text" id="username" name="username">
        <br>
        <label for="password">Password :</label>
        <input type="password" id="password" name="password">
        <br>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email">
        <br>
        <button><a href="index.php">Login</a></button>
        <button type="submit">Register</button>
    </form>
</body>
</html>