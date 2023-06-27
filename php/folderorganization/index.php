<?php
  require_once 'data/user.php';
  require_once 'data/language.php';

  $user = getUser();
  loadLanguage($user['language']);
  $name = $user['name'];
  $sports = getUserSports($user);
  
  include 'data/template.php';
