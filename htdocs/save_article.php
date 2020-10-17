<?php
	include('simplehtmldom/simple_html_dom.php');
	try {
		$con=mysqli_connect("localhost", "root", "");
		if (mysqli_connect_errno()){
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		else{
			session_start();
			mysqli_select_db($con, 'str_database');
			if (!isset($_SESSION['active'])) {
		    	$_SESSION['error-message']="Login authentication failed: ".mysqli_stmt_error($stmt);
		    	$_SESSION['redirect-url'] = $_SERVER['REQUEST_URI'];
		    	header("Location: error_pages/error-message.php");
			}
			else{
				$variable = $_GET['article_content'];
				$yeah = "";
				$html = str_get_html($variable);
				echo $html;
				$yeah = $html->find('img', 0)->src;
					
				date_default_timezone_set('Asia/Manila');
				$now = date("y-m-d h:i:sa");

				if ($_SESSION['access'] == "Researcher"){
					$article_status = "Pending";
				}
				else if ($_SESSION['access'] == "Project Head" || $_SESSION['access'] == "Admin") {
					$article_status = "Active";
				}
				else {
					$article_status = "Pending";
				}
				$result = mysqli_query($con,"SELECT * FROM accounts WHERE username = '" . $_SESSION['active'] ."'");
				$row = mysqli_fetch_row($result);
				$article_id = uniqid(); 
				$article_contributor = $row[5] . ", " . $row[3] . " " . $row[4];
				$article_title = filter_var($_GET['article_title'],FILTER_SANITIZE_STRING);
				$article_tagline = filter_var($_GET['article_tagline'],FILTER_SANITIZE_STRING);
				$article_content = $_GET['article_content'];
				$article_datetime = $now;
				$article_edittime = $now;

				$add_article= "INSERT INTO articles VALUES ('$article_id','$article_title','$article_tagline', '$yeah' ,'$article_content','$article_datetime', '$article_edittime', '$article_contributor', '$article_status')";



				mysqli_query($con,$add_article);
				header('location: announcements.php');
			}
		}
	}
	catch (Exception $e){
		echo $e->getMessage();
	}
?>