<?php

$con=mysqli_connect("localhost", "root", "biver2018");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else{
		session_start();
		mysqli_select_db($con, 'str_database');
	}

?>
<!DOCTYPE html>
<html>
<head>
	<?php include ('all_scripts.php'); ?>
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
	</style>
	<title>Articles</title>
</head>
<body>
	<?php include('navbar.php'); ?>
	<main class="content-wrapper">
		<header class="p-3 row">
			<div class="col-xs-3">
				<h2 class="ml-2 d-inline-block">Articles</h2>
			</div>
			<div class="col-xs-9 ml-auto">
				<?php
					if (isset($_SESSION['active'])){
						echo "<a href='doc-maker.php'><button class='btn btn-success d-none d-sm-inline'><i class='fas fa-plus' data-toggle='modal' data-target='#createModal'></i> Create New</button></a>";
					}
				?>
				
			</div>
		</header>
		<div class="mx-auto" style="max-width: 80%;">
			<?php
				if (isset($_GET['page_no']) && $_GET['page_no']!="") {
				$page_no = $_GET['page_no'];
				} else {
					$page_no = 1;
			        }

				$total_records_per_page = 10;
			    $offset = ($page_no-1) * $total_records_per_page;
				$previous_page = $page_no - 1;
				$next_page = $page_no + 1;
				$adjacents = "2"; 

				$result_count = mysqli_query($con,"SELECT COUNT(*) As total_records FROM `articles` where article_status = 'Active'");

				$total_records = mysqli_fetch_array($result_count);
				$total_records = $total_records['total_records'];
			    $total_no_of_pages = ceil($total_records / $total_records_per_page);
				$second_last = $total_no_of_pages - 1; // total page minus 1

			    $result = mysqli_query($con,"SELECT * FROM `articles` ORDER BY article_datetime DESC LIMIT $offset, $total_records_per_page");
			    while($row = mysqli_fetch_array($result)){
			    	if($row['article_status'] == "Active"){
			    		echo "<div class='card mb-3'>";
			    		echo "<img class='card-img-top' data-src='static/img/placeholder.png' alt='Card image cap'>";
			    		echo "<div class='card-body'>";
			    			echo "<h4 class='card-title'> <a href='article.php?id=" . $row['article_id'] . "'>" . $row['article_title'] . "</a><small> by " . $row['article_contributor'] . "</small></h4>";
			    			echo "<h5 class='card-title'>" . $row['article_tagline'] . "</h5>";
			    			echo "<p class='card-text'>";
			    			echo substr($row['article_content'], 0, 300) . "..." . " <a class='badge badge-info' href='article.php?id=" . $row['article_id'] . "'>Read more</a>";
			    			echo "</p>";
			    			echo "<p class='card-text text-right'><small class='text-muted'>" . $row['article_datetime'] . "</small></p>";
			    		echo "</div>";
			    		echo "</div>";
			    	}
			    }
				mysqli_close($con);
			?>
		</div>
			
		
		

		<nav aria-label="Page navigation example">
			<div class='text-center' style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
				<strong>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
			</div>
			<ul class="pagination justify-content-center">
				<?php if($page_no > 1){ echo "<li class='page-item'><a class='page-link' href='?page_no=1'>&lsaquo;&lsaquo; First </a></li>"; } ?>
			    
				<li <?php if($page_no <= 1){ echo "class='disabled page-item'"; } ?>>
					<a class="page-link"<?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?>>Previous</a>
				</li>
			       
			    <?php 
				if ($total_no_of_pages <= 10){  	 
					for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
						if ($counter == $page_no) {
					   echo "<li class='page-item active'><a class='page-link'>$counter</a></li>";	
							}else{
			           echo "<li class='page-item'><a class='page-link' href='?page_no=$counter'>$counter</a></li>";
							}
			        }
				}
				elseif($total_no_of_pages > 10){
					
				if($page_no <= 4) {			
				 for ($counter = 1; $counter < 8; $counter++){		 
						if ($counter == $page_no) {
					   echo "<li class='page-item active'><a class='page-link'>$counter</a></li>";	
							}else{
			           echo "<li class='page-item'><a class='page-link' href='?page_no=$counter'>$counter</a></li>";
							}
			        }
					echo "<li class='page-item'><a class='page-link>...</a></li>";
					echo "<li class='page-item'><a class='page-link' href='?page_no=$second_last'>$second_last</a></li>";
					echo "<li class='page-item'><a class='page-link' href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
					}

				 elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {		 
					echo "<li class='page-item'><a class='page-link' href='?page_no=1'>1</a></li>";
					echo "<li class='page-item'><a class='page-link' href='?page_no=2'>2</a></li>";
			        echo "<li class='page-item'><a class='page-link' >...</a></li>";
			        for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {			
			           if ($counter == $page_no) {
					   echo "<li class='page-item active'><a>$counter</a></li>";	
							}else{
			           echo "<li class='page-item'><a class='page-link' href='?page_no=$counter'>$counter</a></li>";
							}                  
			       }
			       echo "<li class='page-item'><a class='page-link'>...</a></li>";
				   echo "<li class='page-item'><a  class='page-link' href='?page_no=$second_last'>$second_last</a></li>";
				   echo "<li class='page-item'><a  class='page-link' href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";      
			            }
					
					else {
			        echo "<li class='page-item'><a class='page-link' href='?page_no=1'>1</a></li>";
					echo "<li class='page-item'><a class='page-link' href='?page_no=2'>2</a></li>";
			        echo "<li class='page-item'><a class='page-link'>...</a></li>";

			        for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
			          if ($counter == $page_no) {
					   echo "<li class='page-item active'><a class='page-link'>$counter</a></li>";	
							}else{
			           echo "<li class='page-item'><a class='page-link' href='?page_no=$counter'>$counter</a></li>";
							}                   
			                }
			            }
				}
				?>
			    
				<li class="page-item" <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
				<a class="page-link" <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>>Next</a>
				</li>
			    <?php if($page_no < $total_no_of_pages){
					echo "<li class='page-item'><a class='page-link' href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
					} ?>
			</ul>
		</nav>
		


		<br /><br />
		</div>
	</main>
	<!-- --------------------------------------------------------------<Javascript>--------------------------------------------------------- -->
    <link rel="import" href="all_scripts_bottom.php">
	<!-- --------------------------------------------------------------<Javascript/>-------------------------------------------------------- -->
</body>
</html>
