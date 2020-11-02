<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
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
			.profile{
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
		</div>


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
						<a class="nav-link"  href="logout.php"><!--<i class="fas fa-sign-out-alt">--></i> Logout </a>
					</li>
					<li class="nav-item mx-5" id= "login">
						<a class="nav-link"  href="login.php" ><!--<i class="fas fa-th-list"></i> -->Login </a>
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
						<img src="static/img/profilePic.png" class="dp">&nbsp;&nbsp; <?php echo $_SESSION['active']; ?></a>
					</li>
			</ul>
			</div>

			-->

		</nav>
<?php
	include("indexTinyMCE2.php");
	$_SESSION['url_include']="indexTinyMCE2.php";
?>
</body>
</html>




