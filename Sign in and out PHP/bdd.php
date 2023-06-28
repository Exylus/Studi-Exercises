<?php

    require 'vendor\autoload.php';
    
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/');
    $dotenv->load();

    $dbhost = $_ENV['DB_HOST'];
    $dbname = $_ENV['DB_NAME'];
    $dbuser = $_ENV['DB_USER'];
    $dbpassword = $_ENV['DB_PASSWORD'];

    $conn = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
?>