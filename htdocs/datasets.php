<?php
	$con=mysqli_connect("localhost", "root", "");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else{
		mysqli_select_db($con, 'str_database');
		if(isset($_POST['searchButton1'])){
			if ($_POST['searchBar'] == "Scientific name" || $_POST['searchBar'] == "") {
				$message = "Please type the scientific name.";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
			else{
				$string = 'Location: datasets_result.php?scientificname='.$_POST['searchBar'];
				header($string);
			}
		}
		if(isset($_POST['searchButton2'])){
			$link = "Location: datasets_result.php?";
			$link = $link . "scientificname=&" . "order=" . $_POST['order'] . "&" . "class=" . $_POST['class'] . "&" . "genus=" . $_POST['genus'] . "&" . "species=" . $_POST['species'] . "&" . "epithet=" . $_POST['epithet'] . "&" . "subspecies=" . $_POST['subspecies'] . "&" . "collector=" . $_POST['collector'] . "&" . "collectorid=" . $_POST['collectorid'] . "&" . "location=" . $_POST['location'] . "&" . "year=" . $_POST['year'] . "&" . "month=" . $_POST['month'] . "&" . "day=" . $_POST['day'] . "&". "gps=" . $_POST['gps'] . "&";
			header($link);
		}
		if(isset($_POST['searchButton3'])){
			if ($_POST['searchBar3'] == "ID Name" || $_POST['searchBar3'] == "") {
				$message = "Please type the Submission ID.";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
			else{
				$string = 'Location: datasets_result.php?submissionid='.$_POST['searchBar3'];
				header($string);
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
		<title>BiVER</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php include('all_scripts.php'); ?>

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
			#frame{
				padding-bottom:0px;
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
			.searchBox{
				color:white;
				padding-top: 20px;
				padding-bottom: 15px;
				padding-left: 30px;
				padding-right: 30px;
				border-radius: 0px;
				height:100%;
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
					<a class="navbar-brand"><img src="static/img/logo.png"></a>
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
	<h2 class="text-center">Algae Dataset</h2><br>
	<div class="container-fluid padding">
		<div class="row text-center padding mx-1">
			<div class="col-xs-0 col-sm-1 col-md-3"></div>
			<div class="col-xs-12 col-sm-10 col-md-6 text-left ml-0 rounded border-left-1 border border-white" style="background-color: #262729">
				<h4 class="text-center" style="color:white">Quick Search</h4>
				<div class="searchBox">			
					<p class="mb-2">Scientific Name</p>
					<form class="input-group mb-3" action="<?php $_PHP_SELF;?>" method="post" >					 
						  <input class="form-control" aria-describedby="basic-addon2" type="text" name="searchBar" value="" placeholder="Scientific Name" required>
						  <div class="input-group-append">
						    <button class="btn btn-outline-secondary" type="submit" name="searchButton1">Search</button>
						  </div>
					</form>
					<p class="mb-2">Submission Number</p>
					<form class="input-group mb-3" action="<?php $_PHP_SELF;?>" method="post" >					 
						  <input class="form-control" aria-describedby="basic-addon2" type="text" name="searchBar3" value="" placeholder="ID Name" required>
						  <div class="input-group-append">
						    <button class="btn btn-outline-secondary" type="submit" name="searchButton3">Search</button>
						  </div>
					</form>
					<a class="nav-link text-center" style="color:white" href="">Want to download multiple datasets? Click here</a>
					<a class="nav-link text-center" style="color:white" href="">Click here to perform advanced search</a>
				</div>
			</div>
			<div class="col-xs-0 col-sm-1 col-md-3"></div>
		</div>
		<br>
		<h2 class="text-center">Advanced Search</h2>
		<form action="<?php $_PHP_SELF;?>" method="post">
			<table class="mx-auto">
			<tr>
				<th>Taxonomic Information</th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
			<tr>
				<td>Order:</td>
				<td><input type="text" id="order" name="order"></td>
				<td>Class:</td>
				<td><input type="text" id="class" name="class"></td>
			</tr>
			<tr>
				<td>Genus:</td>
				<td><input type="text" id="genus" name="genus" required></td>
				<td>Species:</td>
				<td><input type="text" id="species" name="species" required></td>
			</tr>
			<tr>
				<td>Species Epithet:</td>
				<td><input type="text" id="epithet" name="epithet"></td>
				<td>Subspecies:</td>
				<td><input type="text" id="subspecies" name="subspecies"></td>
			</tr>
			<tr>
				<td>Collector:</td>
				<td><input type="text" id="collector" name="collector"></td>
				<td>Collector ID:</td>
				<td><input type="text" id="collectorid" name="collectorid"></td>
			</tr>
			<tr>
				<th>Geographical Information</th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
			<tr>
				<td>Location:</td>
				<td><input type="text" id="location" name="location"></td>
				<td>Year of Collection:</td>
				<td><input type="text" id="year" name="year"></td>
			</tr>
			<tr>
				<td>Month of Collection:</td>
				<td><input type="text" id="month" name="month"></td>
				<td>Day of Collection:</td>
				<td><input type="text" id="day" name="day"></td>
			</tr>
			<tr>
				<td>GPS Location:</td>
				<td><input type="text" id="gps" name="gps"></td>
				<td>Import GPX File</td>
				<td></td>
			</tr>

			</table><br>
			<center>
			<button type="submit" name="searchButton2" width="100px">Search</button>
		</center>
		</form>
	</div>

	<?php include('all_scripts_bottom.php'); ?>
	
</body>
</html>