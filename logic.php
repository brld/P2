<?php
  $words = array("tasty", "pig", "pillow", "smart", "laptop", "couch", "red", "sharp", "pencil", "funny", "muffin", "paper", "elite", "bright", "sunny", "confused", "wet", "rough", "furry", "soft", "clean", "fast", "frisbee");

  $numWords = $inputWords;
  $rand_keys = array_rand($words,$numWords);
  for ($i=0; $i < $numWords; $i++) {
    echo $words[$rand_keys[$i]] . "\n";
    if ($i != $numWords - 1) {
      echo "- ";
    }
  }
?>
