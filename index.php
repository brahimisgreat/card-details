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
$cvcClass = "w-28";
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

<body class="relative">
  <div class="bgImage"></div>

  <div class="absolute top-8 right-14 cardContainer"> 
      <img class="absolute bottom-0 z-10 " src="./images/bg-card-front.png" alt="">    
      <img  class="absolute right-0" src="./images/bg-card-back.png" alt="">    

  </div>


  <?php include 'includes/formHandler.php'; ?>

  <form action="" method="post" >
    <div class="flex flex-col">
      <label for="cardName">CARDHOLDER NAME</label>
      <input type="text" name="cardName" id="cardName" placeholder="e.g Jane Appleseed">
      <p class="text-red-500"><?php echo $nameErrMessage; ?></p>
    </div>

    <div class="flex flex-col">
      <label for="cardNumber">CARD NUMBER</label>
      <input class="<?= $cardNumberClass ?>" type="number" name="cardNumber" id="cardNumber" placeholder="e.g 1234 5678 9123 0000">
      <p class="text-red-500"><?php echo $cardNumberErrMessage; ?></p>
    </div>

    <div >
      <label for="cardNumber">EXP .DATE (MM/YY)</label>

      <div class="aa flex max-w-full gap-2 ">
        <div class="flex flex-col">
          <input class="<?= $monthClass ?>" type="number" name="month" placeholder="MM">
          <p class="text-red-500 w-full  text-xs"><?php echo $monthErrMessage; ?></p>
        </div>

        <div class="aa flex flex-col">
          <input class="<?= $yearClass ?>" type="number" name="year" placeholder="YY">
          <p class="text-red-500 w-full  text-xs"><?php echo $yearClass; ?></p>
        </div>

        <div class="aa flex flex-col w-28">
          <input  class="<?= $cvcClass ?>" type="number" name="cvc" placeholder="e.g. 123">
          <p class="text-red-500 w-1/2 text-xs"><?php echo $cvcErrMessage; ?></p>
        </div>
      </div>
    </div>

    <input class="w-full button" type="submit" name="submit" value="Confirm">
  </form>
</body>

</html>