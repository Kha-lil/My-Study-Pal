<?php

	// Include config file
    require_once('../config/connect.php');
   // Define variables and initializ with empty values.

    $email = $password = $confirmPasword = $emailErr = $passwordErr = $confirmPasswordErr = "";


    if ($_SERVER['REQUEST_METHOD'] == "POST"){

    	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}		

		
    	if (empty($_POST['email'])){
    		$emailErr = "Please Enter an email address";
    	} else {
    		$email = test_input($_POST['email']);
    		if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    			$emailErr = "Invalid email format";
    		} else {
    			$sql = "SELECT id FROM users WHERE email = :email";
    			if ($stmt = $pdo->prepare($sql)){
    				$stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
    				$param_email = $email;
    				if($stmt->execute()){
    					if ($stmt->rowCount() == 1) {
    						$emailErr = "This email is already taken";
    					// } else {
    					// 	$email = test_input($_POST['email']);
    					}
    				} else {
    					echo "Something went wrong. Please Try again.";
    					// Error page
    					// header("location:error.php");
    				}
    			}
    		}
    	}


    	if (empty($_POST['password'])){
    		$passwordErr = "Please enter a Password";
    	} else {
    		$password = $_POST['password'];
    		$pattern = "/^(?=.*[a-zA-Z])(?=.*[\W]).{6,}$/";
    		if(!preg_match($pattern, $password)){
    			$passwordErr = "Must contain at least 6 alphanumeric characters of uppercase, lowercase including symbols.";
    		}
    	}

    	// Validate Confirm Password
    	if (empty($_POST['confirmPassword'])) {
    		$confirmPasswordErr = "Please confirm password";
    	} else {
    		$confirmPassword = $_POST['confirmPassword'];
    		if (empty($passwordErr) && ($password != $confirmPassword)){
    			$confirmPasswordErr = "Password did not match";

    		}
    	}


    	if (empty($emailErr) && empty($passwordErr) && empty($confirmPasswordErr)){
    		// Prepare an insert statement
    		$sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    		if ($stmt = $pdo->prepare($sql)){
    			// Bind variables to the prepared statement as parameters
    			$stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
    			$stmt->bindParam(":password", $param_password, PDO::PARAM_STR);

    			// Set Parameters
    			$param_email = $email;
    			$param_password = password_hash($password, PASSWORD_DEFAULT);

    			// Attempt to execute the prepared statement
    			if ($stmt->execute()){
    				// Redirect to login page
    				header("location: signup.php");

    			} else {
    				echo "Something went wrong. Please try again later.";
    				// error page
    				// header("location: error.php");
    			}

    			// Close statement
    			unset($stmt);
    		}

    	}

    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP PAGE</title>
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="lib/fontawesome/css/font-awesome.css">
    

    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">-->
    
    <script src="lib/jquery/jquery.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
     <!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>-->
    <!--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>-->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>-->
	<link rel="stylesheet" href="style.css">
	<style type="text/css">
    	.error {color: #FF0000;}
    </style>
</head>

<body>
    <div class="text-center">
        <h2 class=" item-title">
            Create Account
        </h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF'])?>" method="POST">
                    <div class="form-group">
                        <label for="email">Email-ID:</label>
						<input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" >
						<span class="error"><?php echo $emailErr; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="pwd"><i class="fa fa-eye"></i> Password:</label>
						<input type="password" class="form-control" id="pwd" name="password" >
						<span class="error"><?php echo $passwordErr; ?></span>

                    </div>
                    <div class="form-group">
                        <label for="pwd">Confirm Password:</label>

						<input type="password" class="form-control" id="pwd" name="confirmPassword" >
						<span class="error"><?php echo $confirmPasswordErr; ?></span>
                    </div>
                    <button type="submit" class="btn btn-primary mx-auto" color="#ac8365">SIGN UP</button>
                </form>

                <div class="login">
                    <span>Or Sign Up With</span>
                    <a href="#" class="google"><i class="fa fa-google"></i></a>
                    <p>Already a member?.... <a href="login.php">LOGIN</a></p>
                </div>
            </div>
        </div>
    </div>



</body>

</html>