<?php
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBNAME', 'dbtest');
	
	$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);
	
	if ( !$conn ) {
		die("Connection failed : " . mysqli_error($conn));
	}
