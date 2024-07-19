


<?php
session_start();
include("connectiondb.php");

if (isset($_POST['id_game'], $_POST['name_game'], $_POST['price'])) {
    $id_game = $_POST['id_game'];
    $name_game = $_POST['name_game'];
    $price = $_POST['price'];

    $cartItem = array(
        'id_game' => $id_game,
        'name_game' => $name_game,
        'price' => $price,
    );

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    $_SESSION['cart'][] = $cartItem;

    $_SESSION['id_game'] = $id_game;

    echo "Item added to the cart successfully!";
} else {
    echo "Invalid request!";
}
?>


