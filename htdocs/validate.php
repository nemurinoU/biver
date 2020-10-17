<?php
	session_start();
	$_SESSION['active'] = 1;
	$active = 0;
	$con=mysqli_connect("localhost", "root", "");
		mysqli_select_db($con, "str_database");
		$sql="select * from account";
		$rec = mysqli_query($con, $sql);
		while($data=mysqli_fetch_array($rec)){
			$id = $data['AccountID'];
			$name = $data['Name'];
			$projectid = $data['ProjectID'];
			$project = $data['Project'];
			$password = $data['password'];
			$orga = $data['Organization'];
			$cellphone = $data['CellNum'];
			$email = $data['Email'];
			$access_type = $data['AccessType'];
			if($id==$_GET["accId"] && $password==$_GET["pass"]){
				$_SESSION['id'] = $id;
				if($access_type=="Admin"){
					$_SESSION['name'] = $name;
					$_SESSION['type'] = $access_type;
					$_SESSION['projID'] = $projectid;
					$_SESSION['proj'] = $project;
					$_SESSION['org'] = $orga;
					$_SESSION['email'] = $email;
					header('location: Homepage.php');
					break;
				}
				else if($access_type=="Researcher"){
					$_SESSION['name'] = $name;
					$_SESSION['type'] = $access_type;
					$_SESSION['proj'] = $projectid;
					$_SESSION['org'] = $orga;
					$_SESSION['email'] = $email;
					header('location: Homepage.php');
					break;
				}
				else if($access_type=="Project Head"){
					$_SESSION['name'] = $name;
					$_SESSION['type'] = $access_type;
					$_SESSION['proj'] = $projectid;
					$_SESSION['org'] = $orga;
					$_SESSION['email'] = $email;
					header('location: Homepage.php');
					break;
				}
			}
			else{
			header("location: login.php");
			}
		}


?>
