<?php
session_start();

// Check if the required data is provided
if (isset($_POST['id_game'], $_POST['name_game'], $_POST['price'])) {
    // Get the data from the POST request
    $id_game = $_POST['id_game'];
    $name_game = $_POST['name_game'];
    $price = $_POST['price'];

    // Create a cart item
    $cartItem = array(
        'id_game' => $id_game,
        'name_game' => $name_game,
        'price' => $price,
    );

    // Initialize the cart if not already set
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Add the item to the cart
    $_SESSION['cart'][] = $cartItem;

    echo "Item added to the cart successfully!";
} else {
    echo "Invalid request!";
}
?>
