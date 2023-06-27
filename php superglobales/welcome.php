<?php
    $username = 'test';
    if(!empty($_POST)){$username = $_POST['identifiant'];}
    echo '<h1>'.'Bievenue '.$username.'!';