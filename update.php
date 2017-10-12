<?php
session_start();
$conn = new mysqli ("localhost","lakshit","lakshit1996","dbtest");

if (isset ($_POST['btn-signup'])){

	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$cpass = $_POST['cpass'];
	if($pass !=$cpass)
		die("Password does not match");

	$query = "UPDATE `users` SET `userPass`='$pass' where `userEmail`='$email'";
	if(!$conn->query($query))
		die(mysqli_error($conn));
	header ("location:index.php");
}
?>
<style type="text/css">
	
	body{
		width: 100%;
		height: 38vw;
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
		margin-top: 2vw;
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
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3 class="create">ENTER NEW PASSWORD </h3>
	<div class="register">
		<form action="update.php" method="post" >
			<input type="email" name="email" placeholder="email" class="log" required><br>
			<input type="Password" name="pass" placeholder="Password" class="log" required><br>
			<input type="Password" name="cpass" placeholder="confirm Password" class="log" required>
			<input type="submit" name="btn-signup" class="arrow" value=""><br>

		</form>
	</div>

</body>
</html>