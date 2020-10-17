<div class="jumbotron text-center" style="margin-bottom: 0px" id="header">		
			<img style="display: inline-block" class="img-h" src="pcaarrd.jpg"/><h2 style="display: inline-block" class="mx-2">Biodiversity and Vulnerable Ecosystems Research</h2><img style="display: inline-block" class="img-h" src="crestLogo.png"/><img style="display: inline-block" class="img-h ml-2" src="pshsevc.png"/>
		</div>
		<!-- ------------------------------------------------------------<NAVBAR>------------------------------------------------------- -->

		<!-- ----------------------------------------------------------<UPPER NAVBAR>---------------------------------------------------- -->
		<nav class="navbar navbar-expand-md navbar-dark mb-0 sticky-top navBar1 py-0">
			<a class="navbar-brand" href="./"><img src="logoTemp.png" class="logo"><span id="brandTitle">BiVER</span></a>
					
			<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
				<span class="navbar-toggler-icon"></span>
			</button>
				
			<div class="collapse navbar-collapse" id="collapse_target">

		
		
				<ul class="navbar-nav mx-auto">
					<li class="nav-item">
						<a class="nav-link" href="admin_view_accounts.php" id="members">
							<span class="d-xs-none d-md-inline-block" for="members">Members</span>&nbsp;<i class="fas fa-user"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="update-test.php" id="updates">
							<span class="d-xs-none d-md-inline-block" for="updates">Updates</span>&nbsp;<i class="fas fa-bell"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="submissions.php" id="submissions">
							<span class="d-xs-none d-md-inline-block" for="submissions">Submissions</span>&nbsp;<i class="fas fa-user-edit"></i></a>
					</li>					
					<li class="nav-item d-md-none">
						<a class="nav-link" href="datasets.php" id="datasets">Datasets</a>
					</li>		
					<li class="nav-item d-md-none">
						<a class="nav-link" href="activities.php" id="activities">Activities <i class="fas fa-running"></i></a>
					</li>
					<li class="nav-item d-md-none">
						<a class="nav-link" href="#">Publications</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Announcements<i class="fas fa-megaphone"></i></a>
					</li>			
					<li class="nav-item" id="something">
						<a class="nav-link"  href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
					</li>
					<li class="nav-item" id= "login">
						<a class="nav-link"  href="login.php" ><i class="fas fa-sign-in-alt"></i> Login</a>
					</li>
				</ul>
				<!-- ------------------------------------------------------------<PROFILE>------------------------------------------------------ -->
				<div class="d-none d-md-block" style="width:170px">
					<ul class="navbar-nav ml-auto profile">
					    <li class="nav-item profile" >
							<a class="nav-link profile" href="settings.php">
							<img src="profilePic.png" class="dp">&nbsp;&nbsp; <?php echo $_SESSION['active']; ?></a>
						</li>
				</ul>
				<!-- ------------------------------------------------------------<PROFILE/>------------------------------------------------------ -->
				</div>
			</div>		
		</nav>
		
