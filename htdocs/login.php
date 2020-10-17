<?php
    
	$con=mysqli_connect("localhost", "root", "biver2018");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else{
		session_start();
		if (isset($_SESSION['active'])) {
		    $_SESSION['error-message']="Login authentication failed: ".mysqli_stmt_error($stmt);
		    $_SESSION['redirect-url'] = $_SERVER['REQUEST_URI'];
		    header("Location: ./");
		}
		mysqli_select_db($con, 'str_database');
		
		$ip = getenv("REMOTE_ADDR");
		// delete entries which are older than 10 minutes
		mysqli_query($con, "DELETE FROM ip WHERE address LIKE '$ip' AND timestamp <= (now() - interval 10 minute)");
		// counts number of attempts 
		$result = mysqli_query($con, "SELECT COUNT(*) FROM ip WHERE address LIKE '$ip' AND timestamp > (now() - interval 10 minute)");
		$count = mysqli_fetch_array($result, MYSQLI_NUM);
		
		if(isset($_POST['pass'])&&isset($_POST['username'])){
			// sanitize variables
			$password = filter_var($_POST['pass'],FILTER_SANITIZE_STRING);
			$username = filter_var($_POST['username'],FILTER_SANITIZE_STRING);
			
			$stmt = mysqli_stmt_init($con);
			$result = NULL;

			// if prepared statement is ready
			if(mysqli_stmt_prepare($stmt, "select * from accounts where username=?")){
				// if variables are not binded to parameters properly, display error message and exit code
				if(!mysqli_stmt_bind_param($stmt,'s',$username)){
					echo "Binding parameters failed: ".mysqli_stmt_error($stmt); exit;
				}
				// if prepared statement fails to execute, display error message and exit code
				if(!mysqli_stmt_execute($stmt)){
					echo "Statement execution failed: ".mysqli_stmt_error($stmt); exit;
				}
				$result = mysqli_stmt_get_result($stmt);
			}
			// send error message instead if preparation of statement failed
			else {echo "Statement preparation failed: ".mysqli_stmt_error($stmt); exit;} 
			$data = mysqli_fetch_assoc($result);

			// check if inputted password equals to hashed and salted password inside database or attempts have exceeded the limit 
			if($count[0]<=6){
					// log ip addresses entering the site 
					mysqli_query($con, "INSERT INTO ip (address) VALUES ('$ip')"); 
					if(password_verify($password, $data['password'])){
					// initialize session ids
					$count[0] = 0;
					$_SESSION['active'] = $data['username'];
					$_SESSION['account_id'] = $data['account_id'];
					$_SESSION['access'] = $data['access'];
					$_SESSION['project'] = $data['project'];
					// erase earlier attempts 
					mysqli_query($con, "DELETE FROM ip WHERE address='$ip'");

					if($_SESSION['access']=="Admin"){
						echo "<script type='text/javascript'> 
					alert('Successfully logged in!'); 
					window.location = 'settings.php';
					</script>";
					}
					else{
						echo "<script type='text/javascript'> 
					alert('Successfully logged in!'); 
					window.location = 'submissions.php';
					</script>";

					}
					
				}
			}
			else{
				// block user after six wrong attempts
  				echo "<script type='text/javascript'>alert('You are allowed six attempts in 10 minutes. Please try again later.');</script>";
			}
			
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>BiVER</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">


		


		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="favicon.ico" type="image/ico">
		<?php include('all_scripts.php'); ?>
		<!-- ---------------------------------------------------------<Icon Header & Styling/>-------------------------------------------------- -->
	
</head>
<body style="background-image: url('loginBackground.jpg');">
		<?php include('navbar.php'); ?>
		<!-- ----------------------------------------------------------<LOWER NAVBAR/>--------------------------------------------------- -->

		<!-- ------------------------------------------------------------<NAVBAR/>------------------------------------------------------- -->
		<main>
			<div class="container-fluid padding mx-auto">
			<h2 class="text-center mt-3">LOGIN</h2><br>
			<div class="row text-center padding mx-1">
				<div class="col-xs-12 col-sm-6 col-md-4 rounded border-right-1 border border-white shadow-lg mx-auto" style="background-color: #262729">
					<div class="loginBox">
						<div id="login">
							<form action="login.php" method="post">
							  <div class="form-group">
							    <label for="exampleInputEmail1">Username</label>
							    <input type="text" class="form-control" id="username" name="username" placeholder="">
							  </div>
							  <div class="form-group">
							    <label for="exampleInputPassword1">Password</label>
							    <input type="password" class="form-control" id="pass" name="pass" placeholder="">
							  </div>
							  <button type="submit" id="submit" name="submit" class="btn btn-primary">Login</button>	
							  <br>
							  <br>
							</form>
							
						</div>
					</div>
				</div>
			</div>

		</div>
		</main>
		
	<br><br><br>


<?php include('all_scripts_bottom.php'); ?>
</body>
</html>
