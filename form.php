<?php

$cardholderName = $_POST['cardholderName'];
$cardNumber = $_POST['cardNumber'];
$month = $_POST['month'];
$year = $_POST['year'];
$cvc = $_POST['cvc'];

if (empty($cardholderName) || empty($cardNumber) || empty($month) || empty($year) || empty($cvc)) {
    echo "Please fill all the fields";
    return;
}
