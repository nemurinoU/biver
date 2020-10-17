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
	<title>BiVER</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="favicon.ico" type="image/ico">
	<style>
		/*-----------------------------------------<Hompage Styling>----------------------------------------------*/
			#aboutBiver{
			color: black;
			background-color: white;
			margin-top: 20px;
			font-family: Verdana;
			}
			.row-eq-height {
			  display: -webkit-box;
			  display: -webkit-flex;
			  display: -ms-flexbox;
			  display:         flex;
			}
			#partner{
				color:black;
				background:none;
				text-align: center; 
			
			}
			.page-footer{
			  color:white;
			  background-color:#005208;
			  padding-top: 20px;
			  padding-left: 10px;
			}
			#header{
				background:none;
				font-family: 'Ubuntu', sans-serif;
			}
			#whatweoffer{
				background-color: #1f1f1f;
				color:white;
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
			.nounderline {
			  	text-decoration: none !important
			}
			
			h5{
				font-size:16px;

			}
			#projectImage{
				width:100%;
				height:auto;
			}
			img.agency{
				height: 100px;
				width: 100px;
			}
			.agency{
				margin-top:10px;
			}
			.calculated-width {
			    width: -webkit-calc(200% - 10px);
			    width:    -moz-calc(200% - 10px);
			    width:         calc(200% - 10px);
			}​
			div.tooltip-inner {
			    max-width: 300px;
			}
			.row2{
				background-color: #2f3640;
				color:white;
			}
			.tempPic{
				background-color: #4cd137;
				width:100%;
			}
			.row4{
				background-color: #095b20;
				color:white;
			}
			.box{
			  color: white;
			  padding-top: 20px;
			  padding-bottom: 15px;
			  border-radius: 20px;
			  background-color: #485460;
			}
			#fundingimage{
				height:150px;
				width:150px;
			}
			.row p{
				padding: 10px;
			}
			.img{
				width: 100%;
				min-height: 300px;
				max-height: 300px;
			}
			.img-m{
				width: 100%;
				min-height: 200px;
				max-height: 200px;
			}
			.img-s{
				width: 100%;
				min-height: 100px;
				max-height: 100px;
			}
			.jumbotron{
				background-color: white;
			}
			/*-----------------------------------------<Hompage Styling/>----------------------------------------------*/

			/*-----------------------------------------<PHP CODE>----------------------------------------------*/
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
			#bar2{
				<?php 
					if(isset($_SESSION['active'])){
						echo "display: block;";
					}
					else {
						echo "display: none;";
					}
				?>
			}
			#datasets{
				<?php 
					if(isset($_SESSION['active'])){
						echo "display: block;";
					}
					else {
						echo "display: none;";
					}
				?>
			}
			#profile{
				<?php 
					if(isset($_SESSION['active'])){
						echo "display: block;";
					}
					else {
						echo "display: none;";
					}
				?>
			}
			/*-----------------------------------------<PHP CODE/>----------------------------------------------*/
		
			/*-----------------------------------------<navbar>----------------------------------------------*/
			.navBar1{
				font-size:16px;
				background-color: #2c3e50;
			}
			.navBar2{
				font-size:16px;
				overflow: hidden;
				top:55px;
				background-color: #00695C;
			}			
			img.logo{
				width:57px;
				height:29px;
				position:relative;
				bottom:5px;
			}
			#brandTitle{
				font-size:30px;
			}
			.navbar-light{
				color:black;
			}
			.dp{
				width:40px;
				height:40px;
			}
			.bnav{
				max-height:0px;
			}
			.unav{
				max-height:20px;
			}
			.footerfont{
				size: 0.5em;
			}
			.img-h{
				width:50px;
				height:50px;
				position: relative;
				bottom:5px;
			}
			/*-----------------------------------------<navbar/>----------------------------------------------*/
		</style>
