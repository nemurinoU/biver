<?php

include ('config-new.php'); 

// special function to validate cellphone numbers
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

if (isset($_POST['submit'])){
	// sanitize and validate user input values	
	$project = filter_var($_POST['project'],FILTER_SANITIZE_NUMBER_INT);
	$first_name = filter_var($_POST['first_name'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_LOW|FILTER_FLAG_ENCODE_HIGH);
	$middle_name = filter_var($_POST['middle_name'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_LOW|FILTER_FLAG_ENCODE_HIGH);
	$last_name = filter_var($_POST['surname'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_LOW|FILTER_FLAG_ENCODE_HIGH);
	$org = filter_var($_POST['org'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_LOW|FILTER_FLAG_ENCODE_HIGH);
	$username = filter_var($_POST['username'],FILTER_SANITIZE_STRING);
	$email = filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
	$cellnum = validate_phone_number($_POST['cellnum']);
	$password = filter_var($_POST['password'],FILTER_SANITIZE_STRING);
	$access_type = "Pending";
	$currdate = date('Y-m-d');
	$token = bin2hex(random_bytes(50));

	//password hashing using bcrypt
	$password = password_hash($password, PASSWORD_DEFAULT);

	$stmt = mysqli_stmt_init($con);

	// if prepared statement is ready
	if(mysqli_stmt_prepare($stmt, "INSERT INTO accounts (
				project, org, first_name, 
				middle_name, last_name, 
				username, email, cell_num, 
				password, access, date_created, token
				) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)")){
			// if variables are not binded to parameters properly, display error message and exit code
			if(!mysqli_stmt_bind_param($stmt,'isssssssssss',$project,$org,$first_name,$middle_name,$last_name,$username,$email,$cellnum,$password,$access_type,$currdate,$token)){
				echo "Binding parameters failed: ".mysqli_stmt_error($stmt); exit;
			}
			// if prepared statement fails to execute, display error message and exit code
			if(!mysqli_stmt_execute($stmt)){
				echo "Statment execution failed: ".mysqli_stmt_error($stmt); exit;
			}
			// redirect webpage to confirmation email webpage
			$string_location = "Location: confirmation_email.php?email=" . $email;
			echo "<script type='text/javascript'> 
				alert('Successfully registered!'); 
				window.location = './';
				</script>";
			header($string_location);
		}
		// send error message instead if preparation of statement failed
		else {echo "Statement preparation failed: ".mysqli_stmt_error($stmt); header("Location: login.php"); exit;}
}

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Register</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php include('all_scripts.php'); ?>

		<link rel="icon" href="favicon.ico" type="image/x-icon">

		<link rel="shortcut icon" href="favicon.ico" type="image/ico">

		<!-- ---------------------------------------------------------<Icon Header & Styling/>-------------------------------------------------- -->
	</head>
	<style>

			/*-----------------------------------------<Hompage Styling>----------------------------------------------*/
			#header{
				background:none;
				font-family: 'Ubuntu', sans-serif;
			}
			.nounderline {
			  	text-decoration: none !important
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
			/*-----------------------------------------<navbar/>----------------------------------------------*/

	</style>
	<body>
		<?php include('navbar.php'); ?>
		<!-- ----------------------------------------------------------<LOWER NAVBAR/>--------------------------------------------------- -->
		<!-- ------------------------------------------------------------<NAVBAR/>------------------------------------------------------- -->
		<!-- -------------------------------------------------------<REGISTRATION FORM>-------------------------------------------------- -->
		<h2 class="text-center">REGISTER</h2><br>
		<div class="col-xs-12 col-sm-6 col-md-5 mb-3 rounded mx-auto nounderline" style="background-color:#262729;color:white">
			<form action="<?php $_PHP_SELF;?>" method="post" >
			  	<div class="form-group row mb-3 mt-3 px-3">
			    	<label for="first_name" class="col-sm-3 col-form-label p-0">First Name</label>
			    	<div class="col-sm-9 p-0">
			      		<input class="form-control" type="text" id="first_name" name="first_name" required>
			    	</div>
			  	</div>
			  	<div class="form-group row mb-3 mt-3 px-3">
			    	<label for="middle_name" class="col-sm-3 col-form-label p-0">Middle Name</label>
			    	<div class="col-sm-9 p-0">
			      		<input class="form-control" type="text" id="middle_name" name="middle_name" required>
			    	</div>
			  	</div>
			  	<div class="form-group row mb-3 mt-3 px-3">
			    	<label for="surname" class="col-sm-3 col-form-label p-0">Surname</label>
			    	<div class="col-sm-9 p-0">
			      		<input class="form-control" type="text" id="surname" name="surname" required>
			    	</div>
			  	</div>
			  	<div class="form-group row mb-3 px-3">
			    	<label for="project" class="col-sm-3 col-form-label p-0">Project</label>
			    	<div class="col-sm-9 p-0">
				      	<select class="form-control" type="text" id="project" name="project" required>
				            <option value=1>1</option>
				            <option value=2>2</option>
				            <option value=3>3</option>
				        </select>
			    	</div>  	
			  	</div>
			  	<div class="form-group row mb-3 px-3">
			    	<label for="org" class="col-sm-3 col-form-label p-0">Organization</label>
			    	<div class="col-sm-9 p-0">
			      		<input class="form-control" type="text" id="org" name="org" required>
			    	</div>
			  	</div>
			  	<div class="form-group row mb-3 px-3">
			    	<label for="email" class="col-sm-3 col-form-label p-0">E-mail</label>
			    	<div class="col-sm-9 p-0">
			      		<input type="email" class="form-control" name="email" id="email">
			    	</div>
			  	</div>
			  	<div class="form-group row mb-3 px-3">
			    	<label for="cellnum" class="col-sm-3 col-form-label p-0">Cellphone number</label>
			    	<div class="col-sm-9 p-0">
			      		<input class="form-control" type="text" id="cellnum" name="cellnum" required>
			    	</div>
			  	</div>
			  	<div class="form-group row mb-3 px-3">
			    	<label for="username" class="col-sm-3 col-form-label p-0">Username</label>
			    	<div class="col-sm-9 p-0">
			      		<input class="form-control" type="text" id="username" name="username" required>
			    	</div>
			  	</div>
			  	<div class="form-group row mb-3 px-3">
			    	<label for="password" class="col-sm-3 col-form-label p-0">Password</label>
			    	<div class="col-sm-9 p-0">
			      		<input class="form-control" type="password" id="password" name="password" aria-describedby="passwordHelpBlock" required>
			      		<small id="passwordHelpBlock" class="form-text text-muted">
							Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
						</small>
			    	</div>
			  	</div>

			  	<div class="form-group row mb-3 px-3">
			    	<label for="password_2" class="col-sm-3 col-form-label p-0">Confirm Password</label>
			    	<div class="col-sm-9 p-0">
			      		<input class="form-control" type="password" id="password_2" name="password_2" required>
			    	</div>
			  	</div>
			  	
			    <div class="form-group row my-0">
			    	<div class="mx-auto">
			      		<button name="submit" type="submit" class="btn btn-primary mx-1" style="width:100px">Register</button>
			    	</div>
			  	</div>


			</form>
			<a href="login.php" class="nounderline">
				<button type="submit" id="submit" name="submit" class="btn btn-primary d-block mx-auto mt-3">Back</button>
			</a>
		</div>
		
		<!-- -------------------------------------------------------<REGISTRATION FORM>-------------------------------------------------- -->

			
			<?php include('all_scripts_bottom.php'); ?>


	</body>
</html>
