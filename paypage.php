

<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="styleforhomenavbar.css">
    <link rel="stylesheet" type="text/css" href="styleforpaypage.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>



    <style>
.payment-box {
    max-width: 700px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border: 2px solid #3498db;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .cart-box {
            max-width: 400px; /* Adjust the max-width of the cart box */
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border: 2px solid #3498db;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

      
        </style>
</head>


<body>
    <header>

            <!-- Navigation bar -->
        <div class = "navigationbar">
            <div clas = "logo">
                <a href = "homepage.php"><img src = "icons/logo.jpeg" alt = "logo" width= "40%"></a>
            </div>
            <div class = "pages">
                    <div class = "dropdownbtn">
                        <a href = "store.php">
                        <button class = "buttonsnav" >STORE</button>
                        </a>
                        <div class = "dropdown-content">
                            <a href = "categories.php" class = "buttosnav">CATEGORIES</a>
                            
                        </div>
                    </div>
                    
                
            </div>

            <div class = "pages">
                    <div class = "dropdownbtn">
                        <a href = "account.php">
                        <button class = "buttonsnav" >ACCOUNT</button>
                        </a>
                        
                    </div>
                    
                
            </div>

            <div class = "pages">
                    <div class = "dropdownbtn">
                        <a href = "community.php">
                        <button class = "buttonsnav" >COMMUNITY</button>
                        </a>
                        <div class = "dropdown-content">
                            <a href = "news.php" class = "buttosnav">NEWS</a>
                            
                        </div>
                    </div>
                    
                
            </div>

            

            <div class = "pages">
                    <div class = "dropdownbtn">
                        <a href = "support.php">
                        <button class = "buttonsnav" >SUPPORT</button>
                        </a>
                        
                    </div>
                    
                
            </div>

        </div>


                <!--Second navigation bar -->
        
        <div class = "secondbarcontent">
            <div class = "secondbar">
                <div class = "firstcolumnempty">
                    
                </div>

                <div class = "secondbar-content">

                    <div class = "scndbar1">
                            <ul>

                            <li><a href = "news.php" class = "secondbarpage">News</a></li>
                          
                            
                            <li><a href = "categories.php" class = "secondbarpage">Categories</a></i>
                        
                        
        

                            
                            </ul><br>
                            

                    </div>
                    
                   
                </div>
</div>
</div>
    

    </header>
    <br><br>
    

     
   
    <?php
session_start();
include("connectiondb.php"); // Include the database connection file

// ini_set('SMTP', 'smtp.mailtrap.io');
// ini_set('smtp_port', '2525');
// ini_set('sendmail_from', 'teodoarcotirlet270@gmail.com');

// ini_set('smtp_user', 'teodoracotirlet');
// ini_set('smtp_pass', '12345678');

// Retrieve the cart from the session
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

// Calculate the total amount
$totalAmount = 0;




// $firstName = $lastName = $email = $address = $city = '';


// if (isset($_SESSION['id_account'])) {
//     $userId = $_SESSION['id_account'];

//     $userQuery = "SELECT * FROM accounts WHERE id_account = $userId";
//     $userResult = $conn->query($userQuery);

//     while ($row = mysqli_fetch_assoc($userResult)) {
        
//         echo $row['first_name'] . ", ";
//         echo $row['last_name'] . ", ";
//         echo $row['email'] . ", ";
//         echo $row['address'] . ", ";
//         echo $row['city'];


//         $firstName = $row['first_name'];
//         $lastName = $row['last_name'];
//         $email = $row['email'];
//         $address = $row['address'];
//         $city = $row['city'];
//     }
// }



// Check if $cart is set and not null before iterating
if (is_array($cart)) {
    foreach ($cart as $item) {
        // Check if $item is an array and if it has the required keys
        if (is_array($item) && isset($item['id_game']) && isset($item['quantity'])) {
            // Fetch game details from the database
            $gameId = $item['id_game'];
            $quantity = $item['quantity'];

            $gameQuery = "SELECT * FROM games WHERE id_game = $gameId";
            $gameResult = $conn->query($gameQuery);

            if ($gameResult->num_rows > 0) {
                $gameData = $gameResult->fetch_assoc();
                $totalAmount += $gameData['price'] * $quantity;
            }
        }
    }
}

// Handle the payment and order placement
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect user information
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];

    // Collect card-related information
    $cardholderName = $_POST['cardholder_name'];
    $creditCardNumber = $_POST['credit_card_number'];
    $cardExpDate = $_POST['card_exp_date'];
    $cardCVV = $_POST['card_cvv'];

    // Check if the user has agreed to terms and conditions
    $agreeToTerms = isset($_POST['agree_to_terms']) ? 1 : 0;

    // Check if $cart is set and not null before encoding
    $productsData = is_array($cart) ? json_encode($cart) : '';

    // Simulate card payment (You should replace this with a secure payment gateway)
    $cardPaymentSuccess = true; // Set to true for simulation purposes

    // echo "Card Payment Success: " . ($cardPaymentSuccess ? 'true' : 'false');


    if ($cardPaymentSuccess) {
        // Store the order in the database
        $sql = "INSERT INTO orders (id_account,id_game,orderdate, total_amount, cardholder_name, credit_card_number, card_exp_date, card_cvv, agree_to_terms) 
                VALUES (1,1,'01.01.2023', $totalAmount, '$cardholderName', '$creditCardNumber', '$cardExpDate', '$cardCVV', $agreeToTerms)";

                // if ($conn->query($sql) === TRUE) {
                    
                //     $to = $email; 
                //     $subject = "Order Confirmation";
                //     $message = "Thank you for your purchase! Your order details: ...";
                //     $headers = "From: teodoracotirlet270@gmail.com";
        
                    
                //     mail($to, $subject, $message, $headers);
        
        if ($conn->query($sql) === TRUE) {
            // Clear the cart after successful order placement
            unset($_SESSION['cart']);
            $paymentStatus = 'success';
        } else {
            $paymentStatus = 'failed';
        }
    } else {
        $paymentStatus = 'failed';
    }
}

