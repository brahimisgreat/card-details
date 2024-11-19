<?php 
  if (isset($_POST['submit'])) {
    $name = $_POST["cardName"];
    $cardNumber = $_POST["cardNumber"];
    
    if (empty($name)) {
      $nameErrMessage = "Name is required";
      $nameClass = "border-2 border-red-500";
    } elseif( empty($cardNumber)){
        $cardNumberErrMessage = "Card Number is required";
        $cardNumberClass = "border-2 border-red-500";
    } elseif( !is_numeric($cardNumber)){
        $cardNumberErrMessage = "Wrong format, numbers only";
        $cardNumberClass = "border-2 border-red-500";
    } elseif( strlen($cardNumber) < 16 || strlen($cardNumber) > 16){
        $cardNumberErrMessage = "Card Number must be 16 digits";
        $cardNumberClass = "border-2 border-red-500";
    } else {
        echo "Card Holder Name: $name <br>";
        echo "Card Number: $cardNumber <br>";
    }
  }