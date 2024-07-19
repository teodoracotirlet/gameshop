<?php
session_start();
include("connectiondb.php"); 

$id_account = isset($_SESSION['id_account']) ? $_SESSION['id_account'] : null;
$id_game = isset($_SESSION['id_game']) ? $_SESSION['id_game'] : null;

$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

$totalAmount = 0;
if (is_array($cart)) {
    foreach ($cart as $item) {
        if (is_array($item) && isset($item['id_game'])) {
            $gameId = $item['id_game'];

            $gameQuery = "SELECT * FROM games WHERE id_game = $gameId";
            $gameResult = $conn->query($gameQuery);

            if ($gameResult->num_rows > 0) {
                $gameData = $gameResult->fetch_assoc();
                $totalAmount += $gameData['price'];
            }
        }
    }
}
?>

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
            max-width: 400px; 
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
    

     
   <center>
    


    <div class="cart-box">
        <h2>Your Shopping Cart</h2>
        <?php
        if (empty($cart) || !is_array($cart)) {
            echo "<p>Your cart is empty.</p>";
        } else {
            foreach ($cart as $item) {
                if (is_array($item) && isset($item['id_game'])) {
                    $gameId = $item['id_game'];
                    $gameQuery = "SELECT * FROM games WHERE id_game = $gameId";
                    $gameResult = $conn->query($gameQuery);
                    if ($gameResult && $gameResult->num_rows > 0) {
                        $gameData = $gameResult->fetch_assoc();
                        echo "<p>{$gameData['name_game']} - Price: {$gameData['price']}</p>";
                    } else {
                        echo "<p>Invalid game</p>";
                    }
                }
            }
            echo "<p>Total Amount: $totalAmount</p>";
        }
        ?>
        <form method="post" action="empty_cart.php">
            <input type="submit" name="empty_cart" value="Empty Cart">
        </form>
    </div>  

    <?php
    if (!empty($cart)) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $firstName = $_POST['first_name'];
            $lastName = $_POST['last_name'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $city = $_POST['city'];
            $cardholderName = $_POST['cardholder_name'];
            $creditCardNumber = $_POST['credit_card_number'];
            $cardExpDate = $_POST['card_exp_date'];
            $cardCVV = $_POST['card_cvv'];
            $agreeToTerms = isset($_POST['agree_to_terms']) ? 1 : 0;
            $productsData = is_array($cart) ? json_encode($cart) : '';

            $cardPaymentSuccess = true;

            if ($cardPaymentSuccess) {
                $sql = "INSERT INTO orders (id_account, id_game, orderdate, total_amount, cardholder_name, credit_card_number, card_exp_date, card_cvv, agree_to_terms) 
                        VALUES ('$id_account', '" . $cart[0]['id_game'] . "', NOW(), '$totalAmount', '$cardholderName', '$creditCardNumber', '$cardExpDate', '$cardCVV', $agreeToTerms)";
                if ($conn->query($sql) === TRUE) {
                    $id_order = $conn->insert_id;
                    foreach ($cart as $item) {
                        $gameId = $item['id_game'];
                        $name_game = $item['name_game'];
                        $insertItemQuery = "INSERT INTO order_items (id_order, id_game, name_game) 
                                            VALUES ('$id_order', '$gameId', '$name_game')";
                        if (!$conn->query($insertItemQuery)) {
                            echo "Error: " . $insertItemQuery . "<br>" . $conn->error;
                        }
                    }
                    unset($_SESSION['cart']);
                    $paymentStatus = 'success';
                } else {
                    $paymentStatus = 'failed';
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                $paymentStatus = 'failed';
            }
        }

        if (empty($paymentStatus)) {
            echo "
            <div class='payment-box'>
                <h2>Payment Information</h2>
                <form method='post'>
                    <input type='hidden' name='id_account' value='$id_account'>
                    <input type='hidden' name='id_game' value='" . (isset($cart[0]['id_game']) ? $cart[0]['id_game'] : '') . "'>
                    <label for='first_name'>First Name:</label>
                    <input type='text' id='first_name' name='first_name' required><br>
                    <label for='last_name'>Last Name:</label>
                    <input type='text' id='last_name' name='last_name' required><br>
                    <label for='email'>Email:</label>
                    <input type='email' id='email' name='email' required><br>
                    <label for='address'>Address:</label>
                    <input type='text' id='address' name='address' required><br>
                    <label for='city'>City:</label>
                    <input type='text' id='city' name='city' required><br>
                    <h3>Card Information</h3>
                    <label for='cardholder_name'>Name on Card:</label>
                    <input type='text' id='cardholder_name' name='cardholder_name' required><br>
                    <label for='credit_card_number'>Credit Card Number:</label>
                    <input type='text' id='credit_card_number' name='credit_card_number' required><br>
                    <label for='card_exp_date'>Expiration Date:</label>
                    <input type='text' id='card_exp_date' name='card_exp_date' placeholder='MM/YYYY' required><br>
                    <label for='card_cvv'>CVV:</label>
                    <input type='text' id='card_cvv' name='card_cvv' required><br>
                    <label>
                        <input type='checkbox' name='agree_to_terms' required>
                        I agree with terms and conditions
                    </label><br>
                    <input type='submit' value='Submit Payment'>
                </form>
            </div>";
        } else {
            echo "<p>Payment Status: $paymentStatus</p>";
        }
    }
    ?>




  </center>

</body>
</html>


  