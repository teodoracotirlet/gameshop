<!-- <?php
if (isset($_GET["id_account"]) && !empty($_GET["id_account"])) {

    require_once "config.php";
    $sql = "DELETE FROM accounts WHERE id_account = ?";

    if ($stmt = $link->prepare($sql)) {
        $stmt->bind_param("i", $_GET["id_account"]);
        if ($stmt->execute()) {
            header("location: users.php");
            exit();
        } else {
            echo "Error! Please try again later.";
        }
    }
    $stmt->close();
    $mysqli->close();
} else {
    echo "Error! Please try again later.";
}
?> -->


<?php
if (isset($_GET["id_account"]) && !empty($_GET["id_account"])) {

    require_once "config.php";
    $sql = "DELETE FROM accounts WHERE id_account = ?";

    if ($stmt = $conn->prepare($sql)) { // Change $link to $conn
        $stmt->bind_param("i", $_GET["id_account"]);
        if ($stmt->execute()) {
            $stmt->close();
            $conn->close(); // Use $conn instead of $mysqli
            header("location: users.php");
            exit();
        } else {
            echo "Error! Please try again later.";
        }
    } else {
        echo "Error in prepare statement: " . $conn->error; // Add this line to check for prepare errors
    }
} else {
    echo "Error! Please try again later.";
}
?>
