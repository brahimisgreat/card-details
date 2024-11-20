<?php 
  if (isset($_POST['submit'])) {
    
    //form input values
    $name = $_POST["cardName"];
    $cardNumber = $_POST["cardNumber"];
    $month = $_POST["month"];
    $year = $_POST["year"];
    $cvc = $_POST["cvc"];
    
    //form validation
    //error messages
    //error classes
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
    } elseif (empty($month)) {
        $monthErrMessage = "Month is required";
        $monthClass = "border-2 border-red-500";
        } elseif( !is_numeric($month)){
            $monthErrMessage = "Wrong format, numbers only";
            $monthClass = "border-2 border-red-500";
        } elseif( strlen($month) < 2 || strlen($month) > 2){
            $monthErrMessage = "Month must be 2 digits";
            $monthClass = "border-2 border-red-500";
        } elseif (empty($year)) {
        $yearErrMessage = "Year is required";
        $yearClass = "border-2 border-red-500";
        } elseif( !is_numeric($year)){
            $yearErrMessage = "Wrong format, numbers only";
            $yearClass = "border-2 border-red-500";
        } elseif( strlen($year) < 2 || strlen($year) > 2){
            $yearErrMessage = "Year must be 2 digits";
            $yearClass = "border-2 border-red-500";
        } elseif (empty($cvc)) {
        $cvcErrMessage = "CVC is required";
        $cvcClass = "border-2 border-red-500";
        } elseif( !is_numeric($cvc)){
            $cvcErrMessage = "Wrong format, numbers only";
            $cvcClass = "border-2 border-red-500";
        } elseif( strlen($cvc) < 3 || strlen($cvc) > 3){
            $cvcErrMessage = "CVC must be 3 digits";
            $cvcClass = "border-2 border-red-500";
    }else{
        require_once 'database.php';
        $sql = "INSERT INTO cards (Name, cardNumber, expMonth, expYear, Cvc) VALUES ('$name', '$cardNumber', '$month', '$year', '$cvc')";
        $stmt = mysqli_stmt_init($conn);
        $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
        if($prepareStmt){
            mysqli_stmt_execute($stmt);
            echo "Data inserted successfully";
    }

}
}
?>