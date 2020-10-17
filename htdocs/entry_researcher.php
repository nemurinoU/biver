<?php
	$con=mysqli_connect("localhost", "root", "");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else{
		session_start();
		mysqli_select_db($con, 'str_database');
		$command = "";
		$count = 1;
		$sql = "select * from submissions";
		$rec = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($rec)){
			$count++;
		}
		if (isset($_POST['submit'])){
			$accountid = $_SESSION['id'];
			$projectid = $_SESSION['proj'];
			$org = $_SESSION['org'];
			$submission = $_POST['submission'];
			$contact = $_POST['contact'];
			$submissionid = $count;
			$add_user= "INSERT INTO submissions VALUES ('$submissionid','$accountid','$projectid','$org', '$submission','$contact','Pending')";
			mysqli_query($con,$add_user);
			header('location:Homepage.php');
		}

	}
?>

<html>
<head>
	<title>Prototype</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php include('all_scripts.php'); ?>

	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="favicon.ico" type="image/ico">
	<link rel="stylesheet" href="../auto.css">
	<style>
			#profile{
			color: white;
			background-color: #377f30;
			margin-top: 20px;
			height:500px;
			}
			#partner{
				color:black;
				background:none;
				text-align: center; 
				height:500px;

			}
			.page-footer{
			  color:white;
			  background-color:#005208;
			  height:120px; 
			  padding-top: 20px;
			  padding-left: 10px;
			}
			#header{
				background:none;
				font-family: 'Bree Serif', serif;
				font-weight: bold;
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
			#greetingsuser{
				<?php 
					if(isset($_SESSION['active'])){
						echo "display: block;";
					}
					else {
						echo "display: none;";
					}
				?>
			}
		</style>
</head>
<body>
	<h1>Biodiversity and Vulnerable Ecosystems Research</h1>
		</div>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
					<a class="navbar-brand"><img src="logo.png"></a>
					<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
					<span class="navbar-toggler-icon"></span>
					</button>
				
				<div class="collapse navbar-collapse" id="collapse_target">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link" href="Members.php" id="members">Members <i class="fas fa-user"></i></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="Updates.php" id="updates">Updates <i class="fas fa-user-edit"></i></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="entry_researcher.php" id="submissions">Add Submission <i class="fas fa-user-edit"></i></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="Homepage.php">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="publication.php">Publications</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link" href="datasets.php">Datasets</a>
							</li>							
							<li class="nav-item" id="something">
								<a class="nav-link"  href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
							</li>
							<li class="nav-item" id= "login">
								<a class="nav-link"  href="login.php" ><i class="fas fa-sign-in-alt"></i> Login</a>
							</li>
				       </ul>
				</div>		
		</nav>
	
		<h2 class="text-center"> DATA ENTRY </h2>
	
	<main>
		<form action="<?php $_PHP_SELF; ?>" method="post">
			<center>
				<table class="table col-xs-12 col-sm-6 col-md-4 mx-auto" id="entry">
					<tr class="inputs"><td scope="row">Account ID: </td><td scope="col"><?php echo $_SESSION['id'] ?></td></tr>
					<tr class="inputs"><td scope="row">Project ID: </td><td scope="col"><?php echo $_SESSION['proj'] ?></td></tr>
					<tr class="inputs"><td scope="row">Organization: </td><td scope="col"><?php echo $_SESSION['org'] ?></td></tr>
					<tr class="inputs"><td scope="row">Submission: </td><td scope="col"><input type="text" id="submission" name="submission"></input></td></tr>
					<tr class="inputs"><td>Contact: </td><td scope="col"><input type="text" id="contact" name="contact"></input></td></tr>
					
				</table>
				<br>
				<input type="submit" class="btn btn-default btn-lg" value="SUBMIT" id="submit" name="submit"></input><br><br><br>
				<a href="Homepage.php">Go Back</a>
			
    	 
			</center>
		</form>
		<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">

      	<!-- Modal content-->
      	<div class="modal-content">
        	<div class="modal-header">
          		<button type="button" class="close" data-dismiss="modal">&times;</button>
          		<h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Login</h4>
        	</div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" id="psw" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
            <button type="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
    </div>
  </div>
 </div>
</main>

	<?php include('all_scripts_bottom.php'); ?>

</body>
<script type="text/javascript">
	$(document).ready(function(){
  		$("#submit").click(function(){
   			 $("#myModal").modal();
  });
});
</script>
</html>