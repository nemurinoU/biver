<?php include ('config-new.php'); ?>
<html>
<head>
	<?php include ('all_scripts.php'); ?>
	<style>
		/*-----------------------------------------<Hompage Styling>----------------------------------------------*/
			
			/*-----------------------------------------<Hompage Styling/>----------------------------------------------*/
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
			/*-----------------------------------------<navbar/>----------------------------------------------*/
	.img-h{
				width:50px;
				height:50px;
				position: relative;
				bottom:5px;
			}
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
			.border-none{
				border: none;
				border-color: transparent;
			}
			/*-----------------------------------------<navbar/>----------------------------------------------*/
		</style>
</head>
<body>
	<?php include('navbar.php'); ?>
	<main class="content-wrapper">
		<header class="p-3 row">
		<div class="col-xs-3">
			<h2 class="ml-2 d-inline-block"> Announcements</h2>
		</div>
		<div class="col-xs-9 ml-auto">

			<button class="btn btn-success d-xs-inline d-sm-none mr-3"><i class="fas fa-plus" data-toggle="modal" data-target="#createModal"></i></button>
			<button class="btn btn-success d-none d-sm-inline" onclick="location.href = 'doc-maker.php';">Create New</button>
			<button class="btn btn-danger d-none d-sm-inline">Delete All</button>
		</div>
		</header>
	<div class="container mx-auto my-3 p-3 jumbotron" name="article_1">
		<div class="row ">
			<div class="col-xs-3">
				<h4> Accepting New studies</h4>
			</div>
			<div class="col-xs-9 ml-auto ">
				<button type="submit" class="btn btn-primary d-xs-inline d-sm-none mr-3" name="announce_btn" value="Edit" data-toggle="modal" data-target="#editModal"><i class="fas fa-pen"></i></button>
				<button type="submit" class="btn btn-danger d-xs-inline d-sm-none" name="announce_btn" value="Delete"><i class="fas fa-trash"></i></button>
				<input type="submit" class="btn btn-primary d-none d-sm-inline" name="announce_btn" value="Edit" data-toggle="modal" data-target="#editModal"></input>
				<input type="submit" class="btn btn-danger d-none d-sm-inline" name="announce_btn" value="Delete"></input>
			</div>
		</div>
		<div class="row">
			<p class="p-3"> Philippine Science High, thou stand above with thy thoughts that lift and fit all thy sons with wings, 
				to lend us flight in the sowing of our gifts. Oh, Philippine Science High, thy wisdom arms our youth, 
				as we reach for dreams, as we strive for our goals, as we search for the untarnished truth. Philippine
				Science high, thy PSHS in us will grow. <a href="#something">Read more ></a>
			</p>
			
		</div>
	</div>
	<div class="container mx-auto my-3 p-3 jumbotron" name="article_2">
		<div class="row my-3">
			<div class="col-xs-3">
				<h4> Call for papers</h4>
			</div>
			<div class="col-xs-9 ml-auto">
				<button type="submit" class="btn btn-primary d-xs-inline d-sm-none mr-3" name="announce_btn" value="Edit" data-toggle="modal" data-target="#editModal"><i class="fas fa-pen"></i></button>
				<button type="submit" class="btn btn-danger d-xs-inline d-sm-none" name="announce_btn" value="Delete"><i class="fas fa-trash"></i></button>
				<input type="submit" class="btn btn-primary d-none d-sm-inline" name="announce_btn" value="Edit" data-toggle="modal" data-target="#editModal"></input>
				<input type="submit" class="btn btn-danger d-none d-sm-inline" name="announce_btn" value="Delete"></input>
			</div>
		</div>
		<div class="row">
			<p class="p-3"> Philippine Science High, thou stand above with thy thoughts that lift and fit all thy sons with wings, 
				to lend us flight in the sowing of our gifts. Oh, Philippine Science High, thy wisdom arms our youth, 
				as we reach for dreams, as we strive for our goals, as we search for the untarnished truth. Philippine
				Science high, thy PSHS in us will grow. <a href="#something">Read more ></a>
			</p>

		</div>
	</div>
	</div>
	<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title border-none" id="announce_title" name="announce_title" readonly>Edit Current Article</h4>
						<button class="close" type="button" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
						</button>
					</div>
				<div class="modal-body">
					<table class="table table-responsive">
						<tr scope="row">
							<td> Title</td>
							<td> <input type="text" name="title" maxlength="250" width="40"></td>
						</tr>
						<tr scope="row">
							<td> Body</td>
							<td><textarea id="announce_content" name="content" cols="30" rows="20"></textarea><td>
						</tr>
					</table>
					
				</div>
				<div class="modal-footer">
						<button class="btn btn-success" type="button" data-dismiss="modal">Save</button>
						<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				</div>
		</div>
		</div>
	</div>
	<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title border-none" id="announce_title" name="announce_title" readonly>New Announcement</h4>
						<button class="close" type="button" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
						</button>
					</div>
				<div class="modal-body">
					<table class="table table-responsive">
						<tr scope="row">
							<td> Title</td>
							<td> <input type="text" name="title" maxlength="250" width="40"></td>
						</tr>
						<tr scope="row">
							<td> Body</td>
							<td><textarea id="announce_content" name="content" cols="30" rows="20"></textarea><td>
						</tr>
					</table>
					
				</div>
				<div class="modal-footer">
						<button class="btn btn-success" type="button" data-dismiss="modal">Save</button>
						<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				</div>
		</div>
		</div>
	</div>
	</main>	
</body>
</html>