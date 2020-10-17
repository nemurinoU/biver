<?php
	$con=mysqli_connect("localhost", "root", "");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else{
		session_start();
		if (isset($_SESSION['active'])&& isset($_SESSION['access'])) {
			$string_location = "Location: ./";
			header($string_location);
		}
		mysqli_select_db($con, 'str_database');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>