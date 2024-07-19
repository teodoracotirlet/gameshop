<?php
require_once "config.php";

if (isset($_GET["id_account"]) && !empty(trim($_GET["id_account"]))) {
    $sql = "SELECT * FROM accounts WHERE id_account = ?";
    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("i", $_GET["id_account"]);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows == 1) {
                $row = $result->fetch_array(MYSQLI_ASSOC);

                $first_name = $row["first_name"];
                $last_name = $row["last_name"];
                $profile_name = $row["profile_name"];
                $age = $row["age"];
                $password = $row["password"];

            } else {
                echo "Error! Please try again later.";
                exit();
            }

        } else {
            echo "Error executing the statement: " . $stmt->error;
            exit();
        }
    }
    $stmt->close();
    // $mysqli->close();
} else {
    echo "Error! Please try again later.";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View User </title>
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
                            <h1>View User</h1>
                        </div>
                        <div class="form-group">
                            <label >First Name</label>
                            <p class="form-control-static"><?php echo $first_name; ?></p>
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <p class="form-control-static"><?php echo $last_name; ?></p>
                        </div>
                        <div class="form-group">
                            <label>Profile Name</label>
                            <p class="form-control-static"><?php echo $profile_name; ?></p>
                        </div>
                        <div class="form-group">
                            <label>Age</label>
                            <p class="form-control-static"><?php echo $age; ?></p>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <p class="form-control-static"><?php echo $password; ?></p>
                        </div>
                        <p><a href="users.php" class="btn btn-primary">Back</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>