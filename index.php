<?php
$nameErrMessage = null;
$cardNumberErrMessage = null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php include 'includes/formHandler.php';
  ?>
  <form action="" method="post">
    <div>
      <label for="cardName">CardHolder Name:</label>
      <input type="text" name="cardName" id="cardName">
      <p><?php echo $nameErrMessage; ?></p>
    </div>
    <div>
      <label for="cardNumber">Card Number</label>
      <input type="number" name="cardNumber" id="cardNumber">
      <p><?php echo $cardNumberErrMessage; ?></p>
    </div>
    <input type="submit" name="submit">
  </form>

</body>

</html>