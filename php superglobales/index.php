<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test de connection</title>
</head>
<body>
  <form action="welcome.php" method="post">
    <label for="identifiant">Identifiant :</label>
    <input type="text" id="identifiant" name="identifiant" required>
    <br>
    <label for="password">Password :</label>
    <input type="password" id="password" name="password" required>
    <br>
    <button type="submit" name="submit">Envoyer</button>
  </form>
  <?php
    if(!empty($_POST)){
      $username = $_POST['identifiant'];
      $password = $_POST['password'];
    }

    if (isset($username) & isset($password)){
      if($username == 'Erwan' & $password == 'thomy'){
      header('location:welcome.php');
      }
      else {
        echo 'Identifiant ou mot de passe incorrect.';
      }
    }
  ?>
</body>
</html>