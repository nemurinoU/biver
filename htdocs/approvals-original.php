<article class="container-fluid row col-xs-12 col-md-8 col-lg-9 ml-auto">
	<h2> Files for Approval </h2>
	<section class="container-fluid row jumbotron">
		<strong class="p-4 col m-3">Filename</strong>
		<strong class="p-4 col m-3">Date of Submission</strong>
		<strong class="p-4 col m-3">Author</strong>
		<strong class="p-4 col m-3">Action</strong>
	</section>
<?php
		if(isset($_SESSION['active'])) {
			// always sanitize your inputs 
			$uname = filter_var($_SESSION['active'],FILTER_SANITIZE_STRING); 
			// initialize prepared statements 
			$stmt = mysqli_stmt_init($con);
			$stmt2 = mysqli_stmt_init($con);

			if(mysqli_stmt_prepare($stmt, "SELECT project FROM accounts WHERE username=?")){
				mysqli_stmt_bind_param($stmt,"s",$uname);
		    	mysqli_stmt_execute($stmt);
		    }
			$results = mysqli_stmt_get_result($stmt);
			if(mysqli_num_rows($results) == 0){ echo "<div class='container-fluid row'><span class='col-xs-12'>"."No results found"."</span></div>"; }
			else{
				$data = mysqli_fetch_assoc($results);

				$project = filter_var($data['project'],FILTER_VALIDATE_INT); 
				// initialize prepared statements 
				if($_SESSION['access']=="Admin"){
					$sql = "SELECT * FROM filelist WHERE status='pending'";
					$query = mysqli_query($con,$sql);
					$results2 = mysqli_fetch_assoc($query);
				}
				else{
					$sql = "SELECT * FROM filelist WHERE project=? and status='pending'";
					if(mysqli_stmt_prepare($stmt2,$sql)){
			    	mysqli_stmt_bind_param($stmt2,"i",$project);
		    		mysqli_stmt_execute($stmt2);
		    		$results2 = mysqli_stmt_get_result($stmt2);
				}

			    	if(mysqli_num_rows($results2) == 0){ 
				    	echo "<div class='container-fluid row'><span class='col-xs-12'>"."No results found"."</span></div>";
					}
				    else{
				    		while($data = mysqli_fetch_assoc($results2)){	
				    			echo "<div class='container-fluid row'>";
				    			echo "<form class='form-inline' method='post' action='move-file.php'>";
				    			echo "<input type='text' class='border-0 bg-0' name='id' value=".$data['field1']." hidden>";
				    			echo "<input type='text' class='border-0 bg-0' name='project' value='".$data['field2']."' hidden>";
				    			echo "<span class='col mr-3'><input type='text' class='border-0 bg-0' name='filename' value='".$data['field5']."' readonly></span>";
				    			echo "<span class='col ml-3 mr-3'><input type='text' class='border-0 bg-0 col-md-hidden' name='date' value=".$data['field4']." readonly></span>";
				    			echo "<input type='text' class='border-0 bg-0' name='user' value=".$data['field3']." readonly>";
				    			echo "<span class='col'> <input class='btn btn-danger d-inline' type='submit' value='Deny'>";
				    			echo "</form>";
				    			echo "<form class='form-inline' method='post' action='move-file.php'>";
				    			echo "<input type='text' class='border-0 bg-0' name='account' value=".$data['account']." hidden>";
				    			echo "<input type='text' class='border-0 bg-0' name='project' value='".$data['project']."' hidden>";
				    			echo "<input type='text' class='border-0 bg-0' name='status' value='accepted' hidden>";
				    			echo "<input type='text' class='border-0 bg-0' name='researcher' value=".$data['researcher']." hidden>";
				    			echo "<input type='text' class='border-0 bg-0' name='filename' value='".$data['submission']."' hidden></span>";
				    			echo "<input type='text' class='border-0 bg-0 col-md-hidden' name='date' value=".$data['submit_date']." hidden></span>";
				    			echo "<input class='btn btn-success d-inline' type='submit' value='Accept'></span>";
				    			echo "</form>";
				    			echo "</div>";
				    			} 
				    	}	
			     }
			    	
			    
		    }
	}	   
?>	
</article>
