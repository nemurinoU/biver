<section class="container-fluid row">
<article class="container-fluid row col-xs-12 col-md-8 col-lg-9 col-lg-offset-3 ml-auto">
	<h2> Files for Approval </h2>
	<section class="container-fluid row jumbotron">
		<strong class="p-4 col m-3">Filename</strong>
		<strong class="p-4 col m-3">Date of Submission</strong>
		<strong class="p-4 col m-3">Author</strong>
		<strong class="p-4 col m-3">Action</strong>
	</section>
<?php
	if(isset($_SESSION['active'])) {
			$ha = $_SERVER['DOCUMENT_ROOT'];
			// always sanitize your inputs 
			$uname = filter_var($_SESSION['active'],FILTER_SANITIZE_STRING); 
			// initialize prepared statements 
			$stmt = mysqli_stmt_init($con);
			$num_rows = 0;
			if(mysqli_stmt_prepare($stmt, "SELECT project FROM accounts WHERE username=?")){
				mysqli_stmt_bind_param($stmt,"s",$uname);
		    	mysqli_stmt_execute($stmt);
		    }
			$results = mysqli_stmt_get_result($stmt);
			if(mysqli_num_rows($results) == 0){
				echo "<div class='container-fluid row'><span class='col-xs-12'>"."No results found A"."</span></div>";
			}
			else{
				$data = mysqli_fetch_assoc($results);
				$project = strval($data['project']); 
				$statusreport = "pending";
				// initialize statements
				$sql = "SELECT * FROM filelist WHERE field2='".$project."' && statusreport='".$statusreport."'";
			    $results = mysqli_query($con,$sql);
			    if(mysqli_num_rows($results) == 0){ 
				    echo "<div class='container-fluid row'><span class='col-xs-12'>"."No results found"."</span></div>";
				}
				else{
				    while($data2 = mysqli_fetch_assoc($results)){	
				    	echo "<div class='container-fluid row'>";
				    	echo "<form class='form-inline' method='post' action='"."move_file.php"."'>";
				    	echo "<input type='text' class='border-0 bg-0' name='id' value=".$data2['field1']." hidden>";
				    	echo "<input type='text' class='border-0 bg-0' name='project' value='".$data2['field2']."' hidden>";
				    	echo "<input type='text' class='border-0 bg-0' name='status' value='Denied' hidden>";
				    	echo "<span class='col mr-3'><input type='text' class='border-0 bg-0' name='filename' value='".$data2['field5']."' readonly></span>";
				    	echo "<span class='col my-3'><input type='text' class='border-0 bg-0 col-md-hidden' name='date' value=".$data2['field4']." readonly></span>";
				    	echo "<input type='text' class='border-0 bg-0' name='user' value=".$data2['field3']." readonly>";
				    	echo "<span class='col'> <input class='btn btn-danger' type='submit' value='Deny'>";
				    	echo "</form>";
				    	echo "<form class='form-inline' method='post' action='"."move_file.php"."'>";
				    	echo "<input type='text' class='border-0 bg-0' name='id' value=".$data2['field1']." hidden>";
				    	echo "<input type='text' class='border-0 bg-0' name='project' value='".$data2['field2']."' hidden>";
				    	echo "<input type='text' class='border-0 bg-0' name='status' value='Accepted' hidden>";
				    	echo "<input type='text' class='border-0 bg-0' name='filename' value='".$data2['field5']."' hidden></span>";
				    	echo "<input type='text' class='border-0 bg-0 col-md-hidden' name='date' value=".$data2['field4']." hidden></span>";
				    	echo "<input type='text' class='border-0 bg-0' name='user' value=".$data2['field3']." hidden>";
				    	echo "<span class='col'><input class='btn btn-success' type='submit' value='Accept'></span>";
				    	echo "</form>";
				    	echo "</div>";
				    } 
				}	
			    
		    }
	}	   
?>	
</article>
</section>
