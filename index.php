<!DOCTYPE html>
<html>
  <head>

    <?php require "logic.php"; ?>
    <title>xkcd Password Generator</title>
    <link rel="stylesheet" href="main.css" type="text/css">

  </head>
  <body>
    <h1>xkcd Password Generator</h1>
    <form action="index.php" method="GET">
      <p>Number of words (Min 2, Max 9):</p> <br>
      <input type="text"  name="inputWords" maxlength="1" id="inputWords"> <br>
      <p>Include a number?</p> <br>
      <input type="checkbox" name="numberGen" value="Number" id="numberGen"> <br>
      <p>Include a symbol?</p> <br>
      <input type="checkbox" name="symbolGen" value="Symbol" id="symbolGen"> <br>
      <input type="submit" value="Generate new"> <br><br>
    </form>
    <?php for ($i=0; $i < $numWords; $i++) {
      echo $words[$rand_words[$i]] . "\n";

      if ($i < $numWords - 1) {
      echo "- ";
      }
      if ($symbolGen == TRUE) {
        echo $symbols[$rand_symbols];
      }
      if ($numberGen == TRUE) {
        echo $numbers[$rand_numbers];
      }
    }?>
  </body>
</html>
