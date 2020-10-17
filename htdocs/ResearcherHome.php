<?php
	$con=mysqli_connect("localhost", "root", "");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else{
		session_start();
		mysqli_select_db($con, 'str_database');
	}
?>

<html>
<head>
	<title>Researcher</title>
	<?php include('all_scripts.php'); ?>
	<link rel="stylesheet" type="text/css" href="../auto.css">
</head>
<body>
	<nav>
		<table id="navi">
		<tr>
			<td width="55%"><h1>Biodiversity and Vulnerable Ecosystems Research</h1></td>
			<td class="menus">About Us</td>
			<td class="menus">
				<select id="projlist"> 
				<option id="projlist"> Projects </option>
				<option id="projlist"><a href="proj1.html"> Projects 1</a></option>
				<option id="projlist"><a href="proj2.html"> Projects 2</a></option>
				<option id="projlist"><a href="proj3.html"> Projects 3</a></option>
				</select>
			</td>
			<td class="menus">Resources</td>
			<td class="menus">Login</td>
			</tr>
		</table>
	</nav>

	<div style="height: 4em"></div>
	<main style="height: 500px">
	<h2 style="margin-top: 50px;"> welcome Researcher <?php echo $_SESSION['id'] ?> </h2>
	<table style="margin-top: 50px; margin-bottom: 50px; background-color: green; margin-left: auto; margin-right: auto; padding: 50px;">
		<tr>
			<td> <a href="view_updates.php" style="color: white; text-decoration: none;">View submission history</a> </td>
		</tr>
		<tr>
			<td> <a href="entry_researcher.php" style="color: white; text-decoration: none;" name="admin">Add new submission</a> </td>
		</tr>
	</table>
	<?php include('all_scripts_bottom.php'); ?>
</body>
</html>