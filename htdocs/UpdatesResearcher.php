<?php
	$con=mysqli_connect("localhost", "root", "");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else{
		session_start();	
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<?php include('all_scripts.php'); ?>
	<link rel="stylesheet" href="../auto.css">
</head>
<body>
	<center><h1>List of Submissions by <?php echo $_SESSION['id'] ?></h1></center>
	<main id="view">
		
	<table >
		<tr>
			<th id="accountID">Account ID</th>
			<th id="projectID">Project ID</th>
			<th id="organizationID">Organization</th>
			<th id="organization">Submission</th>
			<th id="email">Contact</th>
			<th id="cellNum">Status</th>
			<th id="actions">Actions</th>
		</tr>
		<?php 
			mysqli_select_db($con, 'str_database');
			$sql = "select * from submissions where AccountID='" . $_SESSION['id'] . "'";
			$rec = mysqli_query($con, $sql);
		
			while ($data = mysqli_fetch_array($rec)) {
				$accountID = $data['AccountID'];
				echo "<tr>";
				echo "<td>" . $data['AccountID'] . "</td>";
				echo "<td>" . $data['ProjectID'] . "</td>";
				echo "<td>" . $data['Organization'] . "</td>";
				echo "<td>" . $data['Submission'] . "</td>";
				echo "<td>" . $data['Contact'] . "</td>";
				echo "<td>" . $data['Status'] . "</td>";
				echo "</tr>";
			}
		?>
	</table>
	</main>
	<?php include('all_scripts_bottom.php'); ?>
</body>
</html>