</head>
<body>

	<div class="jumbotron text-center" style="margin-bottom: 0px" id="header">		
			<img style="display: inline-block" class="img-h" src="pcaarrd.jpg"/><h2 style="display: inline-block" class="mx-2">Biodiversity and Vulnerable Ecosystems Research</h2><img style="display: inline-block" class="img-h" src="crestLogo.png"/><img style="display: inline-block" class="img-h ml-2" src="pshsevc.png"/>
		</div>
		<!-- ------------------------------------------------------------<NAVBAR>------------------------------------------------------- -->

		<!-- ----------------------------------------------------------<UPPER NAVBAR>---------------------------------------------------- -->
		<nav class="navbar navbar-expand-md navbar-dark mb-0 sticky-top navBar1 py-0">
			<a class="navbar-brand" href="index.php"><img src="logoTemp.png" class="logo"><span id="brandTitle">BiVER</span></a>
					
			<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
				<span class="navbar-toggler-icon"></span>
			</button>
				
			<div class="collapse navbar-collapse" id="collapse_target">

		<!-- ------------------------------------------------------------<PROFILE>------------------------------------------------------- -->
				<ul class="navbar-nav mr-auto">
				    <li class="nav-item">
						<a class="nav-link" href="#" id="profile">
						<img src="profilePic.png" class="dp">&nbsp;&nbsp; Username</a>
					</li>
				</ul>
		<!-- ------------------------------------------------------------<PROFILE/>------------------------------------------------------ -->
				<ul class="navbar-nav ml-auto">
					<li class="nav-item d-md-none">
						<a class="nav-link" href="Members.php" id="members">Members <i class="fas fa-user"></i></a>
					</li>
					<li class="nav-item d-md-none">
						<a class="nav-link" href="Updates.php" id="updates">Updates <i class="fas fa-user-edit"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link d-md-none" href="entry_researcher.php" id="submissions">Add Submission <i class="fas fa-user-edit"></i></a>
					</li>					
					<li class="nav-item d-md-none">
						<a class="nav-link" href="datasets.php" id="datasets">Datasets</a>
					</li>		
					<li class="nav-item">
						<a class="nav-link" href="#" id="activities">Activities <i class="fas fa-running"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" id="contactUs">Contact Us <i class="fas fa-phone"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Publications</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Announcements</a>
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
		<!-- ----------------------------------------------------------<UPPER NAVBAR/>---------------------------------------------------- -->

		<!-- ----------------------------------------------------------<LOWER NAVBAR>---------------------------------------------------- -->
		<nav class="navBar2 navbar navbar-expand-md navbar-dark mb-0 sticky-top d-none d-md-flex shadow">		
			<div class="collapse navbar-collapse flex-column ml-lg-0 ml-3" id="navbarCollapse">
   	        	<ul class="navbar-nav mx-auto mb-1 unav">						
					<li class="nav-item">
						<a class="nav-link py-0 mx-2" href="Members.php" id="members">Members <i class="fas fa-user"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link py-0 mx-2" href="Updates.php" id="updates">Updates <i class="fas fa-user-edit"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link py-0 mx-2" href="entry_researcher.php" id="submissions">Add Submission <i class="fas fa-user-edit"></i></a>
					</li>					
					<li class="nav-item">
						<a class="nav-link py-0 mx-2" href="datasets.php" id="datasets">Datasets</a>
					</li>														
				</ul>
	            <ul class="navbar-nav flex-row text-center bnav p-0" style="font-size:15px">
	                <li class="nav-item col-md-4 p-0 border-right border-light">
	                    <a class="nav-link py-0 pr-3" href="#">Biodiversity and systematics study of organisms in vulnerable ecosystems</a>
	                </li>
	                <li class="nav-item col-md-4 p-0">
	                    <a class="nav-link py-0 pr-3" href="#">Assessment of quality of water systems in Eastern Visayas</a>
	                </li>
	                <li class="nav-item col-md-4 p-0 border-left border-light">
	                    <a class="nav-link py-0 pr-3" href="#">Computational Model of the Characteristics of the Binahaan River Ecosystem</a>
	                </li>
	            </ul>
        	</div>
		</nav>
		<br>
	<h2 class="text-center">Members Under <?php if($_SESSION['type']=="Admin"){ echo "BiVER Program"; } else { echo $_SESSION['proj'].trim("0"); } ?></h2>
	<br><br>
	<main id="view" class="mx-3">	
	<table class="table mx-auto" style="font-size: 13px">
  <thead>
    <tr>
        <?php if($_SESSION['type']=="Admin"){ echo '<th id="accountID">Account ID</th>'; } ?>
        <?php if($_SESSION['type']=="Admin"){ echo '<th class="d-none d-md-table-cell" scope="col" id="projectID">Project ID</th>'; } ?>
		<th scope="col" id="name">Name</th>
		<?php if($_SESSION['type']=="Admin") { echo '<th scope="col" id="project">Project</th>'; } ?>
		<th class='d-none d-md-table-cell'scope="col" id="organization">Organization</th>
		<th class='d-none d-md-table-cell'scope="col" id="email">Email</th>
		<th class='d-none d-lg-table-cell'scope="col" id="cellNum">Cell Num</th>
		<th scope="col" id="accessType">Access Type</th>
		<th scope="col" id="accessType">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php 
			mysqli_select_db($con, 'str_database');
			if($_SESSION['type']=="Admin"){
				$sql = "select * from account";
			}
			else{
				$sql = "select * from account where ProjectID='" . $_SESSION['proj'] . "'";
			}
			
			$rec = mysqli_query($con, $sql);
		
			while ($data = mysqli_fetch_array($rec)) {
				$accountID = $data['AccountID'];
				echo "<tr>";
				if($_SESSION['type']=="Admin"){ echo "<td>" . $data['AccountID'] . "</td>"; }
				if($_SESSION['type']=="Admin"){ echo "<td class='d-none d-md-table-cell'>" . $data['ProjectID'] . "</td>"; }
				echo "<td>" . $data['Name'] . "</td>";
				if($_SESSION['type']=="Admin"){ echo "<td>" . $data['Project'] . "</td>"; }
				echo "<td class='d-none d-md-table-cell'>" . $data['Organization'] . "</td>";
				echo "<td class='d-none d-md-table-cell'>" . $data['Email'] . "</td>";
				echo "<td class='d-none d-lg-table-cell'>" . $data['CellNum'] . "</td>";
				echo "<td>" . $data['AccessType'] . "</td>";
				if($_SESSION['type']=="Admin"){
					echo "<td><button><a href='edit_admin.php?accountID=$accountID' class='edits'>Edit</a></button>&nbsp;&nbsp;<button><a href='remove_admin.php?accountID=$accountID' class='edits'>Delete</a></button></td>";
				}	
				echo "</tr>";
			}
		?>
  </tbody>
</table>
	</main>
</body>
<script type="text/javascript">

			
			

			$(document).ready(function(){
  				$('[data-toggle="tooltip"]').tooltip(); 
			});

			$(document).ready(function () {
			  	$("a").tooltip({
			    'selector': '',
			    'placement':'top',
			    'container':'body'
			  	});
			});

			(function ($) {
				
			  	$(document).ready(function(){

			  		var counter = 0;

			  		$(".bnav").hide();
			  		$('.bnav').fadeIn();
					$( ".bnav" ).animate({ "max-height": "200px" }, "slow" );
			
				});
			}(jQuery));

		
		</script>
</html>