?>


    <title>Cart - Payment Page</title>
    
        <center>
    <div class="cart-box">
    <h2>Your Shopping Cart</h2>


<?php

// echo $_SESSION["id_account"]."~~~";
if (empty($cart)) {
    echo "<p>Your cart is empty.</p>";
} else {
    // Display the cart contents
    foreach ($cart as $item) {
        // Check if $item is an array and if it has the required keys
        if (is_array($item) && isset($item['id_game'])) {
            // Fetch game details from the database
            $gameId = $item['id_game'];

            $gameQuery = "SELECT * FROM games WHERE id_game = $gameId";
            $gameResult = $conn->query($gameQuery);

            if ($gameResult && $gameResult->num_rows > 0) {
                $gameData = $gameResult->fetch_assoc();
                $totalAmount += $gameData['price']; // Add the game price to the total

                echo "<p>{$gameData['name_game']} - Price: {$gameData['price']}</p>";
            } else {
                echo "<p>Invalid game</p>";
            }
        }
    }

    // Display the total amount
    echo "<p>Total Amount: $totalAmount</p>";
}



?>
<form method="post" action="empty_cart.php">
    <input type="submit" name="empty_cart" value="Empty Cart">
</form>

</div>  

    <?php
    // Display the payment form
    if (empty($cart)) {
        echo "<p>Your cart is empty.</p>";
    } else {
        if (empty($paymentStatus)) {
            echo "

            <div class='payment-box'>
            <h2>Payment Information</h2>
            <form method='post'>


           

                <label for='first_name'>First Name:</label>
                <input type='text' id='first_name' name='first_name' required>
                <br>
                <label for='last_name'>Last Name:</label>
                <input type='text' id='last_name' name='last_name'  required>
                <br>
                <label for='email'>Email:</label>
                <input type='email' id='email' name='email' required>
                <br>
                <label for='address'>Address:</label>
                <input type='text' id='address' name='address'required>
                <br>
                <label for='city'>City:</label>
                <input type='text' id='city' name='city'required>
                <br>

                <h3>Card Information</h3>
                <label for='cardholder_name'>Name on Card:</label>
                <input type='text' id='cardholder_name' name='cardholder_name' required>
                <br>
                <label for='credit_card_number'>Credit Card Number:</label>
                <input type='text' id='credit_card_number' name='credit_card_number' required>
                <br>
                <label for='card_exp_date'>Expiration Date:</label>
                <input type='text' id='card_exp_date' name='card_exp_date' placeholder='MM/YYYY' required>
                <br>
                <label for='card_cvv'>CVV:</label>
                <input type='text' id='card_cvv' name='card_cvv' required>
                <br>
                <label>
                    <input type='checkbox' name='agree_to_terms' required>
                    I agree with terms and conditions
                </label>
                <br>
                <input type='submit' value='Submit Payment'>
            </form>
            </div>
            ";
        } else {
            // Display payment status
            echo "<p>Payment Status: $paymentStatus</p>";
        }
    }


    ?>






  </center>

</body>
</html>


  