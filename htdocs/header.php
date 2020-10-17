<style>
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
			.navBar1{
				font-size:16px;
				background-color: #2c3e50;
			}
			.navBar2{
				font-size:16px;
				height:35px;
				top:55px;
				background-color: #576574;
			}			
			.navBar3{
				font-size:16px;
				height:35px;
				top:55px;
				background-color: green;
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
</style>

<div class="jumbotron" style="margin-bottom: 0px" id="header">		
			<h1 class="text-center">Biodiversity & Vulnerable Ecosystems Research</h1>
		</div>
		<!-- ------------------------------------------------------------<NAVBAR>------------------------------------------------------- -->

		<!-- ----------------------------------------------------------<UPPER NAVBAR>---------------------------------------------------- -->
		<nav class="navbar navbar-expand-md navbar-dark mb-0 sticky-top navBar1 py-0">
			<a class="navbar-brand" href="#"><img src="logoTemp.png" class="logo"><span id="brandTitle">BiVER</span></a>
					
			<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
				<span class="navbar-toggler-icon"></span>
			</button>
				
			<div class="collapse navbar-collapse" id="collapse_target">

		<!-- ------------------------------------------------------------<PROFILE>------------------------------------------------------- -->
				<ul class="navbar-nav mr-auto">
				    <li class="nav-item">
						<a class="nav-link" href="#" id="profile">
						<img src="profilePic.png" class="dp">&nbsp;&nbsp; Username</a>
					</li>
				</ul>
		<!-- ------------------------------------------------------------<PROFILE/>------------------------------------------------------ -->
				<ul class="navbar-nav ml-auto">
					<li class="nav-item d-md-none">
						<a class="nav-link" href="Members.php" id="members">Members <i class="fas fa-user"></i></a>
					</li>
					<li class="nav-item d-md-none">
						<a class="nav-link" href="Updates.php" id="updates">Updates <i class="fas fa-user-edit"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link d-md-none" href="entry_researcher.php" id="submissions">Add Submission <i class="fas fa-user-edit"></i></a>
					</li>					
					<li class="nav-item d-md-none">
						<a class="nav-link" href="datasets.php" id="datasets">Datasets</a>
					</li>		
					<li class="nav-item">
						<a class="nav-link" href="#" id="activities">Activities <i class="fas fa-running"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" id="contactUs">Contact Us <i class="fas fa-phone"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Publications</a>
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
		<!-- ----------------------------------------------------------<UPPER NAVBAR/>---------------------------------------------------- -->

		<!-- ----------------------------------------------------------<LOWER NAVBAR>---------------------------------------------------- -->
		<nav class="navbar navbar-expand-md navbar-dark mb-0 navBar2 sticky-top d-none d-md-flex shadow">
				
				<ul class="navbar-nav mx-auto">						
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
						<a class="nav-link" href="datasets.php" id="datasets">Datasets</a>
					</li>														
				</ul>
		</nav>
		<!-- ----------------------------------------------------------<LOWER NAVBAR/>--------------------------------------------------- -->
		<!-- ----------------------------------------------------------<PROJECTS NAVBAR>---------------------------------------------------- -->
		<nav class="navbar navbar-expand-md navbar-dark mb-3 navBar3 sticky-top d-none d-md-flex shadow" id="navbar3">
												
		</nav>