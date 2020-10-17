<?php

require_once'config-new.php';
// Security purposes
if($_SERVER['REQUEST_METHOD'] == "POST"){

// Sanitize data before usage
if(isset($_POST['project'])){ $project = filter_var((string)$_POST['project'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_LOW|FILTER_FLAG_ENCODE_HIGH);}
else{$project = "4";}
if(isset($_POST['access'])){ $access = filter_var($_POST['access'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_LOW|FILTER_FLAG_ENCODE_HIGH); }
else{$access = "Researcher";}
if(isset($_POST['username'])){$uname = filter_var($_POST['username'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_LOW|FILTER_FLAG_ENCODE_HIGH);}
else{$username ="USER_UNKNOWN-".date('Y-m-d');}
if(isset($_POST['date'])){$date = filter_var($_POST['date'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_LOW|FILTER_FLAG_ENCODE_HIGH);}
else{$date=date('Y-m-d');}
if(isset($_POST['name'])){$name = filter_var($_POST['name'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_LOW|FILTER_FLAG_ENCODE_HIGH);}
else{$name="USER_UNKNOWN-".date('Y-m-d');}
$currdate = date('Y-m-d h:i:s');
$status = "pending";

// make new directories if there's no existing one
if(!file_exists("upload")){mkdir("upload"); }
if(!file_exists("upload/$project")){mkdir("upload/$project"); } 
if(!file_exists("upload/$project/$uname")){mkdir("upload/$project/$uname"); } 
if(!file_exists("upload/$project/$uname/$date")){mkdir("upload/$project/$uname/$date"); } 

if(isset($_SESSION['project'])){ $project = $_SESSION['project']; }

//Сheck that we have a file
if((!empty($_FILES["uploaded_file"])) && ($_FILES['uploaded_file']['error'] == 0)) {

 //Check if the file is rar folder 
  $filename = basename($_FILES['uploaded_file']['name']);


    //Determine the path to which we want to save this file
      $newname = dirname(__FILE__).'/upload/'.$project.'/'.$uname.'/'.$date."/".$filename;
 //Check if the file with the same name is already exists on the server
 if (!file_exists($newname)) {
//--------------------------
	$filename = basename($_FILES['uploaded_file']['name']);
	 $newname = dirname(__FILE__).'/upload/'.$project.'/'.$uname.'/'.$date."/".$filename;
	// check if file exists
	if (!file_exists($newname)){
		$query_stmt = mysqli_stmt_init($con);
		if(mysqli_stmt_prepare($query_stmt, 'INSERT INTO filelist (field2, field3, field4, field5, field6, field7, field8, statusreport) VALUES (?,?,?,?,?,?,?,?)')){
			if(!mysqli_stmt_bind_param($query_stmt,'ssssssss',$project,$uname,$date,$filename,$access,$name,$currdate,$status)){
				echo "Binding parameters failed: ".mysqli_stmt_error($query_stmt); exit;
			}
			if(!mysqli_stmt_execute($query_stmt)){
				echo "Statment execution failed: ".mysqli_stmt_error($query_stmt); exit;
			}
			move_uploaded_file($_FILES['uploaded_file']['tmp_name'],$newname);
			echo "<script type='text/javascript'> 
				alert('A new document is added successfully');
				document.location.href = 'submissions.php';
				</script>";
			}
			else{
				echo "<script type='text/javascript'> 
				alert('Preparation failed!');
				document.location.href = 'submissions.php';
				</script>";
			}
		}
		
		mysqli_stmt_close($query_stmt);
	}
	else {  // display popup when file already exists from the upload directory
			echo "<script type='text/javascript'>
			alert('File already exists!');
			document.location.href = 'submissions.php';
			</script>";
			}
  }
	
}

mysqli_close($con);  
exit;   
?>
