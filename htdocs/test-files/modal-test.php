<!DOCTYPE html>
<html>
<head>
		<title>Modal Test</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="../favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="../favicon.ico" type="image/ico">

		<script src="../webcomponents/webcomponents-lite.js"></script>
		<link rel="import" href="../all_scripts.php">


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
			    background-image: url("background_1.png")			    
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


			.sectionB1{
				background-image: url("background3.jpg")
			}
			.section1{
				background-image: url("background_2.jpg");
			}
			.section2{
				background-image: url("working.jpg");
			}
			.section3{
				background-image: url("tempworking.jpg")
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
					min-height: 100vh;
				}
				.section1{
					min-height: -webkit-calc(100vh - 50px);
				    min-height:    -moz-calc(100vh - 50px);
				    min-height:         calc(100vh - 50px);			    
				}
				.responsiveLineBreak{
					height:10vh;

				}
				.aboutBiver{					
					text-align: left;
				}	
				.text{
				
					font-size:20px;

				}
				.title{
					margin-left:15%;
					margin-top:5%;
				}
				.section1Left{
					margin-left:15%;
				}


 			}
 			.learnMore{
 				color: #247d2d;
 			}
 			.philippineMap{
 				max-width:200px;
 				
 				height: auto;
 			}
 			.title{
 				font-family: 'Roboto', sans-serif;
 				font-weight: bolder; 
 				font-size: 60px;
 			}
				
		</style>
</head>
<body>
	<?php include('../navbar.php'); ?>
	<main>
	<img class="myImages nailthumb" id="myImg" data-src="../sanpedro.jpg" alt="Midnight sun in Lofoten, Norway" width="300" height="200">

	</main>
	<?php include('../all_scripts_bottom.php'); ?>
</body>
</html>