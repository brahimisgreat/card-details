
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex  flex-col items-center ">
<?php 

?>


    <div class="absolute w-full top-0 ">
        <img class="img " src="./images/bg-main-mobile.png" alt="colorful background image">
    </div>
    

    <div class="w-11/12  relative  h-64 top-20 z-10">
        <img src="./images/bg-card-back.png" class="frontCard w-72 absolute right-0" alt="image of fake card">
        <img src="./images/bg-card-front.png" class="backCard w-72 absolute bottom-0" alt="image of fake card">
    </div>


    <form action="index.php" method="post" class="bg-white relative top-20 w-11/12 px-8 pt-6 pb-8 mb-4">
    <?php 
           if(isset($_POST["confirm"])){
               $name = $_POST["name"];
               $cardNumber = $_POST["cardNumber"];
               $month = $_POST["month"];
               $year = $_POST["year"];
               $cvc = $_POST["cvc"];

                if(empty($name) || empty($cardNumber) || empty($month) || empty($year) || empty($cvc)){
                    echo "Please fill all the fields";
                }
                if(!is_numeric($cardNumber) || !is_numeric($cvc)){
                    echo "Please enter a valid card number or cvc";
                }
            }
        ?>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
        CARDHOLDER NAME
      </label>
      <input required class="shadow appearance-none border rounded w-full  h-14 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name"  id="username" type="text" placeholder="e.g Brahim Coulibaly">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="number">
        CARD NUMBER 
      </label>
      <input required class="shadow appearance-none border rounded w-full  h-14 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="cardNumber" id="username" type="text" placeholder="e.g 1234 5678 9123 0000" maxlength="16" minlength="16" >
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
            EXP.DATE (MM/YY) CVC
      </label>
      <div class="flex gap-3">
          <input required class="shadow  appearance-none border rounded  h-14 w-1/2 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="month"  id="username" type="text" placeholder="MM" req>
          <input required class="shadow appearance-none border rounded  h-14 w-1/2 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="year"  id="username" type="text" placeholder="YY">
          <input required class="shadow appearance-none border rounded  h-14 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="cvc"  id="username" type="text" placeholder="e.g 123">
        </div>
    </div>
    
    <div class="flex items-center justify-between">
      <button  name="confirm" class="bg-violet-950 hover:bg-violet-700 w-full rounded-lg h-14 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        confirm
      </button>
    </div>
  </form>

   
</body>
</html>