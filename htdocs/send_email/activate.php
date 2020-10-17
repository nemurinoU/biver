<?php
	require 'header.php';
?>
<?php
	require_once("dbcontroller.php");
	$db_handle = new DBController();
	if(!empty($_GET["id"])) {
	$query = "UPDATE account set Status = 'Active' WHERE id='" . $_GET["id"]. "'";
	$result = $db_handle->updateQuery($query);
		if(!empty($result)) {
			$message = "Your account is activated.";
		} else {
			$message = "Problem in account activation.";
		}
	}
?>