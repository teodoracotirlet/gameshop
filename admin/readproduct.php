<?php
require_once "config.php";

if (isset($_GET["id_game"]) && !empty(trim($_GET["id_game"]))) {
    $sql = "SELECT * FROM games WHERE id_game = ?";
    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("i", $_GET["id_game"]);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows == 1) {
                $row = $result->fetch_array(MYSQLI_ASSOC);

                $name_game = $row["name_game"];
                $genre = $row["genre"];
                $price = $row["price"];
                $image = $row["image"];
                $id_genre = $row["id_genre"];

            } else {
                echo "Error! Please try again later.";
                exit();
            }

        } else {
            echo "Error! Please try again later.";
            exit();
        }
    }
    $stmt->close();
    $mysqli->close();
} else {
    echo "Error! Please try again later.";
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Product </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        label{
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="margin-top: 20px;">
                    <div class="card-body">
                        <div class="page-header">
                            <h1>View Prodct</h1>
                        </div>
                        
                        <div class="form-group">
                            <label >Name Game</label>
                            <p class="form-control-static"><?php echo $name_game; ?></p>
                        </div>
                        <div class="form-group">
                            <label>Genre</label>
                            <p class="form-control-static"><?php echo $genre; ?></p>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <p class="form-control-static"><?php echo $price; ?></p>
                        </div>
                        <div class="form-group">
    <label>Image</label>
    <p class="form-control-static">
        <?php
        //echo '<img src="data:image/jpeg;base64,' . base64_encode($image) . '" alt="' . $game['name_game'] . '">';
        echo '<img src="data:image/jpeg;base64,' . base64_encode($image) . '" alt="' . $name_game . '">';

        ?>
    </p>
</div>

                        <div class="form-group">
                            <label>Id Genre</label>
                            <p class="form-control-static"><?php echo $id_genre; ?></p>
                        </div>
                        <p><a href="index.php" class="btn btn-primary">Back</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>