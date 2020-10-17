<?php
	$con=mysqli_connect("localhost", "root", "");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else{
		session_start();
		include('test-vars.php'); // for testing 
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>BiVER</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="import" href="all_scripts.php">


	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="favicon.ico" type="image/ico">
	<style>
		/*-----------------------------------------<Hompage Styling>----------------------------------------------*/
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
				font-size:16px;

			}
			#projectImage{
				width:100%;
				height:auto;
			}
			img.agency{
				height: 100px;
				width: 100px;
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
				width: 100%;
				min-height: 300px;
				max-height: 300px;
			}
			.img-m{
				width: 100%;
				min-height: 200px;
				max-height: 200px;
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
			/*-----------------------------------------<navbar/>----------------------------------------------*/
		</style>
</head>
<body>
	<div class="jumbotron text-center" style="margin-bottom: 0px" id="header">		
	<?php include('navbar-data.php'); ?>
	<h2 class="text-center">Submissions</h2><br><br>
	<main id="view" class="mx-2">
	<table class="table mx-auto" style="font-size: 13px">
  <thead>
   <tr>
   			<th scope="col" id="submissionID">File</th>
   			<?php if ($_SESSION['access']=="Admin" ){
   				echo "<th scope='col' id='accountID'>Account ID</th>";
				echo "<th scope='col' id='projectID'>Project ID</th>";
				echo "<th scope='col' id='email'>Contact Email</th>";
   			}
   			?>
			<th scope="col" id="researcher">Researcher</th>
			<th scope="col" id="actions">Actions</th>
		</tr>
	</thead>
	 <tbody>
		<?php 
			mysqli_select_db($con, 'str_database');
			$sql = "select * from submissions where ProjectID='" . $_SESSION['proj'] . "' and Status='Pending'";
			$rec = mysqli_query($con, $sql);
		
			while ($data = mysqli_fetch_array($rec)) {
				$accountID = $data['AccountID'];
				$subnum = $data['SubmissionID'];
				echo "<tr>";
				echo "<form action='download.php' method='post'> ";
				if ($_SESSION['access']=="Admin" ){
					echo "<td>" . $data['AccountID'] . "</td>";
					echo "<td>" . $data['ProjectID'] . "</td>";
					echo "<td>" . $data['Contact'] . "</td>";
					}
				echo "<td>" . $data['Researcher'] . "</td>";
				echo "<td>" . $data['Submission']. "<a href=download_file.php?file=" . $data['submission'] . "Download file</a></td>"; 
				if($_SESSION['type']=="Project Head"){
					echo "<td><button onclick=''><a href='submissionAprovalProjHead.php?action=Accept&submissionId=" . $data['SubmissionID'] . "' class='edits'>Accept</a></button>";
					echo "<button><a href='submissionAprovalProjHead.php?action=Deny&submissionId=". $data['SubmissionID'] ."' class='edits'>Deny</a></button></td>";
				}
				echo "</form>";
				echo "</tr>";
			}
		?>
  </tbody>
</table>
<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Upload a file</h5>
<button class="close" type="button" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
	<?php
	echo "<form name=fileform method='post' class='form-horizontal mx-auto' action='insert-file.php' enctype='multipart/form-data'>
	<input type=text class='form-control mb-2' name=date value='".date('Y-m-d')."' hidden>
	<input type=text class='form-control mb-2' name=username value='$user' hidden>
	<input type=file class='bg-muted form-control padding mb-2' name='uploaded_file'>
	<div class='row'><div class='col-xs-12 mx-auto'><br>
	<input type='submit' class='btn btn-success' value='Submit'></div></div>";
	echo "</form></div>";
	?>
</div>
<div class="modal-footer">
<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
</div>
</div>
</div>
</div>
	</main>
	
</body>
<link rel="import" href="all_scripts_bottom.php">
</html>