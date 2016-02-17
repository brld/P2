<?php
  $words = array("tasty", "pig", "pillow", "smart", "laptop", "couch", "red", "sharp", "pencil", "funny", "muffin", "paper", "elite", "bright", "sunny", "confused", "wet", "rough", "furry", "soft");
  $password = array();
  $cycle = rand(1,20);
  for ($j=1; $j <= 4 /* = inputWords*/; $j++) {
    $passwordI = 0;
    for ($i=1; $i <= $cycle; $i++) {
      if ($i == $cycle) {
        $password[$passwordI] = $words[$i];
        unset($words[$i]);
      }
    }
    $passwordI++;
    if ($j < 4) {
      join ($password, "-");
    }
  }
?>
