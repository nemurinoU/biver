<?php
	$con=mysqli_connect("localhost", "root", "biver2018");
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

		

		<link rel="icon" href="favicon.ico" type="image/x-icon">

		<link rel="shortcut icon" href="favicon.ico" type="image/ico">
		<?php include('all_scripts.php'); ?>

		<!-- ---------------------------------------------------------<Icon Header & Styling/>-------------------------------------------------- -->

		
	</head>
	<body>
		<?php include('navbar.php'); ?>
		
		

		<!-- ------------------------------------------------------------<PROJECTS/>------------------------------------------------------- -->	
		<br>
		<!-- ------------------------------------------------------------<About BiVER>------------------------------------------------------- -->

			
		<h1 class="ml-4 font-weight-bold aboutBiver mb-0">Activities</h1>

				
		<!-- -----------------------------------------------------------<ROW 4/>------------------------------------------------------- -->	
		<div class="jumbotron mt-0" id="datagathering"><br>
			<h2 class="text-center " style="font-weight: none;"> Data Gathering</h2>
			<div class="jumbotron" style="background-color: unset;">
				<div class="container-fluid padding">
					<div class="row text-center padding">			
						<div class="col-xs-6 col-sm-6 col-md-4 lg-2"><br>
							<div class="boxS">
							<img data-src="fieldwork1.jpg" class="img-m img-responsive myImages" id="myImg">
							<!--<h6>Caption titles</h6> -->
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 lg-2"><br>
							<div class="boxS">
							<img data-src="fieldwork2.jpg" alt="Imageholder.png" class="img-m img-responsive myImages" id="myImg">
							<!--<h6>Caption titles</h6> -->
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 lg-2"><br>
							<div class="boxS">
							<img data-src="fieldwork3.jpg" alt="Imageholder.png" class="img-m img-responsive myImages" id="myImg">
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 lg-2"><br>
							<div class="boxS">
							<img data-src="fieldwork4.jpg" alt="Imageholder.jpg" class="img-m img-responsive myImages" id="myImg">
							<!--<h6>Caption titles</h6> -->
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 lg-2"><br>
							<div class="boxS">
							<img data-src="fieldwork5.jpg" alt="Imageholder.png" class="img-m img-responsive myImages" id="myImg">
							<!--<h6>Caption titles</h6> -->
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 lg-2"><br>
							<div class="boxS">
							<img data-src="fieldwork6.jpg" alt="Imageholder.png" class="img-m img-responsive myImages" id="myImg">
							<!--<h6>Caption titles</h6> -->
							</div>
						</div>
						
						
					</div>
				</div>
			</div>
		</div>
		<!-- -----------------------------------------------------------<About BiVER/>------------------------------------------------------- -->	
		
		

		<!-- --------------------------------------------------------------<Javascript>--------------------------------------------------------- -->
		<?php include('all_scripts_bottom.php'); ?>
		<!-- --------------------------------------------------------------<Javascript/>-------------------------------------------------------- -->
</body>
</html>

