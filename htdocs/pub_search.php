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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
		<link href="style.css" rel="stylesheet">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="favicon.ico" type="image/ico">

		<style>
			#search{
				background: #2f3640;
				height: 40px;
				border-radius: 40px;
				padding: 10px;
				color:white;
				width:400px;
				margin:auto;
			}
		
			#profile{
			color: white;
			background-color: #377f30;
			margin-top: 20px;
			height:500px;
			}
			#partner{
				color:black;
				background:none;
				text-align: center; 
				height:500px;

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
				font-family: 'Bree Serif', serif;
				font-weight: bold;
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
			#greetingsuser{
				<?php 
					if(isset($_SESSION['active'])){
						echo "display: block;";
					}
					else {
						echo "display: none;";
					}
				?>
			}
		</style>
	</head>
	<body>
		<?php include('navbar.php') ?>
		<br><br>
		<main class="content-wrapper">
			<header class="jumbotron bg-white ">
				<h2 class="text-center"> Research Title </h2>
			</header>
		
	  		<div class="jumbotron bg-dark col-xs-12 col-sm-10 col-md-8 mx-auto text-justify" id="mainframe">
			<div class="jumbotron mb-3">
				<h4 class="text-left padding" id="frame">Abstract</h4>
				<p>This is rather a long-winded paragraph showing the essential details of this project. One key concept is introduced in this sentence. This sentence states the results of the study. Then, this sentence describes the conclusion. Interpretations and possible implications could be stated in this sentence, often reaching two sentences. One thing to remember: an abstract is not a summary. It is rather an outline of key issues in the research.</p>
				<p> <strong> Keywords: </strong> <em> &nbsp; details, results, conclusion, interpretations, outline </em> </p> 
			</div>
			</div>
			<article class="jumbotron bg-white ">
				<h3 class="text-center"> Preview </h3>
			</article>
			<div id="mainframe" class="container mx-auto">
				<div class="bg-white p-2">
					<?php
						if(isset($_SESSION['pub_id'])){
							// load content here
						}
						else{
							echo "<h3 class='text-center p-3 m-3'>No content found.</h3>";
						}

					?>
				</div>
			</div>

		</main>
		
	</body>
</html>