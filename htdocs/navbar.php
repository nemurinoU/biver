<head>
<style>
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
			.something{
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
			.nav-link{
				margin-left:3vw !important; 
				margin-right:3vw !important;
			}
			@media (min-width:576px) { 
				.navbar-brand{
					margin-top:3px;
					
				}
			}
			@media (min-width:768px) {
				.navbar-brand{
					margin-top:5px;
					
				}
			}
			@media (min-width:1024px) {
				.back{
					visibility: hidden;
					
				}
			}
			@media (min-width:1200px) {
				.back{
					visibility: visible;
					
				}
			}
			.back:hover{
				cursor: pointer !important;
			}
	
			/*-----------------------------------------<navbar/>----------------------------------------------*/
	
</style>
</head>
	<!--  

		<div class="jumbotron text-center mb-0 mt-2 p-0" id="header">	

		<div class="d-flex justify-content-center">	
			
			<img class="d-none d-sm-block imgh my-2 mx-0" src="pcaarrdPIC.jpg"/>
			    	
			<h1 class="ml-4 mr-3" style="display: inline-block" id="websiteTitle">Biodiversity & Vulnerable <br> Ecosystems Research</h1>		     
			    	
			<img class="d-none d-sm-block imgh my-2 mx-0" src="pshss.jpg"/>

		</div>
	-->	
		
		<a class="navbar-brand text-light mx-1" data-toggle="tooltip" data-placement="bottom" title="homepage" style="position:fixed;z-index: 105" href="./"><img src="logoTemp.png" class="logo"><span id="brandTitle"> BiVER</span></a>



		<nav class="navbar navbar-expand-md navbar-dark mb-0 sticky-top navBar1 py-2 shadow-lg text-light" style="z-index: 100">

			

		<!--	<a class="navbar-brand py-1 ml-2" href="./"><img src="logoTemp.png" class="logo"><span id="brandTitle">BiVER</span></a> -->

			

			<button class="navbar-toggler ml-auto" data-toggle="collapse" data-target="#collapse_target">
				<span class="navbar-toggler-icon"></span>
			</button>
		
				
			<?php 
				$query = mysqli_query($con, "SELECT COUNT(statusreport) FROM filelist WHERE statusreport='pending'");
				$result = mysqli_fetch_array($query, MYSQLI_NUM);
				$new_submits = $result[0];
			?>
			<div class="collapse navbar-collapse" id="collapse_target">
				
				<ul class="navbar-nav mx-auto">
					<!--
					<li class="nav-item ml-5">
						<a class="nav-link" href="admin_view_accounts.php" id="members">Members</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="submissions.php" id="submissions">Submissions
						<?php if($new_submits > 0 && ($_SESSION['access']=="Admin" || $_SESSION['access']=="Project Head")){
							echo "<span class='badge badge-success'> $new_submits </span>";
						}
						?>
						</a>
		-->
					</li>					
					<li class="nav-item">
						<a class="nav-link" href="activities.php" id="activities"><!--<i class="fas fa-running"></i>-->Activities </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="announcements.php"><!--<i class="fas fa-book"></i> -->Announcements</a>
					</li>
					<li class="nav-item something">
						<a class="nav-link"  href="settings.php"><!--<i class="fas fa-sign-out-alt">--></i> Settings </a>
					</li>
					<li class="nav-item something">
						<a class="nav-link"  href="logout.php"><!--<i class="fas fa-sign-out-alt">--></i> Logout </a>
					</li>
					<li class="nav-item" id= "login">
						<a class="nav-link"  href="login.php" ><!--<i class="fas fa-th-list"></i> -->Login </a>
					</li>
				</ul>
			</div>

			<!--
			
			<div class="d-none d-md-block" style="width:170px">
				<ul class="navbar-nav ml-auto profile">
				    <li class="nav-item profile" >
						<a class="nav-link profile" href="settings.php">
						<img src="profilePic.png" class="dp">&nbsp;&nbsp; <?php echo $_SESSION['active']; ?></a>
					</li>
			</ul>
			</div>

			-->

		</nav>









