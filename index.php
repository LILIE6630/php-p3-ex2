<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>PHP ex2</title>
</head>
<body>
  <?php
  $number1 = 0;
  $number2 = rand (1,100);
  while ($number1 <= 20) {
    ?>
    <p><?= $number1 * $number2 ?></p>
    <?php
    $number1 ++;
  }
  ?>
</body>
</html>
