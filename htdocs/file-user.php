<?php
session_start();

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

	<link rel="import" href="all_scripts.php">

<!-- Bootstrap core CSS-->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom fonts for this template-->
<link href="vendor/fontawesome-free/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<!-- Page level plugin CSS-->
<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
<!-- Custom styles for this template-->
<link href="css/sb-admin.css" rel="stylesheet">

<style>
	.bg-0{
		background: transparent;
	}
</style>
</head>
<?php
if (isset($_SESSION['username'])) {
	$user = $_SESSION['username'];
?>
<body class="fixed-nav sticky-footer" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
<a class="navbar-brand" href="index.php">AlphaAdmin</a>
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarResponsive">
<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="See relevant business stats">
<a class="nav-link" href="index.php">
<i class="fa fa-fw fa-dashboard"></i>
<span class="nav-link-text">Dashboard</span>
</a>
</li>
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Include a new product">
<a class="nav-link" href="product.php">
<i class="fa fa-check-square"></i>
<span class="nav-link-text">Create Product</span>
</a>
</li>
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add new users to the system">
<a class="nav-link" href="register.php">
<i class="fa fas fa-user"></i>
<span class="nav-link-text">Register Users</span>
</a>
</li>
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Accept orders and refunds">
<a class="nav-link" href="pos.php">
<i class="fa fas fa-money"></i>
<span class="nav-link-text">POS</span>
</a>
</li>
</ul>
<ul class="navbar-nav ml-auto">

<li class="nav-item">
<form class="form-inline my-2 my-lg-0 mr-lg-2">
<div class="input-group">
<input class="form-control" type="text" placeholder="Search for...">
<span class="input-group-append">
<button class="btn btn-primary" type="button">
<i class="fa fa-search"></i>
</button>
</span>
</div>
</form>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="modal" data-target="#exampleModal" href='logout.php'>
<i class="fa fa-fw fa-sign-out"></i>Logout</a>
</li>
</ul>
</div>
</nav>

<!--file insert functionality -->
<main class='content-wrapper row jumbotron'>
<section id="file-manage" class="mt-5 container col-xs-12 col-md-5 col-lg-6 col-xl-7 mx-auto col-sm-offset-1 col-md-offset-2">
	
	<table class="file-directory table table-responsive table-hover">
	<thead class="thead-inverse">
		<tr>
			<th colspan="3" class="text-center"><h2> Files Saved </h2></th>
		</tr>
		<tr>
			<th> Date </th>
			<th> File </th>
			<th> Delete </th>
		</tr>
	</thead>
	<tbody class="col-xs-6 col-xs-offset-2 mx-auto">
	<?php
		if(isset($_SESSION['username'])) { 
			$uname = $_SESSION['username']; 
			$stmt = mysqli_stmt_init($con);
		    if(mysqli_stmt_prepare($stmt,"SELECT * FROM filelist WHERE field2=?")){
		    	if(!mysqli_stmt_bind_param($stmt,"s",$uname))
		    	{	$_SESSION['error-message']="Binding parameters failed: ".mysqli_stmt_error($stmt);
		    		$_SESSION['redirect-url'] = $_SERVER['REQUEST_URI']; 
		    		header("Location: error_pages/error-message.php"); }

		    	if(!(mysqli_stmt_execute($stmt)))
				{	$_SESSION['error-message']="Execution failed: ".mysqli_stmt_error($stmt);
					$_SESSION['redirect-url'] = $_SERVER['REQUEST_URI'];
		    		header("Location: error_pages/error-message.php"); }

		    	$results = mysqli_stmt_get_result($stmt);

		    	if(mysqli_num_rows($results) == 0){ echo "<tr><td colspan=2> No results found. ".$_SESSION['username']."</td></tr>"; }
		    	else{
		    		while($data = mysqli_fetch_assoc($results)){	
		    			echo "<tr scope='row'>";
		    			echo "<form class='form-horizontal' method='post' action='delete-file.php'>";
		    			echo "<input type='text' class='border-0 bg-0' name='id' value=".$data['field1']." hidden>";
		    			echo "<input type='text' class='border-0 bg-0' name='user' value=".$data['field2']." hidden>";
		    			echo "<td> <input type='text' class='border-0 bg-0 col-md-hidden' name='date' value=".$data['field3']." readonly> </td>";
		    			echo "<td> <input type='text' class='border-0 bg-0' name='filename' value=".$data['field4']." readonly> </td>";
		    			echo "<td> <input class='btn btn-danger' type='submit' value='X'> </td>";
		    			echo "</form>";
		    			echo "</tr>";
		    			} 
		    		}	
		    }
		    else{ $_SESSION['error-message']="Statement preparation failed: ".mysqli_stmt_error($stmt);
	    	$_SESSION['redirect-url'] = $_SERVER['REQUEST_URI'];
	    	header("Location: error_pages/error-message.php"); }
	    }
	    else{ $_SESSION['error-message']="Login authentication failed: ".mysqli_stmt_error($stmt);
	    	$_SESSION['redirect-url'] = $_SERVER['REQUEST_URI'];
	    	header("Location: error_pages/error-message.php");
	    }
	    
	?>
	</tbody>
	</table>
	</form>
</section>
<section class=" mt-5 col-xs-12 col-md-5 col-lg-4 col-xl-3 mx-auto col-xs-offset-1 col-md-offset-1">
<div class="container ">
	<h2 class="text-center mb-2"> File Upload </h2>
	<label for='heading2' class="sr-only">File Upload </label>
	<label for="instructions" class="sr-only">Click choose file to upload</label><br>
<?php
	echo "<form name=fileform method=post class='form-horizontal mx-auto' action='insert-file.php' enctype='multipart/form-data'>
	<input type=text class='form-control mb-2' name=year value='".date('Y-m-d')."' hidden>
	<input type=text class='form-control mb-2' name=username value='$user' hidden>
	<input type=file class='bg-muted form-control padding mb-2' name='uploaded_file'>
	<div class='row'><div class='col-xs-12 mx-auto'><br>
	<input type='submit' class='btn btn-success' value='Submit'></div></div>";
	echo "</form></div>";
}
else{
	include('log.html');
}
	
?>
</section>


</main></body>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for this page-->
<link rel="import" href="all_scripts_bottom.php">

</html>