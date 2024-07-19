<?php
require_once "config.php";

if (isset($_GET['id_game'])) {
    $sql = "SELECT * FROM games WHERE id_game = ?";
    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("i", $_GET["id_game"]);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows == 1) {
                $row = $result->fetch_array(MYSQLI_ASSOC);

                $param_name_game = $row["name_game"];
                $param_genre = $row["genre"];
                $param_price = $row["price"];
                $param_image = $row["image"];
            } else {
                echo "Error! Data Not Found";
                exit();
            }
        } else {
            echo "Error! Please try again later.";
            exit();
        }
        $stmt->close();
    }
} else {
    header("location: products.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $updateFields = [];
    $updateValues = [];

    if (!empty($_POST["name_game"])) {
        $updateFields[] = "name_game = ?";
        $updateValues[] = $_POST["name_game"];
    }
    if (!empty($_POST["genre"])) {
        $updateFields[] = "genre = ?";
        $updateValues[] = $_POST["genre"];
    }
    if (!empty($_POST["price"])) {
        $updateFields[] = "price = ?";
        $updateValues[] = $_POST["price"];
    }
    if (!empty($_FILES["image"]["name"])) {
        $imageContent = file_get_contents($_FILES["image"]["tmp_name"]);
        $updateFields[] = "image = ?";
        $updateValues[] = $imageContent;
    }

    if (!empty($updateFields)) {
        $sql = "UPDATE games SET " . implode(", ", $updateFields) . " WHERE id_game = ?";
        $updateValues[] = $_GET["id_game"];

        if ($stmt = $mysqli->prepare($sql)) {
            $stmt->bind_param(str_repeat("s", count($updateValues) - 1) . "i", ...$updateValues);
            $stmt->execute();
            if ($stmt->error) {
                echo "Error! " . $stmt->error;
                exit();
            } else {
                header("location: products.php");
                exit();
            }
            $stmt->close();
        }
    }
    $mysqli->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        label {
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="margin-top:20px;">
                    <div class="card-body">
                        <div class="page-header">
                            <h2>Update Product</h2>
                        </div>
                        <p>Edit the input to update the product.</p>
                        <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Name Game</label>
                                <input type="text" name="name_game" class="form-control" value="<?php echo $param_name_game; ?>">
                            </div>
                            <div class="form-group">
                                <label>Genre</label>
                                <input type="text" name="genre" class="form-control" value="<?php echo $param_genre; ?>">
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input type="number" name="price" class="form-control" value="<?php echo $param_price; ?>">
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <img src="data:image/jpeg;base64,<?php echo base64_encode($param_image); ?>" class="form-control-static">
                                <input type="file" name="image" class="form-control">
                            </div>
                            <input type="submit" class="btn btn-primary" value="Submit">
                            <a href="index.php" class="btn btn-default">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
