<?php

	$con=mysqli_connect("localhost", "root", "");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else{
		session_start();
		mysqli_select_db($con, 'str_database');
		$query = mysqli_query($con,"SELECT * FROM articles WHERE article_id = '". $_GET['id']. "' ");
		
		$article_results = mysqli_fetch_array($query);
	}


?>
<!DOCTYPE html>
<html>
	<head>
		<?php include ('all_scripts.php'); ?>
		<title><?php echo $article_results['article_title']; ?> - BiVER</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="favicon.ico" type="image/ico">
		<style>
			/*-----------------------------------------<Hompage Styling>----------------------------------------------*/
				#aboutBiver{
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
							if ($_SESSION['access']=="Researcher"){
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
				.section1 {
				 
				  background-image: url("introduction.jpg");

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

				

				.card-img-top{

					object-fit: cover;
					height: 500px;
				}
		</style>
	</head>
	<body>
		<?php include('navbar.php'); ?>
		<main>
			
			<article class="col-xs-20 col-xs-offset-20 col-sm-20 row-eq-height p-4  d-block mx-auto" style="max-width: 80%;">
				<!-- <?php echo "<img class='card-img-top' data-src='".  $article_results['article_imgpreview'] ."'>"; ?> -->
				<?php
				if (isset($_SESSION['active'])) {
					if($_SESSION['access'] == "Admin"){
						echo "<a href='article_edit.php?id=". $_GET['id'] . "'> <button class='btn btn-primary d-block mr-auto nounderline text-right col-xs-4'>
							Edit</button></a>
						";
					}
				}
			?>
				<h1 class="text-center"><?php echo $article_results['article_title']; ?></h1>
				<h4 class="text-center"><?php echo $article_results['article_tagline']; ?></h4>
				<p class="blockquote-footer text-right"><small><?php echo $article_results['article_contributor']; ?> | <?php echo $article_results['article_datetime'] ?></small></p>
				<hr>

				<?php echo $article_results['article_content']; ?>
			</article>
		</main>
		
		

	</body>
	<?php include('all_scripts_bottom.php'); ?>
</html>