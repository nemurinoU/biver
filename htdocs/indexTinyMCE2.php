<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>BiVER</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php include('all_scripts.php'); ?>

<style>
			/*-----------------------------------------<Homepage Styling>----------------------------------------------*/
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
			}&#8203;
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
				display: none;			}
			#updates{
				display: none;			}
			#submissions{
				display: none;			}
			#login{
				display: block;			}
			#something{
				display: none;			}
			#bar2{
				display: none;			}
			#datasets{
				display: none;			}
			#profile{
				display: none;			}
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
			#members{
				display: none;			}
			#updates{
				display: none;			}
			#submissions{
				display: none;			}
			#login{
				display: block;			}
			#something{
				display: none;			}
			#bar2{
				display: none;			}
			#datasets{
				display: none;			}
			.profile{
				display: none;			}
			/*-----------------------------------------<PHP CODE/>----------------------------------------------*/
		
			/*-----------------------------------------<navbar>----------------------------------------------*/
			.navBar1{
				font-size:1.25em;
				background-color:#2c3e50;
				/* background-image: linear-gradient(to bottom, rgba(0,0,0,1), rgba(0,0,0,0)); */

			}		
			.footerfont{
				size: 0.5em;
			}
			.imgh{
				width:60px;
				height:60px
			}

			/*-----------------------------------------<navbar/>----------------------------------------------*/
	
</style>
</head>
<body>
	<!--  

		<div class="jumbotron text-center mb-0 mt-2 p-0" id="header">	

		<div class="d-flex justify-content-center">	
			
			<img class="d-none d-sm-block imgh my-2 mx-0" src="static/img/pcaarrdPIC.jpg"/>
			    	
			<h1 class="ml-4 mr-3" style="display: inline-block" id="websiteTitle">Biodiversity & Vulnerable <br> Ecosystems Research</h1>		     
			    	
			<img class="d-none d-sm-block imgh my-2 mx-0" src="static/img/pshss.jpg"/>

		</div>
	-->	
		


		<nav class="navbar navbar-expand-md navbar-dark mb-0 sticky-top navBar1 py-2 shadow-lg">

			

		<!--	<a class="navbar-brand py-1 ml-2" href="./"><img src="static/img/logoTemp.png" class="logo"><span id="brandTitle">BiVER</span></a> -->

			
					
			<button class="navbar-toggler ml-auto" data-toggle="collapse" data-target="#collapse_target">
				<span class="navbar-toggler-icon"></span>
			</button>
		
				
			

			<div class="collapse navbar-collapse" id="collapse_target">
				
				<ul class="navbar-nav mx-auto">
					<li class="nav-item">
						<a class="nav-link" href="Members.php" id="members">Members <i class="fas fa-user"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="update-test.php" id="updates">Updates <i class="fas fa-user-edit"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="submissions.php" id="submissions">Submissions<i class="fas fa-user-edit"></i></a>
					</li>					
					<li class="nav-item mx-5">
						<a class="nav-link" href="activities.php" id="activities"><!--<i class="fas fa-running"></i>-->Activities </a>
					</li>
					<li class="nav-item">
						<a class="nav-link mx-5" href="articles.php"><!--<i class="fas fa-book"></i> -->Articles</a>
					</li>
					<li class="nav-item mx-5" id="something">
						<a class="nav-link" href="logout.php"><!--<i class="fas fa-sign-out-alt">--> Logout </a>
					</li>
					<li class="nav-item mx-5" id="login">
						<a class="nav-link" href="login.php"><!--<i class="fas fa-th-list"></i> -->Login </a>
					</li>
					<li>
						<p class="p-3"> Edit me senpai </p>
					</li>
				</ul>
			</div>

			<!--
			
			<div class="d-none d-md-block" style="width:170px">
				<ul class="navbar-nav ml-auto profile">
				    <li class="nav-item profile" >
						<a class="nav-link profile" href="settings.php">
						<img src="static/img/profilePic.png" class="dp">&nbsp;&nbsp; <br />
<b>Notice</b>:  Undefined index: active in <b>C:\Users\Michael Omisol\Dropbox\STR\navbar-test.php</b> on line <b>381</b><br />
</a>
					</li>
			</ul>
			</div>

			-->

		</nav>



	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>BiVER</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="webcomponents/webcomponents-lite.js"></script>
		<link rel="import" href="all_scripts.php">

<style>
			/*-----------------------------------------<Homepage Styling>----------------------------------------------*/
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
			}&#8203;
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
				display: none;			}
			#updates{
				display: none;			}
			#submissions{
				display: none;			}
			#login{
				display: block;			}
			#something{
				display: none;			}
			#bar2{
				display: none;			}
			#datasets{
				display: none;			}
			#profile{
				display: none;			}
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
			#members{
				display: none;			}
			#updates{
				display: none;			}
			#submissions{
				display: none;			}
			#login{
				display: block;			}
			#something{
				display: none;			}
			#bar2{
				display: none;			}
			#datasets{
				display: none;			}
			.profile{
				display: none;			}
			/*-----------------------------------------<PHP CODE/>----------------------------------------------*/
		
			/*-----------------------------------------<navbar>----------------------------------------------*/
			.navBar1{
				font-size:1.25em;
				background-color:#2c3e50;
				/* background-image: linear-gradient(to bottom, rgba(0,0,0,1), rgba(0,0,0,0)); */

			}		
			.footerfont{
				size: 0.5em;
			}
			.imgh{
				width:60px;
				height:60px
			}

			/*-----------------------------------------<navbar/>----------------------------------------------*/
	
