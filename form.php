<?php

$cardNumber = $_POST["cardNumber"];
$cardName = $_POST["name"];
$cardMonth = $_POST["month"];
$cardYear = $_POST["year"];
$cardCvc = $_POST["cvc"];

if(empty($cardNumber) || empty($cardName) || empty($cardMonth) || empty($cardYear) || empty($cardCvc)){
    echo "Please fill all the fields";
}else{
    if(!is_numeric($cardNumber) || !is_numeric($cardCvc)){
        echo "Please enter a valid card number or cvc";
    }else{
        echo "Payment successful";
    }
}
