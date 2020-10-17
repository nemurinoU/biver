<?php
	$con=mysqli_connect("localhost", "root", "BIVERproject18");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else{
		mysqli_select_db($con, 'str_database');
		session_start();
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>BiVER</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="favicon.ico" type="image/ico">

		<?php include('all_scripts.php'); ?>


		<style>
		/*-----------------------------------------<Hompage Styling>----------------------------------------------*/
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
					.section1{
					background-image: none;
					background-color: #574fd9;
				}
			}
			@media (min-width:576px) { 
				.rightFooter{
					text-align: center;
				}
				.leftFooter{
					text-align: center;
				}
				.section1{
					background-image: none;
					background-color: #574fd9;
				}
			}
			@media (min-width:768px) { 
				.list{
					max-width: 85%;
				}
				.rightFooter{
					text-align: right;
					border-right: 2px solid white;
				}

				.leftFooter{
					text-align: left;
				}
				.rightFootSpace{
					margin-right:3vw;
				}
				.leftFootSpace{
					margin-left:3vw;
				}
				.section0{
			    background-image: url("backgroundMainC.png")			    
				}

			}
			@media (min-width:992px) { 	
				.list{
					max-width: 70%;
				}
			}
			@media (min-width:1020px) { 
				.paragraph1{
					position:relative;
					right: 10%;
				}
				.paragraph2{
					position:relative;
					left: 10%;
				}
				.section0{
			    background-image: url("backgroundMain2.png")			    
				}
				.section{
					min-height: auto; 
					background-attachment: scroll;
					background-position: center;
					background-repeat: no-repeat;
					background-size: cover;
				}
				
				
			}
			@media (min-width:1200px) { 
				.section0{
			    background-image: url("backgroundMain.png")			    
				}
				
				.list{
					max-width: 60%;
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
				.section1{
					background-image: url("background_2.jpg");
				}

			}


			.sectionB1{
				background-image: url("background3.jpg")
			}
			.section2{
				
				width:100%;
			}
			.section3{
				background-image: url("description1.jpg");	
				width:100%;
			}
			.section4{
				background-image: url("description2.jpg");

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
				.title{
	 				font-size: 35px;
	 				text-align: center;
 				}
 				.text2{
 					font-size: 15px;
 				}
 				.text{
 					font-size:15px;
 				}
 				.text3{
					font-size:15px;
				}
				.text4{
					font-size:15px;
				}
				.text5{
					font-size:15px;
				}
				.textBig{
					font-size:17px;
					color:white;
				}
				.title{
					margin-left:10px;
					margin-right:10px;
				}
				.section1Left{
					margin:auto;
					text-align: justify;
					max-width: 500px;
				}
					.philippineMap{
	 				max-width:200px;
	 				
	 				height: auto;
	 			}
	 			.vw50{
	 				max-width:600px;
	 			}
		 		img.projectSitesImage{
					max-width:650px;
					height:auto;
					
				}
				.carousel{
					max-width:600px;
					height:auto;
				}

			}
 			@media screen and (orientation:landscape) {

 				
 				.section0{
					min-height: 100vh;
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
					text-align: left;
					font-size: 2.25vw;
				}	
				.title{
					margin-left:12.5%;
					margin-top:5%;
					font-size: 3vw;
					text-align: left;
				}
				.section1Left{
					margin-left:15%;
					text-align: left;
					max-width:40vw;
				}
				.description1{
					min-height: 100vh;
				}
				.halfColumnText{
					max-width: 80%;
				}
				.text{
					font-size:1.25vw;
				}
				.text2{
					font-size: 1.5vw;
				}
				.text3{
					font-size:1.25vw;
				}
				.text4{
					font-size: 1.25vw;
				}
				.text5{
					font-size: 1vw;
				}
				.textBig{
					font-size:1.5vw;
					color:white;
				}
				.specialText1{
					max-width:60%;
				}
				.objectives{
					min-height:50vh;
				}
				.philippineMap{
	 				max-width:12vw;
	 				
	 				height: auto;
	 			}
	 			.vw50{
	 				max-width:50vw;
	 			}
		 		img.projectSitesImage{
					width:40vw;
					height:auto;
				}
				.carousel{
					width:40vw;
				}
				
 			}
 			.text{
				font-family: 'Roboto', sans-serif;
				font-weight:300;

				}
			.text2{
				font-family: 'Roboto', sans-serif;
				font-weight:300;
				color:white;
			}
			

 			.learnMore{
 				color: #247d2d;
 			}
 			
 			.title{
 				font-family: 'Roboto', sans-serif;
 				font-weight: 900; 
 			}
 				img.agency{
						height:100px;
						width:auto;
					
				}
				
		</style>
	</head>
	<body>
		<?php include('navbar.php'); ?>
		<!-- ------------------------------------------------------------<PROJECTS/>------------------------------------------------------- -->	
		
		<!-- ------------------------------------------------------------<About BiVER>------------------------------------------------------- -->

	 
	
		<!-- ------------------------------------------------------------<ROW 1>------------------------------------------------------- -->	
			<div class="section section0">

				
				<div class="responsiveLineBreak"></div>

					<h1 class="title px-5">BIODIVERSITY & VULNERABLE <br>ECOSYSTEMS RESEARCH</h1>

					<div class="responsiveLineBreak"></div>

					<div class="mx-4">

					   	<p class="mb-0 pb-3 section1Left text4">BiVER program aims to document and preserve these species in vulnerable ecosystems for the protection and efficient use of our biological wealth. Through the data it can provide to concerned agencies and institutions, it intends to help foster policy-making endeavors in the creation of evidence-based resource management programs.

					  
						</p>

				

					</div>
			
			</div>
			
			<div class="section section1">

				<div class="container-fluid padding mt-0">

					<br><!--temporary-->	

					<h1 class="aboutBiver mb-0 mx-5 mt-3 text-white">About the Program</h1>

					<br><!--temporary-->

				<div class="row padding text-justify align-items-center">

					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					
						<img class="philippineMap mx-auto d-block" src="phillipineMap.png"  alt="...">
									
					</div>

					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-3 my-auto d-block">
								
									<div class="text2 paragraph1">
										<p>
										The Philippines is regarded as a biodiversity hotspot but many of its unique species had lost their habitats, with our country predicted to suffer total environmental collapse and species extinction spasm.  This poses a threat to food and nutrition security.  Inventory of this diversity has to be systematically and consistently done and environmental assessments have to be conducted for future and efficient protection of our biological wealth.
										
										</p>
									</div>
									
					</div>
							
				</div>
				<div class="d-block d-md-none">
					<img class="philippineMap mx-auto d-block" src="region8.png"  alt="...">
				</div>
				
				<div class="row padding text-justify mt-0 align-items-center">

					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 row-eq-height p-3 my-auto d-block" >
									
									<div class="text2 paragraph2">
										<p>
										Eastern Visayas is composed of islands with rich marine and terrestrial resources.  Some of its landscapes are fast emerging as popular ecotourism sites, with anthropogenic activities affecting the health of various ecosystems.  The whole region has also become more vulnerable to stronger typhoons and heavier rainfalls due to climate change.   
										</p>
									</div>
																				
					</div>

					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 row-eq-height d-none d-md-block">
					
						<img class="philippineMap my-auto mx-auto d-block" src="region8.png"  alt="...">
							
						
					</div>
					
					
				</div>

			</div>

				<br><!--temporary-->
				

			</div>
		
		<!-- ------------------------------------------------------------<ROW 1/>------------------------------------------------------- -->

		<div class="container-fluid p-3" style="background-color: #30336b">
			
			<p class="text-center text m-0 py-3 mx-auto vw50">
				<strong>The need to document and preserve biodiversity in a region in which only a few research institutions are available to do the job is a must </strong>. This is also tied up to the need to become more adaptable to our environment in the face of changes in the climate.					
			</p>
		</div>

		<!-- ------------------------------------------------------------<ROW 2>------------------------------------------------------- -->		
		<section class="section section3">
			<div class="m-0 p-0 d-block d-sm-none" style="width:100vw;height:50vw">
				<img class="m-0 p-0 d-block d-sm-none" src="tempPicPhone"  alt="..." style="width:100%;height:auto">
			</div>
			<div class="container-fluid padding">	
				<div class="row padding text-justify justify-content-end p-0 description1">
					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-6 p-0 row-eq-height " style="background-color:#1e272e">					
						<div class="text p-0 mt-0 my-auto d-block">
							<div class="my-auto d-block">
								<p class="p-5 halfColumnText mx-auto my-auto d-block">
									The BiVER program, through the data it can provide, intends to help agencies like the Department of Environment and Natural Resources and Local Government Units in their <strong> policy-making endeavors </strong> and in the creation of <strong> evidence-based resource management programs </strong>.  It also aims to offer PSHS scholars a training ground to develop their research skills, as well as allow them community immersion experience.  The program purports to utilize the qualified S&T manpower resource PSHS-EVC has in its roster of faculty, with the end goal of developing their research capabilities and in making them contributors to knowledge generation.  <br><br>

									The program shall provide a systematic and regular survey of biodiversity and vulnerable ecosystems in the region. Vulnerable ecosystems are defined in this program as fresh and marine systems which are fragile due to their high susceptibility to anthropogenic activities and/or the functional significance of the habitat.
								</p>							
							</div>
						</div>					
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-6 row-eq-height p-0">						
					</div>
				</div>
			</div>
		</section>
			<!-- ------------------------------------------------------------<ROW 2/>------------------------------------------------------- -->	
		
			<!-- ------------------------------------------------------------<ROW 3>------------------------------------------------------- -->	

		<div class="container-fluid p-3" style="background-color:#3d3d3d">
			
			<p class="text-center text m-0 py-3 mx-auto vw50">
				The program will focus on four project components: biodiversity and systematics studies, water quality assessment of vulnerable ecosystems, creation of computational models of river system dynamics, and development of a website and database system for storage and communication of research findings.  All four projects will be managed by the 

				<strong> Center for Research in Science Technology </strong>  (CReST) 

				under the PSHS-EVC Research Unit.			
			</p>
		</div>
		<section class="section section4">
		<div class="m-0 p-0 d-block d-sm-none" style="width:100vw;height:50vw">
			<img class="m-0 p-0 d-block d-sm-none" src="tempPicPhone"  alt="..." style="width:100%;height:auto">
		</div>

			<div class="container-fluid padding">
				<div class="row padding text-justify justify-content-end p-0 description1">
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-6 row-eq-height p-0">						
						<div class="section lazy" data-bg="url(description2.jpg)">
						</div>
					</div>
					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-6 p-0 row-eq-height " style="background-color:#192a56">					
						<div class="text p-0 mt-0 my-auto d-block">
							<div class="my-auto d-block">
								<p class="p-5 halfColumnText mx-auto my-auto d-block">
									Project sites are chosen for their vulnerability to climate change and to increasing anthropogenic activities.  These are marine protected areas which are fast emerging as ecotourism sites (i.e., Cuatro Islas in Inopacan-Hindang, Leyte, Kalanggaman Island in Palompon, Leyte, San Pedro Bay/Cancabato Bay, Tacloban City); a mangrove forest that has been turned into a tourist site in Hilongos, Leyte; and Lake Danao (Ormoc City) and Lake Bito (McArthur, Leyte), both near the 
Binahaan River System which is used to extract the drinking water provided to Tacloban City and many municipalities in Leyte.  Project sites are chosen for their vulnerability to climate change and to increasing anthropogenic activities.  These are marine protected areas which are fast emerging as ecotourism sites (i.e., Cuatro Islas in Inopacan-Hindang, Leyte, Kalanggaman Island in Palompon, Leyte, San Pedro Bay/Cancabato Bay, Tacloban City); a mangrove forest that has been turned into a tourist site in Hilongos, Leyte; and Lake Danao (Ormoc City) and Lake Bito (McArthur, Leyte), both near the Binahaan River System which is used to extract the drinking water provided to Tacloban City and many municipalities in Leyte.  
								</p>							
							</div>
						</div>					
					</div>
				</div>
			</div>
		</section>
			<div style="background-color:#10ac84" class="mb-0 p-3 shadow-lg">
				<p class="textBig specialText1 text-center mx-auto my-auto d-block" style="font-weight: 700">
					The program’s objectives are:
				</p>
			</div>
			<div class="container-fluid padding">
				<div class="row padding text-left p-0 objectives" style="font-weight: 700">
					
					<div class="col-xs-12 col-sm-12 col-md-6 my-auto d-block row-eq-height">
						<ol class="text3 list float-right">
							<li>
								To document biodiversity of seagrasses, riparian vegetation, mangrove vegetation and associated fungal endophytes through ecological assessment and systematics study
							</li> <br>
							<li>
								To assess quality of selected vulnerable water ecosystems
							</li> 
							
						</ol>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 my-auto d-block row-eq-height">
						<ol class="text3 list float-left" start="3">
						
							<li>
								To create a computational model of the relationship between geomorphological characteristics and species population of the Binahaan River 
							</li> <br>
							<li>
								To develop a database system and website for the BiVER program<br><br>
							</li>
						</ol>
					</div>				
				</div>
			</div>
			<div style="background-color:#10ac84" class="mb-0 p-3 shadow-lg">
				<p class="text specialText1 vw50 text-center mx-auto my-auto d-block">
					All data will be stored and archived in a database system that will be developed by a work group and will eventually be open to the public through a website. Key stages of the program implementation will be monitored for promptness and completeness of work.  Evaluation of the program/projects will be done at regular intervals.
				</p>
			</div>
			
			
			
		<!-- -----------------------------------------------------------<About BiVER/>------------------------------------------------------- -->
			
		<div class="container-fluid mt-0 text pb-3 pt-0"><br>
			<h2 class="text-center mt-0 pb-2 pt-0 text-dark">Project Sites</h2>
  <div id="carouselExampleCaptions" class="carousel slide mx-auto mb-3" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
      
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img data-src="lakeDanoFinal.jpg" class="d-block projectSitesImage lazy" alt="...">
        <div class="carousel-caption d-md-block">
        	<div class="translucent p-2 rounded mb-2">
          		<p class="m-0">Lake Danao</p>
          	</div>
        </div>
      </div>
      <div class="carousel-item">
        <img data-src="bitoFinal.jpg" class="d-block projectSitesImage lazy" alt="...">
        <div class="carousel-caption d-md-block">
          <div class="translucent p-2 rounded mb-2">
          		<p class="m-0">Lake Bito</p>
          	</div>
        </div>
      </div>
      <div class="carousel-item">
        <img data-src="cuatroIslasFinal.jpg" class="d-block projectSitesImage lazy" alt="...">
        <div class="carousel-caption d-md-block">
          <div class="translucent p-2 rounded mb-2">
          		<p class="m-0">Cuatro Islas</p>
          	</div>
        </div>
      </div>
      <div class="carousel-item">
        <img data-src="kalanggamanFinal.jpg" class="d-block projectSitesImage lazy" alt="...">
        <div class="carousel-caption d-md-block">
          <div class="translucent p-2 rounded mb-2">
          		<p class="m-0">Kalanggaman Island</p>
          	</div>
        </div>
      </div>
      <div class="carousel-item">
        <img data-src="sanpedroFinal.jpg" class="d-block projectSitesImage lazy" alt="...">
        <div class="carousel-caption d-md-block">
          <div class="translucent p-2 rounded mb-2">
          		<p class="m-0">San Pedro Bay</p>
          	</div>
        </div>
      </div>
      <div class="carousel-item">
        <img data-src="cancabatoFinal.jpg" class="d-block projectSitesImage lazy" alt="cancabato">
        <div class="carousel-caption d-md-block">
         <div class="translucent p-2 rounded mb-2">
          		<p class="m-0">Cancabato Bay</p>
          	</div>
        </div>
      </div>
       <div class="carousel-item">
   		<img class="lazy" data-src="binahaanFinal.jpg" alt="binahaanRiver">
        <div class="carousel-caption d-md-block">
          <div class="translucent p-2 rounded mb-2">
          		<p class="m-0">Binahaan River</p>
          	</div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div> 

	
		</div>
			
			
	
		<div class="jumbotron" id="partner">
			<h2 class="text-center padding">Funding Agency</h2>
			<br>
			<img data-src="pcaarrd.jpg" alt="pcaarrd" id="fundingimage" class="mb-3">
			<h4> DOST - PCAARRD </h4>
			<br><br>
			<h2 class="text-center padding">Partner Agencies</h2>
			<div class="row text-center padding">
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<img data-src="cenro.png" class="agency mb-2">
					<h5> CENRO-BAYBAY </h5>
				</div>
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<img data-src="cenro.png" class="agency mb-2">
					<h5> CENRO-ORMOC </h5>
				</div>
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<img data-src="pshss.png" class="agency mb-2">
					<h5> PSHS-EVC </h5>
				</div>
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<img data-src="tacloban.jpg" class="agency mb-2">
					<h5> TACLOBAN CITY </h5>
				</div>
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<img data-src="dagami.jpg" class="agency mb-2">
					<h5> MUNICIPALITY OF DAGAMI </h5>
				</div>
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<img data-src="pastrana.jpg" class="agency mb-2">
					<h5> MUNICIPALITY OF PASTRANA </h5>
				</div>
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<img data-src="palompon.png" class="agency mb-2">
					<h5> MUNICIPALITY OF PALOMPON </h5>
				</div>
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<img data-src="hilongos.jpg" class="agency mb-2">
					<h5> MUNICIPALITY OF HILONGOS </h5>
				</div>
				<div class="col-xs-12 col-sm-12 col-lg-4">
					<img data-src="inopacan.png" class="agency mb-2">
					<h5> SEAL OF INOPACAN, LEYTE </h5>
				</div>
			</div>
		</div>
<div class="container-fluid padding">
	<div class="row padding">
			<div class="col-xs-12 col-sm-12 col-md-6"></div>
			<div class="col-xs-12 col-sm-12 col-md-6"></div>
		</div>
</div>
	
		<!-- --------------------------------------------------------------<Javascript>--------------------------------------------------------- -->
    	<?php include('all_scripts_bottom.php'); ?>
		<!-- --------------------------------------------------------------<Javascript/>-------------------------------------------------------- -->
</body>

</html>

