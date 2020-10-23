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
            /* This is where our CSS starts */
            nav{
                height: 8vh;
                text-align: center;
                left:1%;
                top:10%;
                position: relative;
                background: white;
            }
            a{
                text-decoration: none;
            }
            /*-----*/
            #div1_1{
                overflow: hidden;
                min-width:16vw;
                float: left;
                height:100%;
            }
            #div1_1 img{
                height:100%;
                vertical-align: middle;
            }
            /*-----*/
            #div1_1s{
                display:inline-block;
                height:100%;
                vertical-align: middle;
                padding-right:25%;
                margin-left:7%;
            }
            #div1_1s h1{
                font-size:4.5vh;
                color:#2A5440;
                font-family: Lovelo;
                width:100%;
                border-top:.6vh solid #2A5440;
                border-bottom:.6vh solid #2A5440;
                margin-top:5%;
            }
            /*-----*/
            #div1_2{
                display:inline-block;
                padding-top:2vh;
                padding-bottom:1vh;
                font-size: 3vh;
                border-bottom: .5vh solid #3B7257;
            }
            #div1_2 a:not(#left){
                padding-left:2vw;
            }
            #div1_2 a:not(#right){
                padding-right:2vw;
            }
            #div1_2 a{
                color:#3B7257;
                font-family: Asap-Condensed
            }
            /*-----*/
            #div1_3{
                overflow: hidden;
                min-width:13vw;
                float: right;
                height:100%;
            }
            #div1_3 img{
                padding-top:2.15vh;
                display:inline-block;
                height:50%;
                margin-left:20%;
            }
/*------------------------------------------------------*/
			/*-----------------------------------------<navbar/>----------------------------------------------*/
	
</style>
</head>

		<!---<a class="navbar-brand text-light mx-1" data-toggle="tooltip" data-placement="bottom" title="homepage" style="position:fixed;z-index: 105" href="./"><img src="logoTemp.png" class="logo"><span id="brandTitle"> BiVER</span></a> #can be used for later--->

			<div id="nav">
            <nav>
				
			<?php 
				#$query = mysqli_query($con, "SELECT COUNT(statusreport) FROM filelist WHERE statusreport='pending'");
				#$result = mysqli_fetch_array($query, MYSQLI_NUM);
				#$new_submits = $result[0];
                #commented because sql variables arent declared
			?>
			
            
				<div id="div1_1">
                    <a href="\biverroot/htdocs">
					<img src="static/img/logos/biverlogo.png">
					<div id="div1_1s">
						<h1>BIVER</h1>
					</div>
                    </a>
				</div>
				<div id="div1_2">
					<a id="left" href="announcements.php">News</a>
					<a href="activities.php">Activities</a> 
					<a>Researches</a>
					<a id="right" href="aboutus.php">About</a>
				</div>
				<div id="div1_3">
                    <a class="available"  href="settings.php"></i> Settings </a>
                    <a class="available"  href="logout.php"></i> Logout </a>
					<a href="#"><img src="static/img/icons/search1.png"> </a>
					<a href="login.php"><img src="static/img/icons/login.png"></a>
				</div>
			</nav>
        </div>
    









