<?php
  $words = array("tasty", "pig", "pillow", "smart", "laptop", "couch", "red", "sharp", "pencil", "funny", "muffin", "paper", "elite", "bright", "sunny", "confused", "wet", "rough", "furry", "soft", "clean", "fast", "frisbee");
  $symbols = array("!","@","#","$","%","^","&","*");
  $numbers = array("1","2","3","4","5","6","7","8","9");
  $inputWords = $_GET["inputWords"];
  $numberGen = $_GET["numberGen"];
  $symbolGen = $_GET["symbolGen"];

  if ($inputWords == 1) {
    $inputWords = 2;
    echo nl2br ("Invalid input, generating two word password. \n \n");
  }
  $numWords = $inputWords;
  $rand_words = array_rand($words,$numWords);
  $rand_symbols = array_rand($symbols, 1);
  $rand_numbers = array_rand($numbers, 1);
  for ($i=0; $i < $numWords; $i++) {
    echo $words[$rand_words[$i]] . "\n";
    if ($i < $numWords - 1) {
      echo "- ";
    }
  }
  if ($symbolGen == TRUE) {
    echo $symbols[$rand_symbols];
  }
  if ($numberGen == TRUE) {
    echo $numbers[$rand_numbers];
  }
?>
