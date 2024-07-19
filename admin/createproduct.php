<?php
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['name_game']) && isset($_POST['genre']) && isset($_POST['price']) && isset($_FILES['image']) && isset($_POST['category'])) {
        
        $name_game = $_POST['name_game'];
        $genre = $_POST['genre'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        
        $image = $_FILES['image']['tmp_name'];
        $imageContent = addslashes(file_get_contents($image)); // Convertă imaginea în format BLOB

        $sql_select_category = "SELECT id_genre FROM categories WHERE name_genre = ?";
        if ($stmt_select = $mysqli->prepare($sql_select_category)) {
            $stmt_select->bind_param("s", $category);
            $stmt_select->execute();
            $stmt_select->store_result();
            
            if ($stmt_select->num_rows > 0) {
                $stmt_select->bind_result($id_genre);
                $stmt_select->fetch();
            } else {
                $sql_insert_category = "INSERT INTO categories (name_genre) VALUES (?)";
                if ($stmt_insert = $mysqli->prepare($sql_insert_category)) {
                    $stmt_insert->bind_param("s", $category);
                    if ($stmt_insert->execute()) {
                        $id_genre = $stmt_insert->insert_id;
                    } else {
                        echo "Error inserting category: " . $stmt_insert->error;
                        exit();
                    }
                    $stmt_insert->close();
                } else {
                    echo "Error preparing category insert: " . $mysqli->error;
                    exit();
                }
            }
            $stmt_select->close();
        } else {
            echo "Error preparing category select: " . $mysqli->error;
            exit();
        }

        $sql_insert_game = "INSERT INTO games (name_game, genre, price, image, id_genre) VALUES (?, ?, ?, ?, ?)";
        if ($stmt_insert_game = $mysqli->prepare($sql_insert_game)) {
            $stmt_insert_game->bind_param("ssdsi", $name_game, $genre, $price, $imageContent, $id_genre);
            if ($stmt_insert_game->execute()) {
                header("location: products.php");
                exit();
            } else {
                echo "Error executing query: " . $stmt_insert_game->error;
            }
            $stmt_insert_game->close();
        } else {
            echo "Error preparing query: " . $mysqli->error;
        }
    } else {
        echo "Error: All fields are required.";
    }

    $mysqli->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h2>Create Product</h2>
                </div>
                <p>Fill this form to add products to the database.</p>
                <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Name Game</label>
                        <input type="text" name="name_game" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Genre</label>
                        <input type="text" name="genre" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" name="price" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <input type="text" name="category" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <a href="products.php" class="btn btn-default">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
