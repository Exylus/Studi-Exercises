<?php
    require 'bdd.php';
    if(!empty($_POST)){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        $sql = "INSERT INTO user (name, password, email, role) 
                VALUES ('$username', '$password', '$email', 'user');";
        
        $conn->query($sql);
        $conn->close();
        header('location:index.php');
    }
?>