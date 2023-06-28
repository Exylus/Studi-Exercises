<?php
    require 'bdd.php';
    session_start();
    if(!empty($_POST)){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "select id, name, role 
                FROM user
                WHERE name = '$username'
                AND password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            header('location:home.php');
            $row = $result->fetch_assoc();
            $userid = $_SESSION['userid'] = $row['id'];
            $_SESSION['username'] = $row['name'];
            if ($row["role"] == 'admin') {
                $_SESSION['admin'] = true;
                setcookie("$userid", "admin", time() + 3600, '/');
            }
            else {
                $_SESSION['admin'] = false;
                setcookie("$userid", "user", time() + 3600, '/');
            }
          } else {
            echo "0 results";
          }
          $conn->close();
    }
?>