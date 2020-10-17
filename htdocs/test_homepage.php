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

		<!-- ------------------------------------------------------------<Bootstrap CDN>------------------------------------------------------- -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

		<!-- ------------------------------------------------------------<Bootstrap CDN/>------------------------------------------------------ -->

		<!-- -----------------------------------------------------------<Fonts and Icons>------------------------------------------------------ -->

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

		<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

		<!-- -----------------------------------------------------------<Fonts and Icons/>----------------------------------------------------- -->

		<!-- ----------------------------------------------------------<Icon Header & Styling>-------------------------------------------------- -->

		<link href="style.css" rel="stylesheet">

		<link rel="icon" href="favicon.ico" type="image/x-icon">

		<link rel="shortcut icon" href="favicon.ico" type="image/ico">

		<!-- ---------------------------------------------------------<Icon Header & Styling/>-------------------------------------------------- -->

		<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

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
			/*-----------------------------------------<navbar/>----------------------------------------------*/
		</style>
	</head>
	<body>
		<div class="jumbotron" style="margin-bottom: 0px" id="header">		
			<h1 class="text-center">Biodiversity and Vulnerable Ecosystems Research</h1>
		</div>
		<!-- ------------------------------------------------------------<NAVBAR>------------------------------------------------------- -->

		<nav id="nav_upper" class="navbar navbar-expand-md navbar-dark mb-0 sticky-top navBar1 py-0">
				
		</nav>
		<nav id="nav_lower" class="navBar2 navbar navbar-expand-md navbar-dark mb-0 sticky-top d-none d-md-flex shadow">

		</nav>
		<script>
			$(function(){
  				$("#nav_upper").load("nav_upper.php");
  				$("#nav_lower").load("nav_lower.php");
			});
		</script>
		<!-- ------------------------------------------------------------<NAVBAR/>------------------------------------------------------- -->

		<!-- ------------------------------------------------------------<PROJECTS>------------------------------------------------------- -->

		<div class="container-fluid padding">
			<div class="row padding text-center projects">
				<a  class="col-xs-12 col-sm-6 col-md-4 nounderline row-eq-height" href="#" data-toggle="tooltip" data-placement="bottom" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas bibendum ac felis id commodo. Etiam mauris purus, fringilla id tempus in, mollis vel orci. Duis ultricies at erat eget iaculis.">
				<div class="box position-relative shadow-lg px-3">								
					<h5>Biodiversity and systematics of organisms in vulnerable ecosystems</h5>
					
									
				</div>				
				</a>
				<a  class="col-xs-12 col-sm-6 col-md-4 nounderline row-eq-height position-relative" href="#" data-toggle="tooltip" data-placement="bottom" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas bibendum ac felis id commodo. Etiam mauris purus, fringilla id tempus in, mollis vel orci. Duis ultricies at erat eget iaculis.">			
					<div class="box position-relative shadow-lg px-3">
						<h5>Assessment of quality of water systems in Eastern Visayas</h5>
						
											
					</div>
				</a>
				<a  class="col-xs-12 col-sm-12 col-md-4 nounderline row-eq-height position-relative" href="#" data-toggle="tooltip" data-placement="bottom" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas bibendum ac felis id commodo. Etiam mauris purus, fringilla id tempus in, mollis vel orci. Duis ultricies at erat eget iaculis.">				
					<div class="box position-relative shadow-lg px-3">
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

		<!-- ------------------------------------------------------------<ROW 1>------------------------------------------------------- -->	

				<div class="row padding text-justify">
					<div class="col-xs-12 col-sm-6 col-md-6 row-eq-height">
						<p class="p-3">
							Eastern Visayas is composed of islands with rich marine and terrestrial resources.  Some of its landscapes are fast emerging as popular ecotourism sites, with anthropogenic activities affecting the health of various ecosystems.  The whole region has also become more vulnerable to stronger typhoons and heavier rainfalls due to climate change.  The need to document and preserve biodiversity in a region in which only a few research institutions are available to do the job is a must.  This is also tied up to the need to become more adaptable to our environment in the face of changes in the climate.  
						</p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 p-3 row-eq-height">
						<div class="jumbotron tempPic">
						</div>
					</div>
				</div>
		<!-- ------------------------------------------------------------<ROW 1/>------------------------------------------------------- -->

		<!-- ------------------------------------------------------------<ROW 2>------------------------------------------------------- -->	
				<div class="row padding text-justify mb-4">
					<div class="col-xs-12 col-sm-6 col-md-6 row2">
						<p class="p-3">
							The program shall provide a systematic and regular survey of biodiversity and vulnerable ecosystems in the region.  The program shall provide a systematic and regular survey of biodiversity and vulnerable ecosystems in the region.  Vulnerable ecosystems are defined in this program as fresh and marine systems which are fragile due to their high susceptibility to anthropogenic activities and/or the functional significance of the habitat.

							It aims to have an initial run of two (2) years, with expected outputs to include inventory of flora and fauna (taxonomy and genetic studies), data on environmental quality of ecosystems, development of computational models of economically important river systems in terms of geomorphological characteristics and species population, and development of a BiVER database system and website which will store research data and which will serve as accessible source of information for the public.
						</p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 row2">
						<p class="p-3">
							The BiVER program, through the data it can provide, intends to help agencies like the Department of Environment and Natural Resources and Local Government Units in their policy-making endeavors and in the creation of evidence-based resource management programs.  It also aims to offer PSHS scholars a training ground to develop their research skills, as well as allow them community immersion experience.  The program purports to utilize the qualified S&T manpower resource PSHS-EVC has in its roster of faculty, with the end goal of developing their research capabilities and in making them contributors to knowledge generation.  
						</p>
					</div>
				</div>
			<!-- ------------------------------------------------------------<ROW 2/>------------------------------------------------------- -->	

			<!-- ------------------------------------------------------------<ROW 3>------------------------------------------------------- -->	
				<div class="row padding text-justify">
					<div class="col-xs-12 col-sm-6 col-md-6 p-3 row-eq-height">
						<div class="jumbotron tempPic">
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 row-eq-height">
						<p class="p-3">
							The program will focus on four project components: biodiversity and systematics studies, water quality assessment of vulnerable ecosystems, creation of computational models of river system dynamics, and development of a website and database system for storage and communication of research findings.  The 1st three are basic research projects, with the 3rd one (computational modeling) having a developmental research component, and the 4th project is developmental in nature.  All four projects will be managed by the 

							<strong> Center for Research in Science Technology (CReST) </strong> 

							under the PSHS-EVC Research Unit.

						</p>
					</div>
				</div>
			<!-- -----------------------------------------------------------<ROW 3/>------------------------------------------------------- -->	

			<!-- -----------------------------------------------------------<ROW 4>------------------------------------------------------- -->	
				<div class="row padding text-justify row4 mb-5">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="col">
							<div class="jumbotron tempPic" style="height:25%">
							</div>
						</div>
						<div class="col">
							<p class="p-3">
								Project sites are chosen for their vulnerability to climate change and to increasing anthropogenic activities.  These are marine protected areas which are fast emerging as ecotourism sites (i.e., Cuatro Islas in Inopacan-Hindang, Leyte, Kalanggaman Island in Palompon, Leyte, San Pedro Bay/Cancabato Bay, Tacloban City); a mangrove forest that has been turned into a tourist site in Hilongos, Leyte; and Lake Danao (Ormoc City) and Lake Bito (McArthur, Leyte), both near the Binahaan River System which is used to extract the drinking water provided to Tacloban City and many municipalities in Leyte.  
							</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<p class="p-3">
							The program’s objectives are:
						</p>
						<ol>
							<li>
								To document biodiversity of seagrasses, riparian vegetation, mangrove vegetation and associated fungal endophytes through ecological assessment and systematics study
							</li>
							<li>
								To assess quality of selected vulnerable water ecosystems</li> 
							<li>
								To create a computational model of the relationship between geomorphological characteristics and species population of the Binahaan River 
							</li>
							<li>
								To develop a database system and website for the BiVER program
							</li>
						</ol>
						<p class="p-3">
							All data will be stored and archived in a database system that will be developed by a work group and will eventually be open to the public through a website. Key stages of the program implementation will be monitored for promptness and completeness of work.  Evaluation of the program/projects will be done at regular intervals.
						</p>
					</div>
				</div>
		<!-- -----------------------------------------------------------<ROW 4/>------------------------------------------------------- -->	
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
			<img src="pcaarrd.jpg" alt="pcaarrd" id="fundingimage" class="mb-3">
			<h4> DOST - PCAARRD </h4>
			<br><br>
			<h2 class="text-center padding">Partner Agencies</h2>
			<div class="row text-center padding">
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<img src="cenro.png" class="agency mb-2">
					<h5> CENRO-BAYBAY </h5>
				</div>
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<img src="cenro.png" class="agency mb-2">
					<h5> CENRO-ORMOC </h5>
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

	<div class="page-footer">
			<h5>Copyrights</h5>
	</div>
		<!-- --------------------------------------------------------------<Javascript>--------------------------------------------------------- -->

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



			    
					$(function animate() {
						$(window).scroll(function () {
							if ($(this).scrollTop() > 190 && counter==0){
								$('.bnav').fadeIn();
								$( ".bnav" ).animate({ "max-height": "200px" }, "slow" );
								counter=1;
							}
							else if ($(this).scrollTop() <= 190 && counter==1){
									$( ".bnav" ).animate({ "max-height": "0px" }, "slow" );
									$('.bnav').fadeOut(250);
									counter=0;
								}
							else {
								
							}
						});
					
					});

				});
			}(jQuery));

		
		</script>

		<!-- --------------------------------------------------------------<Javascript/>-------------------------------------------------------- -->
</body>
</html>

