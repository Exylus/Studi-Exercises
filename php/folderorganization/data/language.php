<?php
function loadLanguage(string $language)
{
  if ($language == 'fr') {
    require_once('data/language_fr.php');
  } else {
    require_once('data/language_en.php');
  }
}