<?php 
    $errCardNumber = "form-control";
    $errMonth;
    $errYear;
    $errCvc;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="./stuff.css">

</head>
<body>
<?php 
    if(isset($_POST['submit'])) {
        $cardName = $_POST['cardName'];
        $cardNumber = $_POST['cardNumber'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $cvc = $_POST['cvc'];
    }

?>

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">CARDHOLDER NAME</label>
    <input type="text" class=<?= $errCardNumber ?> id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>