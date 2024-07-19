
<?php
session_start();
include('connectiondb.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['empty_cart'])) {
    
    if (isset($_SESSION['cart'])) {
        
        foreach ($_SESSION['cart'] as $item) {
            $gameId = $item['id_game'];
            $sql = "DELETE FROM cart WHERE id_game = $gameId";

            if (!mysqli_query($conn, $sql)) {
                echo "Error deleting item from cart: " . mysqli_error($conn);
            }
        }

      
        unset($_SESSION['cart']);
        echo "Cart emptied successfully.";
    } else {
        echo "The cart is already empty.";
    }
} else {
    echo "Invalid request";
}

header("Location: paypage.php");
exit();
?>


