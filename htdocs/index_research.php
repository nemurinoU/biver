<?php
	$con=mysqli_connect("localhost", "root", "");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else{
		session_start();
		mysqli_select_db($con, 'str_database');
	}
	//if(isset($_SESSION['access'])){var_dump($_SESSION['access']);}
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

		<!-- ---------------------------------------------------------<Icon Header & Styling/>-------------------------------------------------- -->

		<style>
		/*-----------------------------------------<Hompage Styling>----------------------------------------------*/
			
			/*-----------------------------------------<Hompage Styling/>----------------------------------------------*/
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
						if($_SESSION['access']=="Admin" || $_SESSION['access']=="Project Head"){
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
						if ($_SESSION['access']=="Researcher" || $_SESSION['access']=="Admin"){
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
			/*-----------------------------------------<navbar/>----------------------------------------------*/
			.img-h{
				width:50px;
				height:50px;
				position: relative;
				bottom:5px;
			}
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
			/*-----------------------------------------<navbar/>----------------------------------------------*/
		</style>
	</head>
	<body>
		<!-- must include navbar here -->
		<?php include('navbar_research.php'); ?>

		<!-- ------------------------------------------------------------<PROJECTS/>------------------------------------------------------- -->	
		<br>
		<!-- ------------------------------------------------------------<About BiVER>------------------------------------------------------- -->
			
		<h1 class="ml-4 font-weight-bold aboutBiver mb-0">Welcome, <?php echo $_SESSION['active']; ?></h1>

			<div class="container-fluid padding">

		<!-- ------------------------------------------------------------<ROW 1>------------------------------------------------------- -->	

				<div class="row padding text-justify">
					<div class="col-xs-12 col-sm-6 col-md-6 row-eq-height">
						<p class="p-3">
							The Philippines is regarded as a biodiversity hotspot but many of its unique species had lost their habitats, with our country predicted to suffer total environmental collapse and species extinction spasm (Ong, 2004).  This poses a threat to food and nutrition security.  Inventory of this diversity has to be systematically and consistently done and environmental assessments have to be conducted for future and efficient protection of our biological wealth. <br><br>
			
							Eastern Visayas is composed of islands with rich marine and terrestrial resources.  Some of its landscapes are fast emerging as popular ecotourism sites, with anthropogenic activities affecting the health of various ecosystems.  The whole region has also become more vulnerable to stronger typhoons and heavier rainfalls due to climate change.  <strong>The need to document and preserve biodiversity in a region in which only a few research institutions are available to do the job is a must </strong>.  This is also tied up to the need to become more adaptable to our environment in the face of changes in the climate.
						</p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 row-eq-height">
						<div class="jumbotron text-center pb-0 mx-auto">
							<img class="img img-responsive" src="introduction.jpg" alt="forest" /><br>
							<em> Photo taken by Tonido.</em>
						</div>
					</div>
					
				</div>
		<!-- ------------------------------------------------------------<ROW 1/>------------------------------------------------------- -->

		<!-- ------------------------------------------------------------<ROW 2>------------------------------------------------------- -->	
				<div class="row padding text-justify">
					<div class="col-xs-12 col-sm-6 col-md-6 row2">
						<p class="p-3" style="size: 2em;">
							The program shall provide a systematic and regular survey of biodiversity and vulnerable ecosystems in the region.   <strong> Vulnerable ecosystems </strong> are defined in this program as fresh and marine systems which are fragile due to their high susceptibility to anthropogenic activities and/or the functional significance of the habitat.
						</p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<p class="p-3">
							The BiVER program, through the data it can provide, intends to help agencies like the Department of Environment and Natural Resources and Local Government Units in their <strong> policy-making endeavors </strong> and in the creation of <strong> evidence-based resource management programs </strong>.  It also aims to offer PSHS scholars a training ground to develop their research skills, as well as allow them community immersion experience.  The program purports to utilize the qualified S&T manpower resource PSHS-EVC has in its roster of faculty, with the end goal of developing their research capabilities and in making them contributors to knowledge generation.  
						</p>
					</div>
				</div>
			<!-- ------------------------------------------------------------<ROW 2/>------------------------------------------------------- -->	

			<!-- ------------------------------------------------------------<ROW 3>------------------------------------------------------- -->	
				<div class="row padding text-justify imgholder">
					<div class="col-xs-12 col-sm-6 col-md-6 p-3 row-eq-height">
						<div class="jumbotron text-center pb-2 mx-auto">
							<img class="img img-responsive" src="working.jpg" alt="working" /><br>
							<em> Photo taken by Noblejas.</em>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 row-eq-height">
						<p class="p-3">
							The program will focus on four project components: biodiversity and systematics studies, water quality assessment of vulnerable ecosystems, creation of computational models of river system dynamics, and development of a website and database system for storage and communication of research findings.  All four projects will be managed by the 

							<strong> Center for Research in Science Technology </strong>  (CReST) 

							under the PSHS-EVC Research Unit.

						</p>
					</div>
				</div>
			<!-- -----------------------------------------------------------<ROW 3/>------------------------------------------------------- -->	

			<!-- -----------------------------------------------------------<ROW 4>------------------------------------------------------- -->	
				<div class="row padding text-justify row4">
					<div class="col-xs-12 col-sm-6 col-md-6 text-center">
								<img class="img img-responsive p-3 mx-auto" src="tempworking.jpg" alt="working" /><br>
							<em> Photo taken by Noblejas.</em>
						<p class="p-3 text-justify">
								Project sites are chosen for their vulnerability to climate change and to increasing anthropogenic activities.  These are marine protected areas which are fast emerging as ecotourism sites (i.e., Cuatro Islas in Inopacan-Hindang, Leyte, Kalanggaman Island in Palompon, Leyte, San Pedro Bay/Cancabato Bay, Tacloban City); a mangrove forest that has been turned into a tourist site in Hilongos, Leyte; and Lake Danao (Ormoc City) and Lake Bito (McArthur, Leyte), both near the Binahaan River System which is used to extract the drinking water provided to Tacloban City and many municipalities in Leyte.  
						</p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<p class="p-3">
							The program’s objectives are:
						</p>
						<ol class="text-left ">
							<li>
								To document biodiversity of seagrasses, riparian vegetation, mangrove vegetation and associated fungal endophytes through ecological assessment and systematics study
							</li> <br>
							<li>
								To assess quality of selected vulnerable water ecosystems
							</li> <br>
							<li>
								To create a computational model of the relationship between geomorphological characteristics and species population of the Binahaan River 
							</li> <br>
							<li>
								To develop a database system and website for the BiVER program
							</li>
						</ol>
						<p class="p-3">
							All data will be stored and archived in a database system that will be developed by a work group and will eventually be open to the public through a website. Key stages of the program implementation will be monitored for promptness and completeness of work.  Evaluation of the program/projects will be done at regular intervals.
						</p>
					</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							
						</div>
					</div>
					
				</div>
		<!-- -----------------------------------------------------------<ROW 4/>------------------------------------------------------- -->	
			</div>
		
		<!-- -----------------------------------------------------------<About BiVER/>------------------------------------------------------- -->	
		<div class="jumbotron mt-0" id="whatweoffer"><br>
			<h2 class="text-center">Project Sites</h2>
			<div class="jumbotron" style="background-color: unset;">
				<div class="container-fluid padding">
					<div class="row text-center padding">			
						<div class="col-xs-6 col-sm-6 col-md-4 lg-2"><br>
							<div class="boxS">
							<img src="danao.jpg" class="img-m img-responsive"><br><br>
							<h6>Lake Danao</h6>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 lg-2"><br>
							<div class="boxS">
							<img src="bito.jpg" alt="Imageholder.png" class="img-m img-responsive"><br><br>
							<h6>Lake Bito</h6>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 lg-2"><br>
							<div class="boxS">
							<img src="cuatroislas.jpg" alt="Imageholder.png" class="img-m img-responsive"><br><br>
							<h6>Cuatro Islas</h6>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 lg-2"><br>
							<div class="boxS">
							<img src="kalanggaman.jpg" alt="Imageholder.jpg" class="img-m img-responsive"><br><br>
							<h6>Kalanggaman Island</h6>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 lg-2"><br>
							<div class="boxS">
							<img src="sanpedro.jpg" alt="Imageholder.png" class="img-m img-responsive"><br><br>
							<h6>San Pedro Bay</h6>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 lg-2"><br>
							<div class="boxS">
							<img src="cancabato.jpg" alt="cancabato_pic" class="img-m img-responsive"><br><br>
							<h6>Cancabato Bay</h6>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 lg-2"><br>
							<div class="boxS">
							<img src="binahaan.jpg" alt="Imageholder.png" class="img-m img-responsive"><br><br>
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
					<img src="pshsevc.png" class="agency">
					<h5> PSHS-EVC </h5>
				</div>
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<img src="tacloban.jpg" class="agency">
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
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<img src="hilongos.jpg" class="agency">
				</div>
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<img src="inopacan.png" class="agency">
				</div>
			</div>
		</div>

	<div class="page-footer container-fluid">
			<h4 class="ml-4">Copyrights</h4> <br>
			<p class="footerfont ml-4"> All data will be in the public domain unless otherwise stated. </p><br>
			<address class="footerfont ml-4">
				Center for Research in Science Technology <br>
				Pawing, Palo, Leyte <br> 
				6500 <br>
				Philippines <br>
			</address> <br>

	</div>
		<!-- --------------------------------------------------------------<Javascript>--------------------------------------------------------- -->

		<?php include('all_scripts_bottom.php'); ?>

		<!-- --------------------------------------------------------------<Javascript/>-------------------------------------------------------- -->
</body>
</html>

