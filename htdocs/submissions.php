<?php
session_start();
// connection to database
require_once("config-new.php");

if(isset($_SESSION['upload-success'])){
	echo "<script type='text/javascript>
	alert('File upload successful!');
	</script>";
	unset($_SESSION['upload-success']);
}
?>

<html>
<head>
<title>Submissions</title>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="favicon.ico" type="image/ico">

<?php include('all_scripts_special_2.php'); ?>
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
			/*-----------------------------------------<navbar/>----------------------------------------------*/
		</style>

</head>
<?php
// check if user is logged in
if (isset($_SESSION['active'])) {
	$user = $_SESSION['active'];
?>
<body class="content-wrapper fixed-nav sticky-footer" id="page-top">
<!-- Navigation-->
<?php include('navbar.php'); ?>

<!-- body of the file manager -->
<main class="content-wrapper">
<header class="container-fluid border-bottom">
	<h5 class="p-2 m-2 text-center"><strong> Submissions</strong></h5>
</header> 
<section class="container-fluid row mx-auto border border-success p-3" id="toolbar">
	<a role="button" type="button" class="btn btn-outline-success d-inline text-center col mx-1" data-toggle="modal" data-target="#uploadModal" href=""> Upload File </button>
	<a role="button" type="button" class="btn btn-outline-success d-inline text-center col mx-1" href="submissions.php?id=profiles"> Project Files</button>
	<a role="button" type="button" class="btn btn-outline-success d-inline text-center col mx-1" href="submissions.php?id=myfiles"> My  Files</button>
	<a role="button" type="button" class="btn btn-outline-success d-inline text-center col mx-1" href="submissions.php?id=approvals"> For Approvals</button>
		
</section>
<section class="container row mx-auto" id="filelist">
	<span id="filesTitle" class="row mr-auto mt-3">
		<?php
		if(isset($_GET['id'])){
			if($_GET['id']=='projfiles'){
				echo "<h3> Project Files </h3>";			
			}else if($_GET['id']=='myfiles'){		
				echo "<h3> My Files </h3>";
			}else if($_GET['id']=='myfiles'){		
				echo "<h3> For Approvals </h3>";
			}else{}
		}
		?>
	</span>
	<div id="files" class="container-fluid row mt-3">
	<?php
		$stmt=mysqli_stmt_init($con);
		if(isset($_GET['id']){
			if($_GET['id']=='projfiles'){
				$sql = "SELECT * FROM filelist WHERE field2=?";
				$param = filter_var($_SESSION['project'], FILTER_SANITIZE_STRING);
				$value1 = "<i class='fas fa-trash'></i>";
				$value2 = "<i class='fas fa-download'></i>";
				$isApprovals = false;
				$isProjFile = true;
				$formAction1 = "delete-file.php";
				$formAction2 = "download.php";
			}else if($_GET['id']=='myfiles'){
				$sql = "SELECT * FROM filelist WHERE field3=?";
				$param = filter_var($_SESSION['active'], FILTER_SANITIZE_STRING);
				$value1 = "<i class='fas fa-trash'></i>";
				$value2 = "<i class='fas fa-download'></i>";
				$isApprovals = false;
				$isProjFile = false;
				$formAction1 = "delete-file.php";
				$formAction2 = "download.php";
			}else if($_GET['id']=='approvals'){
				$sql = "SELECT * FROM filelist WHERE field2=? AND statusreport='pending'";
				$param = filter_var($_SESSION['project'], FILTER_SANITIZE_STRING);
				$value1 = "Deny";
				$value2 = "Accept";
				$isApprovals = true;
				$isProjFile = false;
				$formAction1 = "move_file.php";
				$formAction2 = "move_file.php";
			}else{ // do nothing }
			if(mysqli_stmt_prepare($stmt,$sql)){
				if(!mysqli_stmt_bind_param($stmt,"s",$param)){
					$_SESSION['error-message']="Binding parameters failed: ".mysqli_stmt_error($stmt);
					$_SESSION['redirect-url'] = $_SERVER['REQUEST_URI'];
					header("Location: error_pages/error_message2.php"); 
				}
				if(!mysqli_stmt_execute($stmt,"s",$param)){
					$_SESSION['error-message']="Binding parameters failed: ".mysqli_stmt_error($stmt);
					$_SESSION['redirect-url'] = $_SERVER['REQUEST_URI'];
					header("Location: error_pages/error_message3.php"); 
				}
				$results = mysqli_stmt_get_results($stmt);
				
				if(mysqli_num_rows($results) == 0){
					echo "<div class='container row mx-auto'><span class='col-xs-12 text-center'>"."No files found"."</span></div>"; 
				}
				else{
					while($data = mysqli_fetch_assoc($results)){
						$project = $data['field2'];
						echo "<div class='container-fluid row mx-auto'>";
						echo "<form class='form-inline method='post' action=''>";
						echo "<span class='col'><input type='text' class='border bg-0' name='file' value='".$data['field5']."' readonly></span>

						echo "<span class='col'><input type='text' class='border bg-0 col-md-hidden' name='date'  value='".$data['field4']."' readonly></span>
						if($isApprovals){
							echo "<span class='col'><input type='text' class='border bg-0' name='status' value='"."Denied"."' hidden></span>
							echo "<span class='col'><input type='text' class='border bg-0' name='id' value='".$data['field1']."' hidden></span>
							echo "<span class='col'><input type='text' class='border bg-0' name='project' value='".$data['field2']."' hidden></span>
							echo "<span class='col'><input type='text' class='border bg-0' name='user' value='".$data['field3']."' hidden></span>
							echo "<span class='col><input type='submit' class='btn btn-danger' value='$value1' formaction='$formaction1'></span>";							
							echo "</form>";
							echo "<form class='form-inline' method='post' action=''>
							echo "<span class='col'><input type='text' class='border bg-0' name='status' value='".$data['statusreport']."' hidden></span>
							echo "<span class='col'><input type='text' class='border bg-0' name='file' value='".$data['field5']."' hidden></span>
							echo "<span class='col'><input type='text' class='border bg-0 col-md-hidden' name='date' value='".$data['field4']."' hidden></span>					
						}
						else{
							echo "<span class='col'><input type='text' class='border bg-0' name='status' value='".$data['statusreport']."' hidden></span>
						}
						echo "<span class='col'><input type='text' class='border bg-0' name='id' value='".$data['field1']."' hidden></span>
						echo "<span class='col'><input type='text' class='border bg-0' name='project' value='".$data['field2']."' hidden></span>
						echo "<span class='col'><input type='text' class='border bg-0' name='user' value='".$data['field3']."' hidden></span>
						if(!$isApprovals && !$isProjFile){
							echo "<button type='submit' class='btn btn-danger' formaction='$formaction1'></button>";
						}
						echo "<button type='submit' class='btn btn-success' formaction='$formaction2'> $value2 </button>";  
						echo "</form>";
						echo "</div>";
					}
				}
			}else{
				$_SESSION['error-message'] = "Binding parameters failed: ".mysqli_stmt_error($stmt);
				$_SESSION['redirect-url'] = $_SERVER['REQUEST_URI'];
				header("Location: error_pages/error-message1.php"); exit;	
			}
		}else{
			$_SESSION['error-message']="Binding parameters failed: ".mysqli_stmt_error($stmt);
			$_SESSION['redirect-url'] = $_SERVER['REQUEST_URI'];
		}
	?>	
	</div>
</section>					
echo "<span class='col'><input type='text' class='border bg-0' name='file' value='".$data['field5'."' readonly></span>
						echo "<span class='col'><input type='text' class='border bg-0' name='file' value='".$data['field5'."' readonly></span>
						echo "<span class='col'><input type='text' class='border bg-0' name='file' value='".$data['field5'."' readonly></span>
						echo "</form>						
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
	$sql = "SELECT * FROM accounts WHERE username='$user'";
	$query = mysqli_query($con,$sql);
	$data = mysqli_fetch_array($query);
	$project = $data['project'];
	$access = $_SESSION['access'];
	$name = $data['first_name'].",".$data['middle_name'].",".$data['last_name'];
	echo "<form name=fileform method='post' class='form-horizontal mx-auto' action='insert-file.php' enctype='multipart/form-data'>
	<input type=text class='form-control mb-2' name=date value='".date('Y-m-d')."' hidden>
	<input type=text class='form-control mb-2' name=username value='$user' hidden>
	<input type=text class='form-control mb-2' name=project value='$project' hidden>
	<input type=text class='form-control mb-2' name=access value='$access' hidden>
	<input type=text class='form-control mb-2' name=name value='$name' hidden>
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
<?php
}else{
	header('Location: login.php');
}
?>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for this page-->
<?php include('all_scripts_bottom_special.php'); ?>
</html>
