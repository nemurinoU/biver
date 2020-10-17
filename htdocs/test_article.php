<?php
	try {
		$con=mysqli_connect("localhost", "root", "");
		if (mysqli_connect_errno()){
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		else{
			session_start();
			mysqli_select_db($con, 'str_database');
			echo $_GET['article_content'];
		}
	}
	catch (Exception $e){
		echo $e->getMessage();
	}
?>
