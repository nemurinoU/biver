<?php
	$con=mysqli_connect("localhost", "root","");
		session_start();
		mysqli_select_db($con, "str_database");
		$acc = $_GET['id'];
		if ($_GET['action'] == "allow") {
			$action="update articles set article_status = 'Active' where article_id='".$acc."'";
		}
		if ($_GET['action'] == "revert") {
			$action="update articles set article_status = 'Pending' where article_id='".$acc."'";
		}
		if ($_GET['action'] == "delete") {
			$action="delete from articles where article_id='".$acc."'";
		}
		mysqli_query($con, $action);
		header('location: article_management.php');

?>