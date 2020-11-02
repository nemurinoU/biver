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

		<style>
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
			#frame{
				padding-bottom:0px;
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
		<div class="jumbotron" style="margin-bottom: 0px" id="header">
			<h1>Biodiversity and Vulnerable Ecosystems Research</h1>
		</div>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
					<a class="navbar-brand"><img src="static/img/logo.png"></a>
					<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
					<span class="navbar-toggler-icon"></span>
					</button>
				
				<div class="collapse navbar-collapse" id="collapse_target">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link" href="Members.php" id="members">Members <i class="fas fa-user"></i></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="Updates.php" id="updates">Updates <i class="fas fa-user-edit"></i></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="entry_researcher.php" id="submissions">Add Submission <i class="fas fa-user-edit"></i></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="Homepage.php">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="publication.php">Publications</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link" href="datasets.php">Datasets</a>
							</li>							
							<li class="nav-item" id="something">
								<a class="nav-link"  href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
							</li>
							<li class="nav-item" id= "login">
								<a class="nav-link"  href="login.php" ><i class="fas fa-sign-in-alt"></i> Login</a>
							</li>
				       </ul>
				</div>		
		</nav>

	  	<h2 class="text-center">PROJECT 3</h2><br>
	  	<div class="jumbotron bg-dark col-xs-12 col-sm-10 col-md-8 mx-auto text-justify" id="mainframe">
			<div class="jumbotron mb-3">
				<h4 class="text-left padding" id="frame">Abstract</h4>
				<p>This is rather a long-winded paragraph showing the essential details of this project. One key concept is introduced in this sentence. This sentence states the results of the study. Then, this sentence describes the conclusion. Interpretations and possible implications could be stated in this sentence, often reaching two sentences. One thing to remember: an abstract is not a summary. It is rather an outline of key issues in the research.</p>
				<p> <strong> Keywords: </strong> <em> &nbsp; details, results, conclusion, interpretations, outline </em> </p> 
			</div>
			<div class="jumbotron mb-3">
				<h4 class="text-left padding" id="frame">Introduction</h4>
				<p> This is where the background of the project is found. The first introductory sentence must be short and with impact. Fifteen words should be enough. Then, clarify the current situation in the world and why the research is important. Is it broad? Is it narrow? Discuss it with precision. After the audience is well-informed about all the prerequisite details in the research, it's now time to lean on to literature. </p>

				<p>Remember to add figures, tables, and other helpful data in proper format.</p>

				<p> After, state the research questions. <br><br>
					Main question: 
					<ul style="list-style: none;" > 
						<li> Why do we want to answer in this project? </li>
					</ul>
					Sub questions:  
					<ul style="list-style: none;" ><br>
						    <li> What are the variables for evaluation?</li>
							<li> Where is the best place to conduct the project? </li>
							<li> When do you intend to do the project?  </li>
					</ul>
				</p>
			</div>
			<div class="jumbotron mb-3">
				<h4 class="text-left padding" id="frame">Related Literature</h4>
				<p> This is where a current information in the field is found. The first introductory sentence must be short and with impact. Fifteen words should be enough. Then, clarify the current situation in the field. Is it broad? Is it narrow? Discuss it with precision. After the audience is well-informed about all the prerequisite details in the research, always remember to cite the relevant sources appropriately. </p>

				<p>Remember to add figures, tables, and other helpful data in proper format.</p>
			</div>
			<div class="jumbotron mb-3">
				<h4 class="text-left padding" id="frame">Methodology</h4>
				<p> Write how the project should be executed. Keep it accurate, brief, and concise. Around this length should be the introductory paragraph. Remember to include necessary literature which supports your methods. Below this, insert a flow diagram in order to simplify the process and further understanding of the overall steps.</p>

				<p> Here's where the flow diagram must be. </p>

				<p>Remember to add figures, tables, and other helpful data in proper format.</p>
			</div>
			<div class="jumbotron mb-3">
				<h4 class="text-left padding" id="frame">Results</h4>
				<p> Tell what were the outputs for this project. The first introductory sentence must be short and with impact. Fifteen words should be enough. Then, clarify the objectives. Is it accomplished? Are there any lapses in the methodology? Discuss it with precision. After the audience is well-informed about all the prerequisite details, always remember to tell the most important first. </p>

				<p>Remember to add figures, tables, and other helpful data in proper format.</p>
			</div>
			<div class="jumbotron mb-3">
				<h4 class="text-left padding" id="frame">Conclusion</h4>
				<p> End the project paper with style. Create an appropriate and insightful conclusion to the project. Link it to the stakeholders and the research questions. Are there any questions left unanswered? State them with precision.  </p>
			</div>
			<div class="jumbotron mb-0">
				<h4 class="text-left padding" id="frame">Recommendations</h4>
				<p>Remember to add figures, tables, and other helpful data in proper format.</p>
			</div>
			
		</div>

		<div class="page-footer">
			<h5>Contact Information and Copyrights</h5>
		</div>


		<link rel="import" href="all_scripts_bottom.php">


	</body>
</html>