</style>


	<!--  

		<div class="jumbotron text-center mb-0 mt-2 p-0" id="header">	

		<div class="d-flex justify-content-center">	
			
			<img class="d-none d-sm-block imgh my-2 mx-0" src="static/img/pcaarrdPIC.jpg"/>
			    	
			<h1 class="ml-4 mr-3" style="display: inline-block" id="websiteTitle">Biodiversity & Vulnerable <br> Ecosystems Research</h1>		     
			    	
			<img class="d-none d-sm-block imgh my-2 mx-0" src="static/img/pshss.jpg"/>

		</div>
	-->	
		


		<nav class="navbar navbar-expand-md navbar-dark mb-0 sticky-top navBar1 py-2 shadow-lg">

			

		<!--	<a class="navbar-brand py-1 ml-2" href="./"><img src="static/img/logoTemp.png" class="logo"><span id="brandTitle">BiVER</span></a> -->

			
					
			<button class="navbar-toggler ml-auto" data-toggle="collapse" data-target="#collapse_target">
				<span class="navbar-toggler-icon"></span>
			</button>
		
				
			

			<div class="collapse navbar-collapse" id="collapse_target">
				
				<ul class="navbar-nav mx-auto">
					<li class="nav-item">
						<a class="nav-link" href="Members.php" id="members">Members <i class="fas fa-user"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="update-test.php" id="updates">Updates <i class="fas fa-user-edit"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="submissions.php" id="submissions">Submissions<i class="fas fa-user-edit"></i></a>
					</li>					
					<li class="nav-item mx-5">
						<a class="nav-link" href="activities.php" id="activities"><!--<i class="fas fa-running"></i>-->Activities </a>
					</li>
					<li class="nav-item">
						<a class="nav-link mx-5" href="articles.php"><!--<i class="fas fa-book"></i> -->Articles</a>
					</li>
					<li class="nav-item mx-5" id="something">
						<a class="nav-link" href="logout.php"><!--<i class="fas fa-sign-out-alt">--> Logout </a>
					</li>
					<li class="nav-item mx-5" id="login">
						<a class="nav-link" href="login.php"><!--<i class="fas fa-th-list"></i> -->Login </a>
					</li>
					<li>
						<p class="p-3"> Edit me senpai </p>
					</li>
				</ul>
			</div>

			<!--
			
			<div class="d-none d-md-block" style="width:170px">
				<ul class="navbar-nav ml-auto profile">
				    <li class="nav-item profile" >
						<a class="nav-link profile" href="settings.php">
						<img src="static/img/profilePic.png" class="dp">&nbsp;&nbsp; <br />
<b>Notice</b>:  Undefined index: active in <b>C:\Users\Michael Omisol\Dropbox\STR\navbar-test.php</b> on line <b>381</b><br />
</a>
					</li>
			</ul>
			</div>

			-->

		</nav>
		<!-- ------------------------------------------------------------<PROJECTS/>------------------------------------------------------- -->	
		<br>
		<!-- ------------------------------------------------------------<About BiVER>------------------------------------------------------- -->

			
		<h1 class="ml-4 font-weight-bold aboutBiver mb-0">About the Program</h1>

			<div class="container-fluid padding">

		<!-- ------------------------------------------------------------<ROW 1>------------------------------------------------------- -->	

				<div class="row padding text-justify">
					<div class="col-xs-12 col-sm-6 col-md-6 row-eq-height">
						<p id="1" class="p-3">Shann is a great progasdadrammer from hell.</p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 row-eq-height">
						<div class="jumbotron text-center pb-0 mx-auto">
							<img class="img img-responsive" src="introduction.jpg" alt="forest"><br>
							<em> Photo taken by Tonido.</em>
						</div>
					</div>
					
				</div>
		<!-- ------------------------------------------------------------<ROW 1/>------------------------------------------------------- -->

		<!-- ------------------------------------------------------------<ROW 2>------------------------------------------------------- -->	
				<div class="row padding text-justify">
					<div class="col-xs-12 col-sm-6 col-md-6 row2">
						<p id="2" class="p-3" style="size: 2em;">
							The program shall provide a systematic and regular survey of biodiversity and vulnerable ecosystems in the region.   <strong> Vulnerable ecosystems </strong> are defined in this program as fresh and marine systems which are fragile due to their high susceptibility to anthropogenic activities and/or the functional significance of the habitat.
						</p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<p id="3" class="p-3">biver no kakui desu</p>
					</div>
				</div>
			<!-- ------------------------------------------------------------<ROW 2/>------------------------------------------------------- -->	

			<!-- ------------------------------------------------------------<ROW 3>------------------------------------------------------- -->	
				<div class="row padding text-justify imgholder">
					<div class="col-xs-12 col-sm-6 col-md-6 p-3 row-eq-height">
						<div class="jumbotron text-center pb-2 mx-auto">
							<img class="lazy img img-responsive" data-src="static/img/working.jpg" alt="working"><br>
							<em> Photo taken by Noblejas.</em>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 row-eq-height">
						<p id="4" class="p-3">
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
								<img class="lazy img img-responsive p-3 mx-auto" src="static/img/tempworking.jpg" alt="working"><br>
							<em> Photo taken by Noblejas.</em>
						<p id="5" class="p-3 text-justify">
								Project sites are chosen for their vulnerability to climate change and to increasing anthropogenic activities.  These are marine protected areas which are fast emerging as ecotourism sites (i.e., Cuatro Islas in Inopacan-Hindang, Leyte, Kalanggaman Island in Palompon, Leyte, San Pedro Bay/Cancabato Bay, Tacloban City); a mangrove forest that has been turned into a tourist site in Hilongos, Leyte; and Lake Danao (Ormoc City) and Lake Bito (McArthur, Leyte), both near the Binahaan River System which is used to extract the drinking water provided to Tacloban City and many municipalities in Leyte.  
						</p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<p id="6" class="p-3">
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
						<p id="6" class="p-3">
							All data will be stored and archived in a database system that will be developed by a work group and will eventually be open to the public through a website. Key stages of the program implementation will be monitored for promptness and completeness of work.  Evaluation of the program/projects will be done at regular intervals.
						</p>
					</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							
						</div>
					</div>
					
				</div>
		<!-- -----------------------------------------------------------<ROW 4/>------------------------------------------------------- -->	
			
		
		<!-- -----------------------------------------------------------<About BiVER/>------------------------------------------------------- -->	
		<div class="jumbotron mt-0" id="whatweoffer">
