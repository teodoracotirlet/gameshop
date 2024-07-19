<?php
if (isset($_GET["id_game"]) && !empty($_GET["id_game"])) {

    require_once "config.php";
    $sql = "DELETE FROM games WHERE id_game = ?";

    if ($stmt = $link->prepare($sql)) {
        $stmt->bind_param("i", $_GET["id_game"]);
        if ($stmt->execute()) {
            header("location: products.php");
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
?>