<?
     	$con=mysqli_connect("210.213.193.68", "root", "biver2018","str_database");
        if (mysqli_connect_errno()){
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
	else{
             	session_start();
                mysqli_select_db($con, 'str_database');
        }
?>

