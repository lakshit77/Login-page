	<?php
		session_start();
		if( isset($_SESSION['user'])){
			header("Location: home.php");
		}
		include_once 'dbconnect.php';

		$error = false;
		$passError=$emailError=$nameError="";
		$email=$name="";

		if ( isset($_POST['btn-signup']) ) {
			
			// clean user inputs to prevent sql injections
			$name = trim($_POST['name']);
			
			$email = trim($_POST['email']);
			
			$pass = trim($_POST['pass']);

			$cpass = trim($_POST['cpass']);
			
			// basic name validation
			if (empty($name)) {
				$error = true;
				$nameError = "Please enter your full name.";
			} else if (strlen($name) < 3) {
				$error = true;
				$nameError = "Name must have atleat 3 characters.";
			} else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
				$error = true;
				$nameError = "Name must contain alphabets and space.";
			}
			
			//basic email validation
			if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
				$error = true;
				$emailError = "Please enter valid email address.";
			} else {
				// check email exist or not
				$result = mysqli_query($conn,"SELECT userEmail FROM users WHERE userEmail='$email'");
				$count = mysqli_num_rows($result);
				if($count!=0){
					$error = true;
					$emailError = "Provided Email is already in use.";
				}
			}
			// password validation
			if (empty($pass)){
				$error = true;
				$passError = "Please enter password.";
			} else if(strlen($pass) < 6) {
				$error = true;
				$passError = "Password must have atleast 6 characters.";
			}else if ($pass != $cpass){
				$error = true;
				$passError="password does not match";
			}
			
			$password = $pass;
			
			// if there's no error, continue to signup
			if( !$error ) {
				
				$query = "INSERT INTO users(userName,userEmail,userPass) VALUES('$name','$email','$password')";
				$result = mysqli_query($conn,$query);
					
				if ($query) {
					$errTyp = "success";
					$errMSG = "Successfully registered, you may login now ";
				} else {
					$errTyp = "danger";
					$errMSG = "Something went wrong, try again later...";	
				}	
					
			}
			
			
		}
	?>
	<!DOCTYPE html>
	<html>
	<head>
	<title>Sign Up Form</title>
	<link rel="stylesheet" href="style.css" type="text/css" />
	<style type="text/css">
		
		body{
			width: 100%;
			height: 42vw;
			background: url("image/coll.jpg");
			background-size: 100% 100%;
		}
		.register{
			width: 50%;
			position: absolute;
			top: 50%;
			left:65%;
			transform: translate(-50%,-50%);
		}
		.create{
			text-align: center;
			font-size: 5vw;
			color: white;
			margin-top: 5%;
			-webkit-mask-image: -webkit-linear-gradient(top, rgba(0,0,0,0.3), rgba(0,0,0,.5), rgba(0,0,0,1));
		}
		
		.log{
			border:none;
			border-bottom: 2px solid #eee;
			color: white;
			padding: 2% 0;
			outline: none;
			font-size: 1.5vw;
			width: 40%;
			background:none; 
		}
		.text-danger{
			color: red;
		}
		.sign-up{
			margin-top: 2%;
		}
		.sign-in{
			color: #eee;
			text-decoration: none;
			font-size: 1.5vw;
			border-bottom:blue 2px solid;  
		}
		.sign-in:hover{
			font-size: 2vw;
		}
		p{
			color: white;
		}
		.success{
			height: 2vw;
			width: 50%;
			color: white;
			position: absolute;
			top: 25%;
			left: 35%;
			font-size: 1.5vw;
		}
		.arrow{
			position: absolute;
			top: 80%;
			left: 0; 
		}
		.register input[type="submit"] {
		background: url('arrow.png') no-repeat 30% 45%;
	    height: 4vw;
	    outline: none;
	    margin-top: -1.5vw;
	    margin-left: 16%;
	    border-radius: 50%;
	    cursor: pointer;
	    border: 2px solid #fff;
	    width: 4vw;
	}
		#log{
			margin-bottom: 5vw;
		}
	</style>
	</head>
	<body>

		<h3 class="create">Create an Account </h3>
	    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
	            	<div class="success">
				   	<?php
						if ( isset($errMSG) )
							echo $errMSG;
					?>						
				</div>
				<div class="register">  		
	            	<input type="text" class="log" name="name" placeholder="username" value="<?=$name;?>">
	            	<span class="text-danger"><?php echo $nameError; ?></span> 	<br> 		          		
	            	<input type="email" class="log" placeholder="email" name="email" value="<?=$email;?>">
	            	<span class="text-danger"><?php echo $emailError; ?></span> <br>                                      
	            	<input type="password" class="log" placeholder="password" name="pass" />
	            	<span class="text-danger"><?php echo $passError; ?></span><br>
	            	<input type="password" name="cpass" class="log" id="log" placeholder="confirm password">
	            	<a href="index.php"><input type="submit" name="btn-signup" class="arrow" value=""></a><br>
	            	<p>Already have an account..?<a href="index.php" class="sign-in">Sign in</a></p>
	            	</div>
	    </form>

	</body>
	</html>
	<?php ob_end_flush(); ?>