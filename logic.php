<?php
  $words = array("tasty", "pig", "pillow", "smart", "laptop", "couch", "red", "sharp", "pencil", "funny", "muffin", "paper", "elite", "bright", "sunny", "confused", "wet", "rough", "furry", "soft", "clean", "fast", "frisbee");
  $inputWords = $_GET["inputWords"];

  if ($inputWords == 1) {
    $inputWords = 2;
    echo nl2br ("Invalid input, generating two word password. \n \n");
  }
  $numWords = $inputWords;
  $rand_words = array_rand($words,$numWords);

  }
?>
