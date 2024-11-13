<?php 
  $errCardNumber = "form-control";
  $errMonthMessage;
  $errYearMessage;
  $errCvcMessage;
  $errName = "form-control";
  $errCardNumberMessage= null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="stuff.css">
</head>

<body>
  <?php 
    if(isset($_POST['submit'])) {
        $cardName = $_POST['cardName'];
        $cardNumber = $_POST['cardNumber'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $cvc = $_POST['cvc'];

        if(strlen($cardNumber) == 0) {
          $errCardNumberMessage = "Card number cannot be blank";
        }else if  (!is_numeric($cardNumber))  {
          $errCardNumberMessage = "wrong format, numbers only";
        }else if (strlen($cardNumber) < 16 || strlen($cardNumber) > 16) {
          $errCardNumberMessage = "Card number cannot be blank";


          

        
      
    }
  }
      
    
  ?>

  <form action="index.php" method="post"> 
    <div class="form-group">
      <label for="exampleInputEmail1">CARDHOLDER NAME</label>
      <input type="text" class="form-control" id=<?php echo $errName ?> name="cardName" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="e.g jane appleseed">
      <small id="emailHelp" class="form-text text-muted"><?=  $errCardNumber  ?></small>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">CARD NUMBER</label>
      <input type="text" name="cardNumber" class="form-control" id=<?= $errCardNumber ?> placeholder="Password">
      <small id="emailHelp" class="form-text text-muted"><?=  $errCardNumberMessage  ?></small>
    </div>

    <div class="dad form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="number" class="form-control"  placeholder="MM">
      <input type="number" class="form-control"  placeholder="YY">
      <input type="number" class="form-control"  placeholder="e.g 123">
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</body>
</html>