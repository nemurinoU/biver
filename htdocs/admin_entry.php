<?php

	$con=mysqli_connect("localhost", "root", "biver2018");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else{
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
		session_start();
		mysqli_select_db($con, 'str_database');
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
			$access_type = filter_var($_POST['accounttype'],FILTER_SANITIZE_STRING);
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
					/*
					$string_location = "Location: confirmation_email.php?email=" . $email;
					header($string_location);
					*/
					echo "<script type='text/javascript'>
			        alert('Entry is sucessful!');
			        window.location = 'settings.php';
			        </script>";
					
				}
				// send error message instead if preparation of statement failed
				else {echo "Statement preparation failed: ".mysqli_stmt_error($stmt); header("Location: settings.php"); exit;}
			
		}

	}
?>


	
<!DOCTYPE html>
<html>
	<head>
		<title>Admin Entry</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="favicon.ico" type="image/ico">

		<?php include('all_scripts.php'); ?>
		
	</head>

	<body>
		<?php include('navbar.php'); 
			$sql = "SELECT MAX(account_id) FROM accounts";
			$query = mysqli_query($con,$sql);
			$result = mysqli_fetch_array($query,MYSQLI_NUM);
			$cnt = $result[0]+1;
			$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
			$username = date("Y-m-d")."-".$cnt;
			$password = substr( str_shuffle( $chars ), 0, 10 );
		?>
		<div class="row container-fluid"><h2 class="text-center my-3 d-inline-block mx-auto">DATA ENTRY </h2></div>
		<div class="col-xs-12 col-sm-6 col-md-8 rounded mx-auto nounderline" style="background-color:#262729;color:white">
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
				            <option value=1>Biodiversity and systematics of organisms in vulnerable ecosystems</option>
				            <option value=2>Assessment of water quality of vulnerable ecosystems in Eastern Visayas</option>
				            <option value=3>A Computational Model of the Characteristics of the Binahaan River Ecosystem</option>
				        </select>
			    	</div>  	
			  	</div>

			  	<div class="form-group row mb-3 px-3">
			    	<label for="org" class="col-sm-3 col-form-label p-0">Organization</label>
			    	<div class="col-sm-9 p-0">
			      		<input class="form-control" type="text" id="org" name="org" value="Philippine Science High School - Eastern Visayas Campus" required>
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
			    	<label for="org" class="col-sm-3 col-form-label p-0">Username</label>
			    	<div class="col-sm-9 p-0">
			      		<input class="form-control" type="text" id="username" name="username" value=<?php echo "'$username'" ?> required>
			    	</div>
			  	</div>
			  	<div class="form-group row mb-3 px-3">
			    	<label for="org" class="col-sm-3 col-form-label p-0">Password</label>
			    	<div class="col-sm-9 p-0">
			      		<input class="form-control" type="text" id="password" name="password" value=<?php echo "'$password'" ?> required>
			    	</div>
			  	</div>	
			  	<div class="form-group row mb-3 px-3">
			    	<label for="accounttype" class="col-sm-3 col-form-label p-0">Access Type</label>
			    	<div class="col-sm-9 p-0">
				      	<select class="form-control" type="text" id="accounttype" name="accounttype" required>
				            <option value="Admin">Admin</option>
				            <option value="Project Head">Project Head</option>
				            <option value="Researcher">Researcher</option>
				        </select>
			    	</div>  	
			  	</div>
			  	<div class="row container">
				    <div class="form-group col-xs-8">
				      		<button name="submit" type="submit" class="btn btn-primary mx-auto d-block" style="width:100px">Register</button>
				  	</div>
				  </div>
			  			
			</form>
			<div class="col-xs-4">
				<a href="settings.php" class="btn btn-primary d-block mr-auto nounderline text-right">Back</a>
			</div>
		</div>

		<?php include('all_scripts_bottom.php'); ?>
	</body>
</html>
