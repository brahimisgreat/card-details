<?php 
  $errCardNumber = "form-control";
  $errMonth;
  $errYear;
  $errCvc;
  $errName = "form-control";
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

        if(empty($cardName)) {
          $errName = "errName ";
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
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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