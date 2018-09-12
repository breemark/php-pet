<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php require 'php/virus.php'; ?>
    <?php require 'php/main.php'; ?>
    <title><?php echo $virus->name.".exe";?></title>
    <!-- <link rel="stylesheet" href="fonts/PixelForce.ttf"> -->
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <div class="container">
      <header>
          <h1><?php echo $virus->name.".exe"; ?></h1>
      </header>
      <div class="virus">
        <div class="model">
          <img src="img/spark_happy.gif">

        </div><!--ENd of Model-->
      </div><!--End of Virus-->
      <div class="info">
        <p>Type: <?php echo "Bot"; ?></p>
        <p>Level: <?php echo $virus->level; ?></p>
        <p>Age: 0</p>
        <p>Feeling: null </p>
        <div class="dialog">
        <?php //echo $virus->name." is happy"; ?>
        </div><!--ENd of Dialog-->
        <br>
        <div class="panel">
          <button type="button" name="button">Play</button>
          <br>
          <button type="button" name="button">Feed</button>
          <br>
          <button type="button" name="button">Evolve</button>
        </div><!--End of Panel-->
      </div><!--End of Info-->
    </div><!--End of Container-->
  </body>
</html>
