<?php
	session_start();
	$con=mysqli_connect("localhost", "root", "");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else{
		mysqli_select_db($con, 'str_database');
		if ($_GET['action'] == "Accept"){
			$sql = "update submissions set Status = 'Accepted' where SubmissionID='" . $_GET['submissionId'] . "'";
			$rec = mysqli_query($con, $sql);
		}
		else if ($_GET['action'] == "Deny"){
			$sql = "update submissions set Status = 'Deny' where SubmissionID='" . $_GET['submissionId'] . "'";
			$rec = mysqli_query($con, $sql);
		}
	}
	header("Location: Updates.php")
	
?>