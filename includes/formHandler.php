<?php
    
if ($_SERVER['REQUEST_METHOD'] == "POST") {

//htmlspecialchars() function converts special characters to HTML entities aka sanitizing the input
//This is to prevent XSS attacks
// use this evertime you are getting input from the user
    $name = htmlspecialchars($_POST['name']);
    $CardNumber = htmlspecialchars($_POST['cardNumber']);}
    $month = htmlspecialchars($_POST['month']);
    $year = htmlspecialchars($_POST['year']);
    $cvc = htmlspecialchars($_POST['cvc']);

    echo $name;