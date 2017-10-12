<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	
	// it will never let you open index(login) page if session is set
	if ( isset($_SESSION['user'])!="" ) {
		header("Location: coll.php");
		exit;
	}
	
	$error = false;
	
	$passError=$emailError="";
	$email="";
	if( isset($_POST['btn-login']) ) {	
		
		// prevent sql injections/ clear user invalid inputs
		$email = trim($_POST['email']);
		
		
		$pass = trim($_POST['pass']);
		
		
		if(empty($email)){
			$error = true;
			$emailError = "Please enter your email address.";
		} else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
			$error = true;
			$emailError = "Please enter valid email address.";
		}
		
		if(empty($pass)){
			$error = true;
			$passError = "Please enter your password.";
		}
		
		// if there's no error, continue to login
		if (!$error) {
			
			//$password = hash('sha256', $pass); // password hashing using SHA256
		
			$res=mysqli_query($conn,"SELECT userId, userName FROM users WHERE userEmail='$email' and userPass='$pass'");
			$row=mysqli_fetch_array($res);
			
			if(mysqli_num_rows($res)) {
				$_SESSION['user'] = $row['userId'];
				header("Location: coll.php");
			} else {
				$errMSG = "Incorrect detail, Try again...";
			}
				
		}
		
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Coding Cage - Login & Registration System</title>
<style type="text/css">
	
	body{
		width: 100%;
		height: 37vw;
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
		margin-top: 10%;
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
	.sign-up{
		color: #eee;
		text-decoration: none;
		font-size: 1.5vw;
		text-shadow: 2px 2px  black;  
	}
	.sign-up:hover{
		font-size: 2vw;
		text-shadow: 2px 2px black;  

	}
	p{
		color: white;
	}
	.arrow{
		margin-top: 4%;
		margin-left: 25%;
		border:2px solid white;
		border-radius: 50%;
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
	.register input[type="submit"] {
	background: url('image/arrow.png') no-repeat 30% 45%;
    height: 4vw;
    outline: none;
    margin-top: 1vw;
    margin-left: 0%;
    border-radius: 50%;
    cursor: pointer;
    border: 2px solid #fff;
    width: 4vw;
}
.error{
	color: red;
	position: absolute;
	top: 30%;
	left: 40%;
}
.forget{
		text-decoration: blink;
		color: white;
		position: absolute;
		top: 60%;
		left: 20%;
		font-size: 1.5vw;

	}



</style>
<script type="'text/javascript'">
    	function security() {
    		prompt("enter new password");
    	}
    </script>



</head>
<body>
<h3 class="create">Login</h3>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
    	<div class="error">
            <?php
			if ( isset($errMSG) ) {
				?>
				<?php echo $errMSG; ?>
                <?php
			}
			?>
		</div>
			<div class="register">
            	<input type="email" name="email" class="log" placeholder="Your Email" value="<?=$email; ?>" maxlength="40" />
                <span class="text-danger"><?php echo $emailError; ?></span><br>
           
               	<input type="password" name="pass" class="log" placeholder="Your Password" maxlength="15" />             
                <span class="text-danger"><?php echo $passError; ?></span><br> 
                <a href="update.php" class="forget">Forget password</a>
           
	            <input type="submit" name="btn-login" value="">        
            	<p>Do not have account...?<a href="register.php" class="sign-up">Sign Up</a></p>
            </div>
    </form>

 
</body>
</html>
<?php ob_end_flush(); ?>