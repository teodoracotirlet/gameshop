<?php
session_start();

unset($_SESSION['cart']);

header("location: paypage.php");