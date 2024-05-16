<?php
session_start();
unset($_SESSION["id_account"]);
unset($_SESSION["profile_name"]);
header("Location:accountlogin.php");
?>
<?php
session_start();
session_unset();
session_destroy();
header("Location: accountlogin.php");
?>
