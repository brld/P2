<?php
  $words = array("tasty", "pig", "pillow", "smart", "laptop", "couch", "red", "sharp", "pencil", "funny", "muffin", "paper", "elite", "bright", "sunny", "confused", "wet", "rough", "furry", "soft");
  $password = array();
  $maxCycle = 20;
  $cycle = rand(1,$maxCycle);
  $passwordI = 0;
  $reindexedWords = array();
  for ($j = 1; $j <= 4 /* = inputWords*/; $j++) {
    for ($i=0; $i <= $cycle; $i++) {
      if ($i == $cycle) {
        $password[$passwordI] = $words[$i];
        unset($words[$i]);
        $reindexedWords = array_values($array);
      }
    }
    $passwordI++;
    $cycle = rand(1,$maxCycle - 1);
  }
?>
