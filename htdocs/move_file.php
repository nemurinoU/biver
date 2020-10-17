

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

if(isset($_POST['status'])){ $status = filter_var($_POST['status'],FILTER_SANITIZE_STRING); } else{ mysqli_close($con); header('Location: 404.html'); } 
	if(isset($_POST['project'])){ $project = filter_var($_POST['project'],FILTER_SANITIZE_STRING); } else{ mysqli_close($con); header('Location: 404.html'); }
	if(isset($_POST['id'])){ $id = filter_var($_POST['id'],FILTER_SANITIZE_STRING); } else{ mysqli_close($con); header('Location: 404.html'); }
	if(isset($_POST['user'])){ $user = filter_var($_POST['user'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_LOW|FILTER_FLAG_ENCODE_HIGH); } else{ mysqli_close($con); header('Location: log.html'); }
	if(isset($_POST['date'])){ $date = filter_var($_POST['date'],FILTER_SANITIZE_STRING); } else{ mysqli_close($con); header('Location: 404.html'); }
	if(isset($_POST['filename'])){ $filename = filter_var($_POST['filename'],FILTER_SANITIZE_STRING); } else{ mysqli_close($con); header('Location: 404.html'); }
	echo "<script type='text/javascript'> alert('$status, $project, $id, $user, $filename'); </script>";
	$newdate = date('Y-m-d');
// security purposes
if($_SERVER['REQUEST_METHOD'] == "POST"){
	
	// PREPARATION OF INPUT DATA
	// sanititze input before usage
	//validate input after sanitizing
	
	// CHANGE FILE DIRECTORY FROM UPLOAD TO PERMANENT FOLDER
	// locate the absolute path of the file
	$oldname = $_SERVER['DOCUMENT_ROOT'].'/STR/upload/'.$project.'/'.$user.'/'.$date."/".$filename;
	$newname = $_SERVER['DOCUMENT_ROOT'].'/STR/perm/'.$project.'/'.$user.'/'.$newdate."/".$filename;

	// make new directories if there's no existing one at permanent folder 
	if(!file_exists("upload")){mkdir("perm"); }
	if(!file_exists("perm/$project")){mkdir("perm/$project"); } 
	if(!file_exists("perm/$project/$user")){mkdir("perm/$project/$user"); } 
	if(!file_exists("perm/$project/$user/$newdate")){mkdir("perm/$project/$user/$newdate"); } 

	if(file_exists($oldname)){ // determine if the file exists
		if($status=="Denied"){
			// Delete file
			unlink($oldname);

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
				}else { 
					$_SESSION['error-message']="Statement preparation failed: ".mysqli_stmt_error($stmt2); 
				}
		}
		else{
			if(!file_exists($newname)){
				// move the file to new directory
				rename($oldname,$newname);
				echo "<script type='text/javascript'> alert('File transferred.'); </script>";
				$currdate = date("Y-m-d h:i:s");
				// UPDATE FILE STATUS FROM DATABASE
				// prepare a parameterized statement
				$stmt = mysqli_stmt_init($con);
					// if prepare is successful
				if(mysqli_stmt_prepare($stmt,"UPDATE filelist SET field4=?, field8=?, statusreport=? WHERE field1=? ")){
				    
				    if(!mysqli_stmt_bind_param($stmt,"sssi",$newdate,$currdate,$status,$id)) // bind parameters to parameterized statement
				    		// display error in another page if there are bugs hehehe
				    {	$_SESSION['error-message']="Binding parameters failed: ".mysqli_stmt_error($stmt);
				    	$_SESSION['redirect-url'] = $_SERVER['REQUEST_URI']; 
				    	header("Location: error_pages/error-message1.php"); }

			    	if(!(mysqli_stmt_execute($stmt))) //execute prepared statement
			    		// display error in another page if there are bugs hehehe
					{	$_SESSION['error-message']="Execution failed: ".mysqli_stmt_error($stmt);
						$_SESSION['redirect-url'] = $_SERVER['REQUEST_URI'];
			    		header("Location: error_pages/error-message2.php"); }

			    	echo "<script type='text/javascript'> 
			    	alert('Transfer file successful!'); 
			    	window.location = 'submissions.php';
			    	</script>";
				}else { 
					$_SESSION['error-message']="Statement preparation failed: ".mysqli_stmt_error($stmt); 
				}
			}
			else{
				echo "<script type='text/javascript'> alert('File already exists from current directory.'); </script>";
			}
		}
		
	}
	else{
		echo "<script type='text/javascript'> alert('File not found.'); </script>";
	}

    // HOUSEKEEPING: DELETE ALL FILES WHICH ARE NOT Accepted OR Pending ASAP
    $sql = "DELETE FROM filelist WHERE status<>'Accepted' AND status<>'pending'";
    $query = mysqli_query($con,$sql);

	$_SESSION['redirect-url'] = $_SERVER['REQUEST_URI'];
	mysqli_close($con);
}
else{
	mysqli_close($con);
	header('Location: log.html');
}


?>