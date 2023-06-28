<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Gestion des utilisateurs</a></li>
            <li><a href="logout.php">Deconnexion</a></li>
            <?php
            if ($_SESSION['admin'] === true) {
                echo '<li><a href="#">Donnees serveur</a></li>';
            }
            ?>
        </ul>
    </nav>
    <?php var_dump($_SESSION); ?>
</body>
</html>
