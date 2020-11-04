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
    		width: 100%;
	        height: 75px;
	        background-color: white;
	      	box-shadow: 0 2px #222222;
	      	position: relative;
	      	z-index: 100;
	    }
	    .nav-container{
	    	width: 95%;
			margin: 0 auto;
			height: 70px;
			overflow: visible;
	    }
	    
	    /*Logo and Title link on Navbar*/
	    .logo-link{
	        height: 100%;
	        width: 33%;
	        float: left;
	    }
	    .logo-link img{
		    width: 65px;
		    height: 65px;
		    border-radius: 50%;
		    margin-top: 5px;
		    float: left;
	    }
	    .logo-link-text{
			height: 100%;
			display: inline-block;
			vertical-align: middle;
			margin-left: 15px;
			margin-top: 16px;
		}
	    .logo-link-text h1{
	        font-size: 30px;
	        color: #3A7157;
	        font-family: Lovelo;
	        border-top: 4px solid #3A7157;
	        border-bottom: 4px solid #3A7157;
	    }

	    /*Navigation Links*/
		.nav-links{
			height: 50%;
			width: 33%;
	        display: inline-block;
	        text-align: center;
	        margin-top: 16px;
	        float: left;
	    }
	    .nav-links a{
	     	color: #3B7257;
	        font-family: AsapCondensed-Medium;
	        font-size: 20px;
	    }
	    .nav-links li{
	    	list-style-type: none;
			padding: 0px;
			height: 100%;
			width: auto;
	        padding: 7px 25px 7px 25px; 
			display: inline-block;
	    }
	    .nav-links li:hover{
	    	background-color: #3B7257;
	    	color: white;
	    	transition: 0.3s;
	    }
	    .nav-links li:hover a{
	    	color: inherit;
	    	transition: 0.01s;
	    }
	    .nav-links ul{
	    	margin: 0 auto;
	    	display: inline-flex;
	    	padding: 0;
	    	border-bottom: 2px solid #3B7257;
	    	overflow: hidden;
	    }
	    .hidden-links{
	    	display: none;
	    }

	    /*Personals in Navigation Right*/
	    .nav-personal{
	    	height: 100%;
	        width: 33%;
	        float: left;
	        text-align: right;
	    }
	    .nav-personal img{
		    width: 35px;
		    height: 35px;
		    margin-top: 20px;
		    margin-left: 20px;
	    }
	    a.icon{
	    	display: none;
	    }

	    /*RESPONSIVE WEBSITE FOR MOBILE DEVICES*/
	     @media only screen and (max-width: 768px){
	     	.logo-link-text h1, .nav-links, .nav-personal{ display: none; }
	    	.nav-container a.icon {
			    float: right;
			    display: block;
			}
			a.icon img{
				width: 3em;
		    	height: 3em;
		    	margin-top: 0.5em;
			}
			.nav-container.responsive { 
				position: relative;
				overflow: visible;
			}
  			.nav-container.responsive a.icon {
   				position: absolute;
    			right: 0;
    			top: 0;
    		}
	 		.nav-container.responsive .nav-links{
			    position: absolute;
			    background: white;
			    text-align: left;
			    display: inline-block;
			    top: 3.656em;
			    right: 0;
			    width: 50%;
			    height: auto;
			    border-right: 2px solid #222222;
			    border-bottom: 2px solid #222222;
			    border-left: 2px solid #222222;
			}
			.nav-container.responsive .nav-links ul,
			.nav-container.responsive .nav-links li,
			.nav-container.responsive .nav-links form{
				position: relative;
				display: block;
				width: 100%;
				overflow: hidden;
			}
			.hidden-links{
				display: block;
			}
	    }
	    .nav-container.responsive .nav-personal form{
	    	position: relative;
	    	margin-top: 1em;
			display: block;
			width: 100%;
			overflow: hidden;
			border-right: 2px solid #222222;
		    border-bottom: 2px solid #222222;
		    border-left: 2px solid #222222;
	    }
	    .nav-personal input[type="text"], .nav-personal input[type="submit"]{
	    	font-size: 1em;
	    	width: 80%;
	    	float: left;
	    }

	</style>
	<script>
		function dropDown() {
		  var x = document.getElementById("myNavContainer");
		  if (x.className === "nav-container") {
		    x.className += " responsive";
		  } else {
		    x.className = "nav-container";
		  }
		}
	</script>
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
    	<div class="nav-container" id="myNavContainer">
    		<!---Logo and Title Link--->
			<div class="logo-link">
				<a href="\biverroot/htdocs/">
	            <img src="static/img/logos/biverlogo.png">

	            <div class="logo-link-text">
					<h1>BIVER</h1>
				</div>
				</a>
			</div>

			<!---Navigation Links--->
			<div class="nav-links">
				<ul>
					<a href="announcements.php"><li>News</li></a>
					<a href="activities.php"><li>Activities</li></a>
					<a href="aboutus.php"><li>About</li></a>
					<a href="login.php" class="hidden-links"><li>Login</li></a>
					<li style="padding: 0.2em 0 0.2em 0; width: 100%;">
						<form class="hidden-links">
							<input type="image" src="static/img/icons/search2.png" alt="Submit Form" />
							<input type="text">	
						</form>
					</li>
				</ul>
			</div>

			<!---Search Bar, Account--->
			<div class="nav-personal">
				<a href="javascript:void(0);" onclick="dropDown()"><img src="static/img/icons/search1.png"> </a>
				<a href="login.php"><img src="static/img/icons/login.png"></a>
				<form class="hidden-links">
					<input type="image" src="static/img/icons/search2.png" alt="Submit Form" />
					<input type="text">	
				</form>
			</div>

			<a href="javascript:void(0);" class="icon" onclick="dropDown()">
				<img src="static/img/icons/dropdown.png">
			</a>

			<!---Navigation Links and Search bar for Mobile Devices--->
		</div>
	</nav>
    









