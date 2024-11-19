<?php 
  if (isset($_POST['submit'])) {
    $name = $_POST["cardName"];
    $cardNumber = $_POST["cardNumber"];
    
    if (empty($name)) {
      $nameErrMessage = "Name is required";
      echo $nameErrMessage;
    } elseif( empty($cardNumber)){
        $cardNumberErrMessage = "Card Number is required";
    } elseif( !is_numeric($cardNumber)){
        $cardNumberErrMessage = "Wrong format, numbers only";
    } elseif( strlen($cardNumber) < 16 || strlen($cardNumber) > 16){
        $cardNumberErrMessage = "Card Number must be 16 digits";
    } else {
        echo "Card Holder Name: $name <br>";
        echo "Card Number: $cardNumber <br>";
    }
  }