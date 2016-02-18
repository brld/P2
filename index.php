<!DOCTYPE html>
<html>
  <head>

    <title>xkcd Password Generator</title>
    <?php require "logic.php"; ?>
    <link rel="stylesheet" href="" type="text/css">
    <form action="index.php" method="GET">
      <input type="text" name="Number of words"> <br>
      <input type="submit" value="Generate new">
    </form>

  </head>
  <body>

    <?php foreach ($password as $place => $word) { ?>
        <?php $echoed = 0; ?>
        <?php echo $word; ?>
        <?php $echoed++; ?>
        <?php if ($echoed < 4) {
          echo "-";
        }
        ?>
    <?php } ?>


  </body>
</html>
