<?php
// Add your database connection code if not already included
include('connectiondb.php');

// Check if the form is submitted to empty the cart
if (isset($_POST['empty_cart'])) {
    // Assuming you have a table named 'cart' to store cart items
    $sql = "DELETE FROM cart";
    
    if (mysqli_query($conn, $sql)) {
        echo "Cart emptied successfully.";
    } else {
        echo "Error emptying cart: " . mysqli_error($conn);
    }
}

// Redirect back to the paypage.php after emptying the cart
header("Location: paypage.php");
exit();
?>

