<?php
$con=mysqli_connect("localhost", "root", "biver2018");
   if (mysqli_connect_errno()){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   else{
   		mysqli_select_db($con, 'str_database');
		if(!empty($_GET["token"])) {
			$query = "UPDATE accounts set access = 'Researcher' WHERE token='" . $_GET["token"]. "'";
			$result = mysqli_query($con,$query);
			if(!empty($result)) {
				echo "<script type='text/javascript'> 
					alert('Successfully registered!'); 
					window.location = './';
					</script>";
			}
			else {
				echo "<script type='text/javascript'> 
					alert('Not successful!'); 
					window.location = './';
					</script>";
				}
			}
			
   }
	
?>
