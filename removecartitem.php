<?php
session_start();

if (isset($_GET['id_game'])) {
  $id_game = $_GET['id_game'];

  unset($_SESSION['cart'][$proid]);
  header("location: paypage.php");
}

;?>