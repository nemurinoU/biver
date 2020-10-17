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
		<title>BiVER</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<link rel="import" href="all_scripts.php">

		
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="favicon.ico" type="image/ico">

		<style>
			.page-footer{
			  color:white;
			  background-color:#005208;
			  height:120px; 
			  padding-top: 20px;
			  padding-left: 10px;
			}
			#header{
				background:none;
				font-family: 'Bree Serif', serif;
				font-weight: bold;
			}
			#datasetH{
			  padding-left: 10px;
			  padding-right: 10px;
			  padding-bottom: 20px;
			  background-color: #174912;
			}
			#publicationH{
				font-size:20px;
				background-color: #377f30;
			}
			#members{
				<?php 
					if(isset($_SESSION['active'])){
						echo "display: block;";
					}
					else {
						echo "display: none;";
					}
				?>
			}
			#updates{
				<?php 
					if(isset($_SESSION['active']))
						if($_SESSION['type']=="Admin" || $_SESSION['type']=="Project Head"){
							echo "display: block;";
						}
						else{
							echo "display: none;";
						}
					else {
						echo "display: none;";
					}
				?>
			}
			#submissions{
				<?php 
					if(isset($_SESSION['active'])){
						if ($_SESSION['type']=="Researcher"){
							echo "display: block;";
						}
						else{
							echo "display: none;";
						}
					}
					else {
						echo "display: none;";
					}
				?>
			}
			#login{
				<?php 
					if(isset($_SESSION['active'])){
						echo "display: none;";
					}
					else {
						echo "display: block;";
					}
				?>
			}
			#something{
				<?php 
					if(isset($_SESSION['active'])){
						echo "display: block;";
					}
					else {
						echo "display: none;";
					}
				?>
			}
			#greetingsuser{
				<?php 
					if(isset($_SESSION['active'])){
						echo "display: block;";
					}
					else {
						echo "display: none;";
					}
				?>
			}
		</style>
	</head>
	<body>
		<div class="jumbotron" style="margin-bottom: 0px" id="header">
			<h1>Biodiversity and Vulnerable Ecosystems Research</h1>
		</div>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
					<a class="navbar-brand"><img src="logo.png"></a>
					<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
					<span class="navbar-toggler-icon"></span>
					</button>
				
				<div class="collapse navbar-collapse" id="collapse_target">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link" href="Members.php" id="members">Members <i class="fas fa-user"></i></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="Updates.php" id="updates">Updates <i class="fas fa-user-edit"></i></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="entry_researcher.php" id="submissions">Add Submission <i class="fas fa-user-edit"></i></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="Homepage.php">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="publication.php">Publications</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link" href="datasets.php">Datasets</a>
							</li>							
							<li class="nav-item" id="something">
								<a class="nav-link"  href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
							</li>
							<li class="nav-item" id= "login">
								<a class="nav-link"  href="login.php" ><i class="fas fa-sign-in-alt"></i> Login</a>
							</li>
				       </ul>
				</div>		
		</nav>
		<h2 class="text-center">PROJECT 3</h2><br>
		<div class="page-footer">
			<h5>Contact Information and Copyrights</h5>
		</div>
		<link rel="import" href="all_scripts_bottom.php">
	</body>
</html>