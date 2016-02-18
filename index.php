<!DOCTYPE html>
<html>
  <head>

    <?php require "logic.php"; ?>
    <title>xkcd Password Generator</title>
    <link rel="stylesheet" href="main.css" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300' rel='stylesheet' type='text/css'>

  </head>
  <body>
    <h1>xkcd Password Generator</h1>
    <form action="index.php" method="GET">
      <p>Number of words (Min 2, Max 9):</p>
      <input type="text"  name="inputWords" maxlength="1" id="inputWords"> <br><br>
      <p>Include a number?</p>
      <input type="checkbox" name="numberGen" value="Number" id="numberGen"> <br><br>
      <p>Include a symbol?</p>
      <input type="checkbox" name="symbolGen" value="Symbol" id="symbolGen"> <br><br>
      <input type="submit" value="Generate new" class="submit"> <br><br>
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
