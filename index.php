<!DOCTYPE html>
<html>
  <head>

    <?php require "logic.php"; ?>
    <title>xkcd Password Generator</title>
    <link rel="stylesheet" href="main.css" type="text/css">

  </head>
  <body>
    <h1>Xkcd Password Generator</h1>
    <form action="logic.php" method="GET">
      Number of words (Min 2, Max 9): <br>
      <input type="text" name="inputWords" maxlength="1" id="inputWords"> <br>
      Include a number? <br>
      <input type="checkbox" name="numberGen" value="Number" id="numberGen"> <br>
      Include a symbol? <br>
      <input type="checkbox" name="symbolGen" value="Symbol" id="symbolGen"> <br>
      <input type="submit" value="Generate new">
    </form>
  </body>
</html>
