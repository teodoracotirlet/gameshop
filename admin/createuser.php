<?php
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['profile_name']) && isset($_POST['age']) && isset($_POST['password']) ) {

        $sql = "INSERT INTO accounts (first_name, last_name, profile_name, age, password) VALUES (?,?,?,?,?)";
        if ($stmt = $mysqli->prepare($sql)) {
            $stmt->bind_param("sssis", $_POST['first_name'], $_POST['last_name'], $_POST['profile_name'], $_POST['age'], $_POST['password']);
            if ($stmt->execute()) {
                header("location: users.php");
                exit();
            } else {
                echo "Error! Please try again later.";
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
    <title>Create User </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h2>Create User</h2>
                </div>
                <p>Fill this form to add users to the database.</p>
                <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="first_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <textarea name="last_name" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Profile Name</label>
                        <input type="text" name="profile_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <input type="number" name="age" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="password" class="form-control" required>
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