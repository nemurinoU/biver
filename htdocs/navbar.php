<head>
	<style>
		/*PHP CODE FOR WHEN LOGGED IN*/
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
		.available{
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
	
		/*CSS for <nav>*/
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

	    /* This is where our CSS starts */
    	nav{
	        height: 10vh;
	        text-align: center;
	        background-color: white;
	        background-image: url("static/img/logos/biverlogo.png");
	        background-repeat: no-repeat;
	        background-position: 8px 8px;
	        background-size: 8vh;
	      	box-shadow: 1px 2px #888888;
	      	display: block;
	    }
	    a{
	        text-decoration: none;
	    }
	    /*Logo and Title link on Navbar*/
	    #logo-link{
	        min-width:16vw;
	        height: 100%;
	        margin-left: 1%;
	        position: absolute;
	    }
	    #logo-link-text h1{
	        font-size: 4.5vh;
	        color: #2A5440;
	        font-family: Lovelo;
	        border-top: .6vh solid #2A5440;
	        border-bottom: .6vh solid #2A5440;
	        margin-top: 5%;
	        position: inherit;
	    }
		#logo-link-text{
			display: inline-block;
			height: 100%;
			vertical-align: middle;
			padding-right: 25%;
			padding-top: 3%;
			margin-left: 20%;
		}
		/*Navigation bar links directory*/
	    #nav-links{
	        display:inline-block;
	        padding-top: 3vh;
	        padding-bottom: 1vh;
	        font-size: 3vh;
	        border-bottom: .5vh solid #3B7257;
	        position: absolute;
	        left: 36vw;
	    }
	    #nav-links a:not(#left){
	        padding-left:2vw;
	    }
	    #nav-links a:not(#right){
	        padding-right:2vw;
	    }
	    #nav-links a{
	        color:#3B7257;
	        font-family: AsapCondensed-Regular;
	    }

	    /*Login and search bar*/
	    #nav-right{
	        overflow: hidden;
	        min-width:13vw;
	        position: absolute;
	        height: 10vh;
	        left: 85vw;
	    }
	    #nav-right img{
	        padding-top: 2.15vh;
	        height: 50%;
	        margin-left: 2vw;
	    }
			
		</style>
</head>
	<!---<a class="navbar-brand text-light mx-1" data-toggle="tooltip" data-placement="bottom" title="homepage" style="position:fixed;z-index: 105" href="./"><img src="static/img/logoTemp.png" class="logo"><span id="brandTitle"> BiVER</span></a> #can be used for later--->

    <nav>
		<?php
			/***Commented because SQL is still off, please uncomment when SQL is on
			$query = mysqli_query($con, "SELECT COUNT(statusreport) FROM filelist WHERE statusreport='pending'");
			$result = mysqli_fetch_array($query, MYSQLI_NUM);
			$new_submits = $result[0];
			***/
		?>
    
		<div id="logo-link">
            <a href="\biverroot/htdocs">
			<div id="logo-link-text">
				<h1>BIVER</h1>
			</div>
            </a>
		</div>
		<div id="nav-links">
			<a id="left" href="announcements.php">News</a>
			<a href="activities.php">Activities</a> 
			<a>Researches</a>
			<a id="right" href="aboutus.php">About</a>
		</div>
		<div id="nav-right">
            <a class="available"  href="settings.php"></i> Settings </a>
            <a class="available"  href="logout.php"></i> Logout </a>
			<a href="#"><img src="static/img/icons/search1.png"> </a>
			<a href="login.php"><img src="static/img/icons/login.png"></a>
		</div>
		
	</nav>
    









