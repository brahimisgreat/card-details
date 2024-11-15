<?php
$nameErrMessage = "";
$name = "";
$numberErrMessage = "";
$expMonthErrMessage = "";
$month = "";
$expYearErrMessage = "";
$year = null;
$cvc= null;
$cvcErrMessage = "";
$inputNameRed = "";
$inputNumberRed = "";
$inputMonthRed = "";
$inputYearRed = "";
$inputCvcRed = "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="stuff.css">
  <title>Document</title>
</head>

<body>
  <main>
    <form action="includes/formHandler.php" method="post">
      <?php


        // if (empty($name)) {
        //   $nameErrMessage = "Name is required";
        //   $inputNameRed = "border border-red-500";
        // } else if (empty($CardNumber)) {
        //   $numberErrMessage = "Card Number is required";
        //   $inputNumberRed = "border border-red-500";
        // } else if (strlen($CardNumber) < 16 || strlen($CardNumber) > 16) {
        //   $numberErrMessage = "Card Number must be 16 digits";
        //   $inputNumberRed = "border border-red-500";
        // } else if (!is_numeric($CardNumber)) {
        //   $numberErrMessage = "Card Number must be a number";
        //   $inputNumberRed = "border border-red-500";
        // } else if (empty($month)) {
        //   $expMonthErrMessage = "Can't be blank";
        //   $inputMonthRed = "border border-red-500";
        // } else if (strlen($month) < 2 || strlen($month) > 2) {
        //   $expMonthErrMessage = "Month must be 2 digits";
        //   $inputMonthRed = "border border-red-500";
        // } else if (!is_numeric($month)) {
        //   $expMonthErrMessage = "Month must be a number";
        //   $inputMonthRed = "border border-red-500";
        // } else if (empty($year)) {
        //   $expYearErrMessage = "Can't be blank";
        //   $inputYearRed = "border border-red-500";
        // } else if (strlen($year) < 2 || strlen($year) > 2) {
        //   $expYearErrMessage = "Year must be 2 digits";
        //   $inputYearRed = "border border-red-500";
        // } else if (!is_numeric($year)) {
        //   $expYearErrMessage = "Year must be a number";
        //   $inputYearRed = "border border-red-500";
        // } else if (empty($cvc)) {
        //   $cvcErrMessage = "CVC is required";
        //   $inputCvcRed = "border border-red-500";
        // } else if (strlen($cvc) < 3 || strlen($cvc) > 3) {
        //   $cvcErrMessage = "CVC must be 3 digits";
        //   $inputCvcRed = "border border-red-500";
        // } else if (!is_numeric($cvc)) {
        //   $cvcErrMessage = "CVC must be a number";
        //   $inputCvcRed = "border border-red-500";
        // }
      


      ?>
      <label for="fname">CARDHOLDER NAME</label><br>
      <input type="text"  name="name"  class="<?php echo $inputNameRed; ?>"/>
      <p class="text-red-700"><?= $nameErrMessage ?></p>

      <label for="">CARD NUMMBER</label>
      <input type="number" name="cardNumber"   placeholder="e.g jane Appleseed" class="<?php echo $inputNumberRed; ?>">
      <p class="text-red-700"><?= $numberErrMessage ?></p>

      <div class="flex flex-col">
        <label for="exp">EXP. DATE (MM?YY) CVC</label>

        <div>
          <div class="flex flex-col">
            <input type="number"  maxlength="2" minlength="2" name="month" placeholder="MM" class="<?php echo $inputMonthRed; ?>">
            <p class="text-red-500"><?= $expMonthErrMessage ?></p>
          </div>

          <div class="flex flex-col">
            <input type="text" name="year" maxlength="2" minlength="2" placeholder="YY" class="<?php echo $inputYearRed; ?>">
            <p class="text-red-500"><?= $expYearErrMessage ?></p>
          </div>

          <div class="flex flex-col">
            <input type="number" name="cvc" maxlength="3" minlength="3" placeholder="YY" class="<?php echo $inputCvcRed; ?>">
            <p class="text-red-500"><?= $cvcErrMessage ?></p>
          </div>
        </div>
      </div>

      <input type="submit" name="submit">
    </form>
  </main>
</body>

</html>