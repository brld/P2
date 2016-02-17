<!DOCTYPE html>
<html>
  <head>

    <title>xkcd Password Generator</title>
    <?php require "logic.php"; ?>
    <link rel="stylesheet" href="" type="text/css">
    <form action="index.php" method="GET">
      <input type="submit" value="Generate new">
    </form>

  </head>
  <body>

    <?php foreach ($password as $word) { ?>

        <?php echo $word ?>
        <?php echo "-" ?>
    <?php } ?>


  </body>
</html>
