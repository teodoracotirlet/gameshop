<?php
require_once "config.php";

if (isset($_GET['id_account'])) {
    $sql = "SELECT * FROM accounts WHERE id_account = ?";
    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("i", $_GET["id_account"]);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows == 1) {
                $row = $result->fetch_array(MYSQLI_ASSOC);

                $param_first_name = $row["first_name"];
                $param_last_name = $row["last_name"];
                $param_profile_name = $row["profile_name"];
                $param_age = $row["age"];
                $param_password = $row["password"];
                $param_email = $row["email"];
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
    header("location: users.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["first_name"]) && !empty($_POST["last_name"]) && !empty($_POST["profile_name"]) && !empty($_POST["age"])&& !empty($_POST["password"]) && !empty($_POST["email"])) {

        $sql = "UPDATE accounts SET first_name ='".$_POST["first_name"]."', last_name ='".$_POST["last_name"]."', profile_name ='".$_POST["profile_name"]."' , age =".$_POST["age"]." , password ='".$_POST["password"]."', email ='".$_POST["email"]."' WHERE id_account =".$_GET["id_account"];
       echo $sql."-----";

        if ($stmt = $mysqli->prepare($sql)) {

            $stmt->bind_param("sssisi", $_POST["first_name"], $_POST["last_name"], $_POST["profile_name"], $_POST["age"], $_POST["password"], $_POST["email"], $_GET["id_account"]);
            $stmt->execute();
            if ($stmt->error) {
                echo "Error!" . $stmt->error;
                exit();
            } else {
                header("location: users.php");
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
    <title>Update User</title>
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
               <div class="card" style="margin-top:20px;">
                   <div class="card-body">
                       <div class="page-header">
                           <h2>Update User</h2>
                       </div>
                       <p>Edit the input to update the user.</p>
                       <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                           <div class="form-group">
                               <label>First Name</label>
                               <input type="text" name="first_name" class="form-control" required value="<?php echo $param_first_name; ?>">
                           </div>
                           <div class="form-group">
                               <label>Last Name</label>
                               <textarea name="last_name" class="form-control" required ><?php echo $param_last_name; ?></textarea>
                           </div>
                           <div class="form-group">
                               <label>Profile Name</label>
                               <input type="text" name="profile_name" class="form-control" value="<?php echo $param_profile_name; ?>" required>
                           </div>
                           <div class="form-group">
                               <label>Age</label>
                               <input type="number" name="age" class="form-control" value="<?php echo $param_age; ?>" required>
                           </div>
                           <div class="form-group">
                               <label>Password</label>
                               <input type="text" name="password" class="form-control" value="<?php echo $param_password; ?>" required>
                           </div>
                           <div class="form-group">
                               <label>Email</label>
                               <input type="text" name="email" class="form-control" value="<?php echo $param_email; ?>" required>
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