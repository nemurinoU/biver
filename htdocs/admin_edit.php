
<?php
	function validate_phone_number($phone)
	{
	     // Allow +, - and . in phone number
	     $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
	     // Remove "-" from number
	     $phone_to_check = str_replace("-", "", $filtered_phone_number);
	     // Check the length of number
	     // This can be customized if you want phone number from a specific country
	     if (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14) {
	        return '';
	     } else {
	       return $phone_to_check;
	     }
	}
	$con=mysqli_connect("localhost", "root", "");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else{
		session_start();
		mysqli_select_db($con, 'str_database');
		if (isset($_POST['edit'])){

			$accID = $_POST['accID'];
			$project = filter_var($_POST['project'],FILTER_SANITIZE_NUMBER_INT);
			$first_name = filter_var($_POST['first_name'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_LOW|FILTER_FLAG_ENCODE_HIGH);
			$middle_name = filter_var($_POST['middle_name'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_LOW|FILTER_FLAG_ENCODE_HIGH);
			$last_name = filter_var($_POST['surname'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_LOW|FILTER_FLAG_ENCODE_HIGH);
			$org = filter_var($_POST['org'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_LOW|FILTER_FLAG_ENCODE_HIGH);
			$username = filter_var($_POST['username'],FILTER_SANITIZE_STRING);
			$email = filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
			$cellnum = validate_phone_number($_POST['cellnum']);
			$password = $_POST['password'];
			$access_type = filter_var($_POST['accounttype'],FILTER_SANITIZE_STRING);
			$currdate = date('Y-m-d');
			$token = bin2hex(random_bytes(50));
			$ins = "";


			if ($project != ""){
				$ins = "update accounts set project='" . $_POST['project'] . "' where account_id='" . $accID . "'";
				mysqli_query($con, $ins);
			}
			if ($org != ""){
				$ins = "update accounts set org='" . $_POST['org'] . "' where account_id='" . $accID . "'";
				mysqli_query($con, $ins);
			}
			if ($first_name != ""){
				$ins = "update accounts set first_name='" . $_POST['first_name'] . "' where account_id='" . $accID . "'";
				mysqli_query($con, $ins);
			}
			if ($middle_name != ""){
				$ins = "update accounts set middle_name='" . $_POST['middle_name'] . "' where account_id='" . $accID . "'";
				mysqli_query($con, $ins);
			}
			if ($last_name != ""){
				$ins = "update accounts set last_name='" . $_POST['surname'] . "' where account_id='" . $accID . "'";
				mysqli_query($con, $ins);
			}
			if ($project != ""){
				$ins = "update accounts set project='" . $_POST['project'] . "' where account_id='" . $accID . "'";
				mysqli_query($con, $ins);
			}

			if ($username != ""){
				$ins = "update accounts set username='" . $_POST['username'] . "' where account_id='" . $accID . "'";
				mysqli_query($con, $ins);
			}

			if ($password != ""){
				$password = filter_var($_POST['password'],FILTER_SANITIZE_STRING);
				$password = password_hash($password, PASSWORD_DEFAULT);
				$ins = "update accounts set password='" . $password . "' where account_id='" . $accID . "'";
				mysqli_query($con, $ins);
			}
			
			if ($email != ""){
				$ins = "update accounts set email='" . $_POST['email'] . "' where account_id='" . $accID . "'";
				mysqli_query($con, $ins);
			}
			if ($cellnum != ""){
				$ins = "update accounts set cell_num='" . $_POST['cellnum'] . "' where account_id='" . $accID . "'";
				mysqli_query($con, $ins);
			}
			if ($access_type != ""){
				$ins = "update accounts set access='" . $_POST['accounttype'] . "' where account_id='" . $accID . "'";
				mysqli_query($con, $ins);
			}
			header('Location: admin_view_accounts.php');
		}

	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Edit Account</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="favicon.ico" type="image/ico">

		<?php include('all_scripts.php'); ?>
		<style>
		/*-----------------------------------------<Hompage Styling>----------------------------------------------*/
			#aboutBiver{
			font-family: Verdana;
			width:100vw;
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
			@media (max-width:575px) { 
				
			}
			@media (min-width:576px) { 
				
			}
			@media (min-width:768px) { 
				
			}
			@media (min-width:992px) { 
				

			}
			@media (min-width:1200px) { 
				.section0{
			    background-image: url("static/img/background_1.png")			    
				}
				.paragraph1{
					position:relative;
					right: 10%;
				}
				.paragraph2{
					position:relative;
					left: 10%;
				}
			}


			

			.section1{
				background-image: url("static/img/background_2.jpg");
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
			@media screen and (orientation:portrait) {

				.section0{
					height:auto;
				}
				.responsiveLineBreak{
					height:50px;
				}
				.learnMore{
					display: none;
				}
				.aboutBiver{
					text-align: center;
				}	


			}
 			@media screen and (orientation:landscape) {

 				
 				.section0{
					min-height: -webkit-calc(100vh - 140px);
				    min-height:    -moz-calc(100vh - 140px);
				    min-height:         calc(100vh - 140px);			    
				}
				.section1{
					min-height: -webkit-calc(100vh - 50px);
				    min-height:    -moz-calc(100vh - 50px);
				    min-height:         calc(100vh - 50px);			    
				}
				.responsiveLineBreak{
					height:8vh;

				}
				.aboutBiver{
					margin-left:40px;
					text-align: left;
				}	
				.text{
				
					font-size:20px;

				}


 			}
 			.learnMore{
 				color: #247d2d;
 			}
 			.philippineMap{
 				max-width:350px;
 				min-width:10px;
 				height: auto;
 			}	
		</style>
	</head>

	<body>

		<?php include('navbar.php'); ?>
		<center>
	<form action="<?php $_PHP_SELF; ?>" method="post">
		<input type="hidden" value= <?php echo $_GET['accountID'] ?> name="accID">
		<h1 class="my-3 text-center">Edit Member Information</h1>
		<?php
			mysqli_select_db($con, 'str_database');
			$sql = "select * from accounts where account_id =" . "'" . $_GET['accountID'] . "'";
			$rec = mysqli_query($con, $sql);
			$data = mysqli_fetch_array($rec);
		?>
		<input type="hidden" value= <?php echo $_GET['accountID'] ?> name="after">
		<div class="col-xs-12 col-sm-6 col-md-5 mb-3 rounded mx-auto nounderline">
			<table class="table table-bordered rounded bg-dark text-white" id="edit">
				<tr>
					<td>Project ID:</td>
					<td><?php echo $data['project'] . "<br>"; ?></td>
					<td>to</td>
					<td>
						<select name="project" <?php if($_SESSION['access'] == 'Researcher'){ echo "disabled";} ?>>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Org:</td>
					<td><?php echo $data['org'] . "<br>"; ?></td>
					<td>to</td>
					<td><input type="text" name="org" <?php if($_SESSION['access'] == 'Researcher'){ echo "disabled";} ?>></td>
				</tr>
				<tr>
					<td>Last Name:</td>
					<td><?php echo $data['last_name'] . "<br>"; ?></td>
					<td>to</td>
					<td><input type="text" name="surname" <?php if($_SESSION['access'] == 'Researcher'){ echo "disabled";} ?>></td>
				</tr>
				<tr>
					<td>First Name:</td>
					<td><?php echo $data['first_name'] . "<br>"; ?></td>
					<td>to</td>
					<td><input type="text" name="first_name" <?php if($_SESSION['access'] == 'Researcher'){ echo "disabled";} ?>></td>
				</tr>
				<tr>
					<td>Middle Name:</td>
					<td><?php echo $data['middle_name'] . "<br>"; ?></td>
					<td>to</td>
					<td><input type="text" name="middle_name" <?php if($_SESSION['access'] == 'Researcher'){ echo "disabled";} ?>></td>
				</tr>
				<tr>
					<td>Username:</td>
					<td><?php echo $data['username'] . "<br>"; ?></td>
					<td>to</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>E-Mail:</td>
					<td><?php echo $data['email'] . "<br>"; ?></td>
					<td>to</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>Cell Num:</td>
					<td><?php echo $data['cell_num'] . "<br>"; ?></td>
					<td>to</td>
					<td><input type="text" name="cellnum"></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td>*********</td>
					<td>to</td>
					<td><input type="text" name="password"></td>
				</tr>
				<tr>
					<td>Access Type</td>
					<td><?php echo $data['access'] . "<br>"; ?></td>
					<td>to</td>
						<td>
							<select name="accounttype" <?php if($_SESSION['access'] == 'Researcher'){ echo "disabled";} ?>>
								<option value="Admin">Admin</option>
								<option value="Researcher">Researcher</option>
								<option value="Project Head" >Project Head</option>
							</select>
						</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td><button class='btn-primary d-block mx-auto' type="submit" name="edit" width="100px">Edit</button></td>
				</tr>
			</table>
		</div>
	</form>
	</center>
		<?php include('all_scripts_bottom.php'); ?>
	</body>
</html>
	