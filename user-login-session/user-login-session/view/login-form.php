<html>
<head>
<title>User Login</title>
<meta name="viewport" content="width=device-width , initial-scale=1">
<link rel="stylesheet" type="text/css" href=".user-login-session/user-login-session/view/css/form.css" />
<link rel="stylesheet" type="text/css" href=".user-login-session/user-login-session//view/css/style.css" />
</head>
<body>
	<div class="phppot-container tile-container text-center">
     <?php
    if (isset($_SESSION["errorMessage"])) {
        ?>
                <div class="validation-message"><?php  echo $_SESSION["errorMessage"]; ?></div>
                <?php
        unset($_SESSION["errorMessage"]);
    }
    ?>
        <form action="login-action.php" method="post" id="frmLogin"
			onSubmit="return validate();">
			<h2>Enter Login Details</h2>
			<div class="row">
				<label class="text-left" for="username">Username <span
					id="user_info" class="validation-message"></span></label> <input
					name="user_name" id="user_name" type="text" class="full-width">
			</div>
			<div class="row">
				<label class="text-left" for="password">Password <span
					id="password_info" class="validation-message"></span></label> <input
					name="password" id="password" type="password" class="full-width">
			</div>
			<div class="row">
				<input type="submit" name="login" value="Login" class="full-width"></span>
			</div>
		</form>
	</div>
	<script>
    function validate() {
        var $valid = true;
        document.getElementById("user_info").innerHTML = "";
        document.getElementById("password_info").innerHTML = "";
        
        var userName = document.getElementById("user_name").value;
        var password = document.getElementById("password").value;
        if(userName == "") 
        {
            document.getElementById("user_info").innerHTML = "required";
        	$valid = false;
        }
        if(password == "") 
        {
        	document.getElementById("password_info").innerHTML = "required";
            $valid = false;
        }
        return $valid;
    }
    </script>
</body>
</html>