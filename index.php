<?php
$nameErrMessage = null;
$cardNumberErrMessage = null;

$nameClass = null;
$cardNumberClass = null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>

  <title>Document</title>
</head>

<body>
  <?php include 'includes/formHandler.php'; ?>
  <form action="" method="post">
    <div>
      <label for="cardName">CardHolder Name:</label>
      <input class="<?php echo $nameClass ?>" type="text" name="cardName" id="cardName">
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
        <input class="<?= $cardNumberClass ?>" type="number" name="cardNumber" id="cardNumber">
        <p class="text-red-500"><?php echo $cardNumberErrMessage; ?></p>
      </div>
    </div>
    <input type="submit" name="submit">
  </form>

</body>

</html>