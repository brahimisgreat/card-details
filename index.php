<?php
$nameErrMessage = null;
$cardNumberErrMessage = null;
$monthErrMessage = null;
$yearErrMessage = null;
$cvcErrMessage = null;

//variables to switch classes border-red-500
$nameClass = null;
$cardNumberClass = null;
$monthClass = null;
$yearClass = null;
$cvcClass = null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="styles.css">

  <title>Document</title>
</head>

<body>
  <?php include 'includes/formHandler.php'; ?>
  <form action="" method="post">
    <div>
      <label for="cardName">CardHolder Name:</label>
      <input type="text" name="cardName" id="cardName">
      <p class="text-red-500"><?php echo $nameErrMessage; ?></p>
    </div>

    <div>
      <label for="cardNumber">CARD NUMBER</label>
      <input class="<?= $cardNumberClass ?>" type="number" name="cardNumber" id="cardNumber">
      <p class="text-red-500"><?php echo $cardNumberErrMessage; ?></p>
    </div>

    <div>
      <label for="cardNumber">EXP .DATE (MM/YY)</label>

      <div>
        <div>
          <input class="<?= $monthClass ?>" type="number" name="month">
          <p class="text-red-500"><?php echo $monthErrMessage; ?></p>
        </div>

        <div>
          <input class="<?= $yearClass ?>" type="number" name="year">
          <p class="text-red-500"><?php echo $yearClass; ?></p>
        </div>

        <div>
          <input class="<?= $cvcClass ?>" type="number" name="cvc">
          <p class="text-red-500"><?php echo $cvcErrMessage; ?></p>
        </div>
      </div>
    </div>

    <input type="submit" name="submit">
  </form>
<a href="./includes/database.php">go here</a>
</body>

</html>