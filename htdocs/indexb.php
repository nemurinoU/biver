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

		<!-- ---------------------------------------------------------<Icon Header & Styling/>-------------------------------------------------- -->

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
			  height:120px; 
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
				font-size:21px;

			}
			#projectImage{
				width:100%;
				height:auto;
			}
			img.agency{
				height: 200px;
				width: 200px;
			}
			.agency{
				margin-top:10px;
			}
			.calculated-width {
			    width: -webkit-calc(100% - 60px);
			    width:    -moz-calc(100% - 60px);
			    width:         calc(100% - 60px);
			}​
			div.tooltip-inner {
			    max-width: 250px;
			}
			.box{
				background-color: #009432;
			}
			.row2{
				background-color: #2f3640;
				color:white;
			}
			.tempPic{
				background-color: black;
				width:100%;
			}
			.row4{
				background-color: #095b20;
				color:white;
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
			/*-----------------------------------------<navbar/>----------------------------------------------*/
		</style>
	</head>
	<body>	
		<?php
			require 'header.php';
			?>
		<div class="container-fluid padding">
			<div class="row padding text-left projects">
				<a  class="col-xs-12 col-sm-6 col-md-4 nounderline row-eq-height" href="#" data-toggle="tooltip" data-placement="right" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas bibendum ac felis id commodo. Etiam mauris purus, fringilla id tempus in, mollis vel orci. Duis ultricies at erat eget iaculis.">
				<div class="box position-relative shadow-lg">								
					<h5>Biodiversity and systematics of organisms in vulnerable ecosystems</h5>
					
									
				</div>				
				</a>
				<a  class="col-xs-12 col-sm-6 col-md-4 nounderline row-eq-height position-relative" href="#" data-toggle="tooltip" data-placement="bottom" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas bibendum ac felis id commodo. Etiam mauris purus, fringilla id tempus in, mollis vel orci. Duis ultricies at erat eget iaculis.">			
					<div class="box position-relative shadow-lg">
						<h5>Assessment of quality of water systems in Eastern Visayas</h5>
						
											
					</div>
				</a>
				<a  class="col-xs-12 col-sm-12 col-md-4 nounderline row-eq-height position-relative" href="#" data-toggle="tooltip" data-placement="left" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas bibendum ac felis id commodo. Etiam mauris purus, fringilla id tempus in, mollis vel orci. Duis ultricies at erat eget iaculis.">				
					<div class="box position-relative shadow-lg">
						<h5>A Computational Model of the Characteristics of the Binahaan River Ecosystem</h5>
						
						
					</div>
			   </a>
			</div>
		</div>

		<!-- ------------------------------------------------------------<PROJECTS/>------------------------------------------------------- -->	
		<br>
		<!-- ------------------------------------------------------------<About BiVER>------------------------------------------------------- -->

			
		<h1 class="ml-4 font-weight-bold">The BiVER Project</h1>

			<div class="container-fluid padding">
					<?php
						$sql = "SELECT * FROM aboutBiVER;";
						$data = mysqli_query($con,$sql);
						$cnt = 0;
						while($rows = mysqli_fetch_array($data)){
							if($cnt%2==0){
								echo '<div class="row ';
								if($cnt==2||$cnt==4){ echo 'row2';}	
								echo ' padding text-justify">';
							}

							echo '<div class="col-xs-12 col-sm-6 col-md-6 row-eq-height">';
							if($cnt==1||$cnt==4||$cnt==6){
								echo '<div class="jumbotron tempPic"></div>';
							}
							else {
								echo '<p class="p-3">'.$rows["value"].'</p>';
							}
							echo "</div>";
							if($cnt%2==0){
								echo '</div>';
							}
							$cnt++;
						} 
					?>
				</div>
			</div>
					
		
		<!-- -----------------------------------------------------------<About BiVER/>------------------------------------------------------- -->	
		<div class="jumbotron" id="whatweoffer">
			<h2>Project Sites</h2><br>
			<div class="jumbotron" id="datasetH">
				<h5 class="text-left padding"> Datasets for Collected Specimen and Water Quality </h5>
				<div class="container-fluid padding">
					<div class="row text-center padding">			
						<div class="col-xs-6 col-sm-6 col-md-4 lg-2"><br>
							<div class="boxS">
							<a class="nav-link" href="Project1.php"><img src="ImageHolder.png" class="img-responsive"></a>
							<h6>Algae</h6>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 lg-2"><br>
							<div class="boxS">
							<a class="nav-link" href="Project1.php"><img src="ImageHolder.png" class="img-responsive"></a>
							<h6>Fungal Endophytes</h6>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 lg-2"><br>
							<div class="boxS">
							<a class="nav-link" href="Project1.php"><img src="ImageHolder.png" class="img-responsive"></a> 
							<h6>Plant</h6>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 lg-2"><br>
							<div class="boxS">
							<a class="nav-link" href="Project1.html"><img src="ImageHolder.png" class="img-responsive"></a>
							<h6>Seagrass</h6>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 lg-2"><br>
							<div class="boxS">
							<a class="nav-link" href="Project1.html"><img src="ImageHolder.png" class="img-responsive"></a>
							<h6>Water Systems</h6>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 lg-2"><br>
							<div class="boxS">
							<a class="nav-link" href="Project1.html"><img src="ImageHolder.png" class="img-responsive"></a>
							<h6>Binahaan River</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="jumbotron" id="publicationH">
				<a class="nav-link" style="color:white" href="#"><i class="fas fa-arrow-circle-right"></i>  Publication of Different BiVER Projects</a>
			</div>
		</div>
			
			
		</div>
		<div class="jumbotron" id="partner">
			<h2 class="text-center padding">Funding Agency</h2>
			<br>
			<img src="pcaarrd.jpg" alt="pcaarrd" id="fundingimage">
			<h4> DOST - PCAARRD </h4>
			<br><br>
			<h2 class="text-center padding">Partner Agencies</h2>
			<div class="row text-center padding">
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<img src="cenro.png" class="agency">
					<h4> CENRO-BAYBAY </h4>
				</div>
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<img src="cenro.png" class="agency">
					<h4> CENRO-ORMOC </h4>
				</div>
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<img src="pshss.png" class="agency">
				</div>
			
		
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<img src="dagami.jpg" class="agency">
				</div>
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<img src="pastrana.jpg" class="agency">
				</div>
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<img src="palompon.png" class="agency">
				</div>
			</div>
		</div>

		<?php require 'footer.php'; ?>
		<!-- --------------------------------------------------------------<Javascript>--------------------------------------------------------- -->

		<link rel="import" href="all_scripts_bottom.php">

		<!-- --------------------------------------------------------------<Javascript/>-------------------------------------------------------- -->
</body>
</html>

