<!DOCTYPE html>
<html>
  <head>

    <?php require "logic.php" ?>
    <title>xkcd Password Generator</title>
    <link rel="stylesheet" href="" type="text/css">

  </head>
  <body>
    <h1>Xkcd Password Generator</h1>
    <?php $inputWords = 4; ?>
    <form action="index.php" method="GET">
      Number of words (Max 9):
      <input type="text" name="inputWords" maxlength="1" id="inputWords"> <br>
      <input type="submit" value="Generate new">
      <?php
      $inputWords= $_GET["inputWords"];
      ?>
    </form>
  </body>
</html>
