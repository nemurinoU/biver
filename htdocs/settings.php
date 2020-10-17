<?php
	$con=mysqli_connect("localhost", "root", "");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else{
		session_start();
		if (!isset($_SESSION['active'])) {
		    $_SESSION['error-message']="Login authentication failed: ".mysqli_stmt_error($stmt);
		    $_SESSION['redirect-url'] = $_SERVER['REQUEST_URI'];
		    header("Location: error_pages/error-message.php");
		}
		else{
			mysqli_select_db($con, 'str_database');
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Account Settings</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="favicon.ico" type="image/ico">

		<script src="webcomponentsjs-0.7.24/webcomponents-lite.js"></script>
		<?php
			include("all_scripts.php");
		?>
		
	</head>

	<body>

		<?php include('navbar.php'); ?>
		<?php 
				$query = mysqli_query($con, "SELECT COUNT(statusreport) FROM filelist WHERE statusreport='pending'");
				$result = mysqli_fetch_array($query, MYSQLI_NUM);
				$new_submits = $result[0];
			?>
		<br>
		<main>
			<div class="col-xs-12 col-sm-8 col-md-6 mb-3 rounded mx-auto nounderline" style="background-color:#262729;color:white">
			<h1 class="text-center mt-1">Welcome <?php echo $_SESSION['active']?>!</h1>
			<!--<h2 class="text-center mt-3">Access Level: <?php echo $_SESSION['access'] ?></h2> -->
			<br>
					<?php 
						if ($_SESSION['access'] == 'Admin'){
							echo "<div class='form-group row mb-3 mt-3 px-3 greenoption'>";
							echo "<a class='mx-auto d-block text-white nounderline' href='admin_view_accounts.php'>View users</a>";
							echo "</div>";
						}
					?>
			  	
			  		<?php 
						if ($_SESSION['access'] == 'Admin'){
							echo "<div class='form-group row mb-3 mt-3 px-3 greenoption'>";
							echo "<a class='mx-auto d-block text-white nounderline' href='announcement_management.php'>Manage announcements</a>";
							echo "</div>";
						}
					?>
			  	
					<?php 
						if ($_SESSION['access'] == 'Admin'){
							echo "<div class='form-group row mb-3 mt-3 px-3 greenoption'>";
							echo "<a class='mx-auto d-block text-white nounderline' href='admin_entry.php'>Add new user</a>";
							echo "</div>";
						}
					?>

					<?php 
						if ($_SESSION['access'] == 'Admin' || $_SESSION['access'] == 'Project Head'){
							echo "<div class='form-group row mb-3 mt-3 px-3 greenoption'>";
							echo "<a class='mx-auto d-block text-white nounderline' href='submissions.php'>Approve Submission
							";
							if($new_submits > 0 && ($_SESSION['access']=="Admin" || $_SESSION['access']=="Project Head")){
							echo "<span class='badge badge-success'> $new_submits </span>";
							}	
							echo "</a></div>";
						}
					?>

					<?php 
						if ($_SESSION['access'] == "Researcher"){
							echo "<div class='form-group row mb-3 mt-3 px-3 greenoption'>";
							echo "<a class='mx-auto d-block text-white nounderline' href='submissions.php'>Send Submission</a>";
							echo "</div>";
						}
					?>
			  	<div class="form-group row mb-3 mt-3 px-3 greenoption">
					<a class='mx-auto d-block text-white nounderline ' href='admin_edit.php?accountID=<?php echo $_SESSION['account_id']?>'>Edit user settings</a>
			  	</div>		
		</div>
		</main>
			<?php 
				include("all_scripts_bottom.php");
			?>
	</body>
</html>