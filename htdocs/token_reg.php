<?php

	$con=mysqli_connect("localhost", "root", "");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else{
			function validate_phone_number($phone)
			{
			     // Allow +, - and . in phone number
			     $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
			     // Remove "-" from number
			     $phone_to_check = str_replace("-", "", $filtered_phone_number);
			     // Check the length of number
			     // This can be customized if you want phone number from a specific country
			     if (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14) {
			        return '';
			     } else {
			       return $phone_to_check;
			     }

			}

		session_start();
		mysqli_select_db($con, 'str_database');
		$token = filter_var($_POST['token'],FILTER_SANITIZE_STRING);
		$stmt = mysqli_stmt_init($con);
		$_SESSION['attempt'] = 0; // counts initial attempts to input a token
		$result = NULL;

			// if prepared statement is ready
			if(mysqli_stmt_prepare($stmt, "select * from accounts where token=?")){
				// if variables are not binded to parameters properly, display error message and exit code
				if(!mysqli_stmt_bind_param($stmt,'s',$token)){
					echo "Binding parameters failed: ".mysqli_stmt_error($stmt); exit;
				}
				// if prepared statement fails to execute, display error message and exit code
				if(!mysqli_stmt_execute($stmt)){
					echo "Statement execution failed: ".mysqli_stmt_error($stmt); exit;
				}
				$result = mysqli_stmt_get_result($stmt);
			}
			// send error message instead if preparation of statement failed
			else {echo "Statement preparation failed: ".mysqli_stmt_error($stmt); exit;} 
			$data = mysqli_fetch_assoc($result);

			// check if there exists such token
			if(mysqli_num_rows($result>0)){
				$_SESSION['active'] = $data['username'];
				$_SESSION['account_id'] = $data['account_id'];
				$_SESSION['access'] = $data['access'];
				echo "<script type='text/javascript'> 
				alert('Token Confirmed!'); 
				window.location = 'register.php';
				</script>";
			}
			else{ // if attempt is wrong
				$_SESSION['attempt'] = $_SESSION['attempt'] + 1; // increment for each wrong attempt
				if($_SESSION['attempt'] >= 3){
					header("Location: max_attempts_exceeded.php");
				}
			}
			// initialize session ids

			$_SESSION['active'] = $data['username'];
			$_SESSION['account_id'] = $data['account_id'];
			$_SESSION['access'] = $data['access'];
			echo "<script type='text/javascript'> 
			alert('Successfully logged in!'); 
			window.location = 'settings.php';
			</script>";
	}

?>


	
<!DOCTYPE html>
<html>
	<head>
		<title>Admin Entry</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="favicon.ico" type="image/ico">

		<script src="webcomponentsjs-0.7.24/webcomponents-lite.js"></script>
		<link rel="import" href="all_scripts.php">
		<style>
		/*-----------------------------------------<Hompage Styling>----------------------------------------------*/
			#aboutBiver{
			font-family: Verdana;
			width:100vw;
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
			  background-color:#192a56;
			}
			#header{
				background:none;
				font-family: 'Ubuntu', sans-serif;
			}
			#whatweoffer{
				background-color: #1f1f1f;
				color:white;
			}
			img.lazy {
        		width: 700px; 
        		height: 467px; 
        		display: block;
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
				width: auto;
				
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
				width: auto;
				min-height: 300px;
				max-height: 300px;
			}
			.img-m{
				
				min-height: 200px;
				max-height: 200px;
				max-width: 250px;

			}
			.img-s{
				width: 100%;
				min-height: 100px;
				max-height: 100px;
			}
			.jumbotron{
				background-color: white;
			}
			.img-h{
				width:50px;
				height:50px;
				position: relative;
				bottom:5px;
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
			.border-3 {
			    border-width:3px !important;
			}
			#announcements{
				height:550px;
				overflow-y: auto;
			}
			.container-fluid, .parent{
			  height: 100%;
			}
			/*-----------------------------------------<navbar/>----------------------------------------------*/
			@media (max-width:575px) { 
				
			}
			@media (min-width:576px) { 
				
			}
			@media (min-width:768px) { 
				
			}
			@media (min-width:992px) { 
				

			}
			@media (min-width:1200px) { 
				.section0{
			    background-image: url("static/img/background_1.png")			    
				}
				.paragraph1{
					position:relative;
					right: 10%;
				}
				.paragraph2{
					position:relative;
					left: 10%;
				}
			}


			

			.section1{
				background-image: url("static/img/background_2.jpg");
			}
			.section2{
				background-image: url("static/img/working.jpg");
			}
			.section3{
				background-image: url("static/img/tempworking.jpg")
			}
			.section{
				 /* Set a specific height */
			  min-height: auto; 

			  /* Create the parallax scrolling effect */
			  background-attachment: fixed;
			  background-position: center;
			  background-repeat: no-repeat;
			  background-size: cover;
			}
			.translucent{
				background-color: rgba(0, 0, 0,  0.6);
			}
			.text{
				color:white;
			}
			.green1{
				background-color: #218c74;
			}
			.projectSitesImage{
				max-width:600px;
				height:auto;
				margin:auto;
			}
			@media screen and (orientation:portrait) {

				.section0{
					height:auto;
				}
				.responsiveLineBreak{
					height:50px;
				}
				.learnMore{
					display: none;
				}
				.aboutBiver{
					text-align: center;
				}	


			}
 			@media screen and (orientation:landscape) {

 				
 				.section0{
					min-height: -webkit-calc(100vh - 140px);
				    min-height:    -moz-calc(100vh - 140px);
				    min-height:         calc(100vh - 140px);			    
				}
				.section1{
					min-height: -webkit-calc(100vh - 50px);
				    min-height:    -moz-calc(100vh - 50px);
				    min-height:         calc(100vh - 50px);			    
				}
				.responsiveLineBreak{
					height:8vh;

				}
				.aboutBiver{
					margin-left:40px;
					text-align: left;
				}	
				.text{
				
					font-size:20px;

				}


 			}
 			.learnMore{
 				color: #247d2d;
 			}
 			.philippineMap{
 				max-width:350px;
 				min-width:10px;
 				height: auto;
 			}	
		</style>
	</head>

	<body>
		<?php include('navbar.php'); ?>
		<h2 class="text-center my-3">USER REGISTRATION</h2><br>
		<div class="col-xs-12 col-sm-6 col-md-4 rounded mx-auto nounderline" style="background-color:#262729;color:white">
			<form action="<?php $_PHP_SELF;?>" method="post" >
			  	<div class="form-group row mb-3 mt-3 px-3">
			    	<label for="first_name" class="col-sm-3 col-form-label p-0">Access Code</label>
			    	<div class="col-sm-9 p-0">
			      		<input class="form-control" type="text" id="access_code" name="access_code" required>
			    	</div>
			  	</div>
			    <div class="form-group row my-0">
			    	<div class="mx-auto">
			      		<button name="submit" type="submit" class="btn btn-primary mx-1" style="width:100px">Register</button>
			    	</div>
			  	</div>


			</form>
			<a href="settings.php" class="nounderline">
				<button type="submit" id="submit" name="submit" class="btn btn-primary d-block mx-auto mt-3">Back</button>
			</a>
		</div>

		<link rel="import" href="all_scripts_bottom.php">
	</body>
</html>