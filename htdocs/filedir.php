<article id="filelist" class="container-fluid col-xs-12 col-md-8 col-lg-9 ">
		<h2> My Files </h2> 
		<div class="jumbotron row">
			<h5 class="p-4 col"> Filename </h5>
			<h5 class="p-4 col"> Date </h5>
			<h5 class="p-4 col"> Action </h5>
		</div>	
		<?php
			if(isset($_SESSION['active'])) {
				// always sanitize your inputs 
				$uname = filter_var($_SESSION['active'],FILTER_SANITIZE_STRING); 
				// initialize prepared statements 
				$stmt = mysqli_stmt_init($con);
			    if(mysqli_stmt_prepare($stmt,"SELECT * FROM filelist WHERE field3=?")){
			    	if(!mysqli_stmt_bind_param($stmt,"s",$uname))
			    	{	$_SESSION['error-message']="Binding parameters failed: ".mysqli_stmt_error($stmt);
			    		$_SESSION['redirect-url'] = $_SERVER['REQUEST_URI']; 
			    		header("Location: error_pages/error-message.php"); }

			    	if(!(mysqli_stmt_execute($stmt)))
					{	$_SESSION['error-message']="Execution failed: ".mysqli_stmt_error($stmt);
						$_SESSION['redirect-url'] = $_SERVER['REQUEST_URI'];
			    		header("Location: error_pages/error-message.php"); }

			    	$results = mysqli_stmt_get_result($stmt);

			    	if(mysqli_num_rows($results) == 0){ echo "<div class='container-fluid row'><span class='col-xs-12'>"."No results found"."</span></div>"; }
			    	else{
			    		while($data = mysqli_fetch_assoc($results)){	
			    			echo "<div class='container-fluid row ml-3'>";
			    			echo "<form class='form-inline' method='post' action='delete-file.php'>";
			    			echo "<input type='text' class='border-0 bg-0' name='id' value=".$data['field1']." hidden>";
			    			echo "<input type='text' class='border-0 bg-0' name='project' value='".$data['field2']."' hidden>";
			    			echo "<input type='text' class='border-0 bg-0' name='user' value=".$data['field3']." hidden>";
			    			echo "<span class='col mr-3'><input type='text' class='border-0 bg-0' name='filename' value='".$data['field5']."' readonly></span>";
			    			echo "<span class='col ml-3 mr-3'><input type='text' class='border-0 bg-0 col-md-hidden' name='date' value=".$data['field4']." readonly></span>";
			    			echo "<span class='col'> <input class='btn btn-danger' type='submit' value='Delete'></span>";
			    			echo "</form>";
			    			echo "<form class='form-inline' method='post' action='download.php'>";
			    			echo "<input type='text' class='border-0 bg-0' name='id' value=".$data['field1']." hidden>";
			    			echo "<input type='text' class='border-0 bg-0' name='project' value='".$data['field2']."' hidden>";
			    			echo "<input type='text' class='border-0 bg-0' name='user' value=".$data['field3']." hidden>";
			    			echo "<input type='text' class='border-0 bg-0' name='file' value='".$data['field5']."' hidden></span>";
			    			echo "<input type='text' class='border-0 bg-0 col-md-hidden' name='date' value=".$data['field4']." hidden></span>";
			    			echo "<span class='col'> <input class='btn btn-success' type='submit' value='Download'></span>";
			    			echo "</form>";
			    			
			    			echo "</div>";
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
	</article>
</section>
<section class="container-fluid row ml-5">
<article id="filelist" class="container-fluid col-xs-12 col-md-8 col-lg-9 col-lg-offset-3 mr-5">
		<h2> Project Files </h2> 
		<div class="jumbotron row">
			<h5 class="p-4 col"> Filename </h5>
			<h5 class="p-4 col"> Date </h5>
			<h5 class="p-4 col"> Action </h5>
		</div>	
		<?php
			if(isset($_SESSION['active'])) {
				// always sanitize your inputs 
				$uname = filter_var($_SESSION['active'],FILTER_SANITIZE_STRING); 
				// initialize prepared statements 
				$stmt = mysqli_stmt_init($con);
			    if(mysqli_stmt_prepare($stmt,"SELECT * FROM filelist WHERE field2=?")){
			    	if(!mysqli_stmt_bind_param($stmt,"s",$project))
			    	{	$_SESSION['error-message']="Binding parameters failed: ".mysqli_stmt_error($stmt);
			    		$_SESSION['redirect-url'] = $_SERVER['REQUEST_URI']; 
			    		header("Location: error_pages/error-message.php"); }

			    	if(!(mysqli_stmt_execute($stmt)))
					{	$_SESSION['error-message']="Execution failed: ".mysqli_stmt_error($stmt);
						$_SESSION['redirect-url'] = $_SERVER['REQUEST_URI'];
			    		header("Location: error_pages/error-message.php"); }

			    	$results = mysqli_stmt_get_result($stmt);

			    	if(mysqli_num_rows($results) == 0){ echo "<div class='container-fluid row'><span class='col-xs-12'>"."No results found"."</span></div>"; }
			    	else{
			    		while($data = mysqli_fetch_assoc($results)){	
			    			echo "<form class='form-inline' method='post' action='download.php'>";
			    			echo "<input type='text' class='border-0 bg-0' name='id' value=".$data['field1']." hidden>";
			    			echo "<input type='text' class='border-0 bg-0' name='project' value='".$data['field2']."' hidden>";
			    			echo "<input type='text' class='border-0 bg-0' name='user' value=".$data['field3']." hidden>";
			    			echo "<input type='text' class='border-0 bg-0' name='file' value='".$data['field5']."' hidden></span>";
			    			echo "<input type='text' class='border-0 bg-0 col-md-hidden' name='date' value=".$data['field4']." hidden></span>";
			    			echo "<span class='col'> <input class='btn btn-success' type='submit' value='Download'></span>";
			    			echo "</form>";
			    			
			    			echo "</div>";
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
	</article>
</section>