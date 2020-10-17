<?php
session_start();

//require a new connection configuration
require_once('config-new.php');

// sanitizing function
function clean($var){
	$var = mysqli_real_escape_string($con, $var);
	$var = htmlspecialchars($var);
	$var = stripslashes($var);
	return $var;
}

if(isset($_SESSION['active'])){
	
	// PREPARATION OF INPUT DATA
	// sanititze input before usage
	//validate input after sanitizing 
	if(isset($_POST['status']) && $_POST['status']=="Accepted"){
		$status = "perm";
	}
	else if(isset($_POST['status']) && ($_POST['status']=="Pending" || $_POST['status']=="pending")){
		$status = "upload";
	}
	if(isset($_POST['project'])){ $project = filter_var($_POST['project'],FILTER_SANITIZE_STRING); } else{ mysqli_close($con); header('Location: log.html'); }
	if(isset($_POST['id'])){ $id = filter_var($_POST['id'],FILTER_VALIDATE_INT); } else{ mysqli_close($con); header('Location: log.html'); }
	if(isset($_POST['user'])){ $user = filter_var($_POST['user'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_LOW|FILTER_FLAG_ENCODE_HIGH); } else{ mysqli_close($con); header('Location: log.html'); }
	if(isset($_POST['date'])){ $date = filter_var($_POST['date'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_LOW|FILTER_FLAG_ENCODE_HIGH); } else{ mysqli_close($con); header('Location: log.html'); }
	if(isset($_POST['filename'])){ $filename = filter_var($_POST['filename'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_LOW|FILTER_FLAG_ENCODE_HIGH); } else{ mysqli_close($con); header('Location: log.html'); }
	
	// DELETION OF FILE FROM UPLOAD FOLDER
	// locate the absolute path of the file
	$newname = __DIR__.'/'.$status.'/'.$project.'/'.$user.'/'.$date."/".$filename;
	if(file_exists($newname)){ // determine if the file exists
		// delete the file
		unlink($newname);
	}
	else{
		 echo "<script type='text/javascript'> alert('File is nowhere to be found'); </script>";
	}
	
	// DELETION OF DATA ENTRY FROM DATABASE
	// prepare a parameterized statement
	$stmt = mysqli_stmt_init($con);
			// if prepare is successful
		    if(mysqli_stmt_prepare($stmt,"DELETE FROM filelist WHERE field1=?")){
		    
		    	if(!mysqli_stmt_bind_param($stmt,"i",$id)) // bind parameters to parameterized statement
		    		// display error in another page if there are bugs hehehe
		    	{	$_SESSION['error-message']="Binding parameters failed: ".mysqli_stmt_error($stmt);
		    		$_SESSION['redirect-url'] = $_SERVER['REQUEST_URI']; 
		    		header("Location: error_pages/error-message.php"); }

		    	if(!(mysqli_stmt_execute($stmt))) //execute prepared statement
		    		// display error in another page if there are bugs hehehe
				{	$_SESSION['error-message']="Execution failed: ".mysqli_stmt_error($stmt);
					$_SESSION['redirect-url'] = $_SERVER['REQUEST_URI'];
		    		header("Location: error_pages/error-message.php"); }

		    	echo "<script type='text/javascript'> 
		    	alert('Deleting file successful!'); 
		    	window.location = 'submissions.php';
		    	</script>";
		    	mysqli_close($con);
		   		exit;
			}
		    else{ $_SESSION['error-message']="Statement preparation failed: ".mysqli_stmt_error($stmt);
	    	$_SESSION['redirect-url'] = $_SERVER['REQUEST_URI'];
	    	mysqli_close($con);
	    	header("Location: error_pages/error-message.php"); }

}
else{
	mysqli_close($con);
	header('Location: log.html');
}


?>
