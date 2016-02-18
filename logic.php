<?php
  $words = array("tasty", "pig", "pillow", "smart", "laptop", "couch", "red", "sharp", "pencil", "funny", "muffin", "paper", "elite", "bright", "sunny", "confused", "wet", "rough", "furry", "soft", "clean", "fast", "frisbee");
  $symbols = array("!","@","#","$","%","^","&","*");
  $numbers = array("1","2","3","4","5","6","7","8","9");
  $inputWords = $_GET["inputWords"];
  $numberGen = $_GET["numberGen"];
  $symbolGen = $_GET["symbolGen"];
  $seperator = $_GET["seperator"];
  if (strlen($seperator) == 0) {
    $seperator = "- ";
  }
  if (! ctype_digit($inputWords)) {
    if (! strlen($inputWords) == 0) {
      $inputWords = 4;
      echo nl2br ("Not an integer, generating default 4 word password.");
    }

  }
  if (strlen($inputWords) == 0) {
    $inputWords = 4;
  }

  if ($inputWords == 1) {
    $inputWords = 2;
    echo nl2br ("Not a valid length, generating 2 word password.");
  }
  $numWords = $inputWords;
  $rand_words = array_rand($words,$numWords);
  $rand_symbols = array_rand($symbols, 1);
  $rand_numbers = array_rand($numbers, 1);
?>