<br>
			<h2 class="text-center">Project Sites</h2>
			<div class="jumbotron" style="background-color: unset;">
				<div class="container-fluid padding">
					<div class="row text-center padding">			
						<div class="col-xs-6 col-sm-6 col-md-4 lg-2">
<br>
							<div class="boxS">
							<img data-src="static/img/danao.jpg" class="img-m img-responsive"><br><br>
							<h6>Lake Danao</h6>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 lg-2">
<br>
							<div class="boxS">
							<img data-src="static/img/bito.jpg" alt="Imageholder.png" class="img-m img-responsive"><br><br>
							<h6>Lake Bito</h6>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 lg-2">
<br>
							<div class="boxS">
							<img data-src="static/img/cuatroislas.jpg" alt="Imageholder.png" class="img-m img-responsive"><br><br>
							<h6>Cuatro Islas</h6>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 lg-2">
<br>
							<div class="boxS">
							<img data-src="static/img/kalanggaman.jpg" alt="Imageholder.jpg" class="img-m img-responsive"><br><br>
							<h6>Kalanggaman Island</h6>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 lg-2">
<br>
							<div class="boxS">
							<img data-src="static/img/sanpedro.jpg" alt="Imageholder.png" class="img-m img-responsive"><br><br>
							<h6>San Pedro Bay</h6>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 lg-2">
<br>
							<div class="boxS">
							<img data-src="static/img/cancabato.jpg" alt="cancabato_pic" class="img-m img-responsive"><br><br>
							<h6>Cancabato Bay</h6>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 lg-2">
<br>
							<div class="boxS">
							<img data-src="static/img/binahaan.jpg" alt="Imageholder.png" class="img-m img-responsive"><br><br>
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
			
			
		
		<div class="jumbotron" id="partner">
			<h2 class="text-center padding">Funding Agency</h2>
			<br>
			<img data-src="static/img/pcaarrd.jpg" alt="pcaarrd" id="fundingimage" class="mb-3">
			<h4> DOST - PCAARRD </h4>
			<br><br>
			<h2 class="text-center padding">Partner Agencies</h2>
			<div class="row text-center padding">
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<img data-src="static/img/cenro.png" class="agency mb-2">
					<h5> CENRO-BAYBAY </h5>
				</div>
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<img data-src="static/img/cenro.png" class="agency mb-2">
					<h5> CENRO-ORMOC </h5>
				</div>
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<img data-src="static/img/pshsevc.png" class="agency">
					<h5> PSHS-EVC </h5>
				</div>
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<img data-src="static/img/tacloban.jpg" class="agency">
				</div>
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<img data-src="static/img/dagami.jpg" class="agency">
				</div>
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<img data-src="static/img/pastrana.jpg" class="agency">
				</div>
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<img data-src="static/img/palompon.png" class="agency">
				</div>
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<img data-src="static/img/hilongos.jpg" class="agency">
				</div>
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<img data-src="static/img/inopacan.png" class="agency">
				</div>
			</div>
		</div>

	<div class="page-footer container-fluid">
			<h4 class="ml-4">Copyrights</h4> <br>
			<p class="footerfont ml-4"> All data will be in the public domain unless otherwise stated. </p>
<br>
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
