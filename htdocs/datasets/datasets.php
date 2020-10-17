<?php
	$con=mysqli_connect("localhost", "root", "");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else{
		mysqli_select_db($con, 'str_database');
		if(isset($_POST['searchButton1'])){
			if ($_POST['searchBar'] == "Scientific name" || $_POST['searchBar'] == "") {
				$message = "Please type the scientific name.";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
			else{
				$string = 'Location: datasets_result.php?scientificname='.$_POST['searchBar'];
				header($string);
			}
		}
		if(isset($_POST['searchButton2'])){
			$link = "Location: datasets_result.php?";
			$link = $link . "scientificname=&" . "order=" . $_POST['order'] . "&" . "class=" . $_POST['class'] . "&" . "genus=" . $_POST['genus'] . "&" . "species=" . $_POST['species'] . "&" . "epithet=" . $_POST['epithet'] . "&" . "subspecies=" . $_POST['subspecies'] . "&" . "collector=" . $_POST['collector'] . "&" . "collectorid=" . $_POST['collectorid'] . "&" . "location=" . $_POST['location'] . "&" . "year=" . $_POST['year'] . "&" . "month=" . $_POST['month'] . "&" . "day=" . $_POST['day'] . "&". "gps=" . $_POST['gps'] . "&";
			header($link);
		}
		if(isset($_POST['searchButton3'])){
			if ($_POST['searchBar3'] == "ID Name" || $_POST['searchBar3'] == "") {
				$message = "Please type the Submission ID.";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
			else{
				$string = 'Location: datasets_result.php?submissionid='.$_POST['searchBar3'];
				header($string);
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dataset - BiVER</title>
</head>
<body>
	
	<h1>Algae Dataset</h1>
	<p>Quick Search:</p>
	<p>Search via Scientific Name</p>
	<form action="<?php $_PHP_SELF;?>" method="post">
		<input type="text" name="searchBar" value="" placeholder="Scientific name" required>
		<button type="submit" name="searchButton1" width="100px">Search</button>
	</form>
	<p>Search via Submission Number</p>
	<form action="<?php $_PHP_SELF;?>" method="post">
		<input type="text" name="searchBar3" value="" placeholder="ID Name" required>
		<button type="submit" name="searchButton3" width="100px">Search</button>
	</form>
	<a href="">Want to download multiple datasets? Click here</a>
	<a href="">Click here to perform advanced search</a>
	<h2>Advanced Search</h2>
	<form action="<?php $_PHP_SELF;?>" method="post">
		<table>
		<tr>
			<th>Taxonomic Information</th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
		<tr>
			<td>Order:</td>
			<td><input type="text" id="order" name="order"></td>
			<td>Class:</td>
			<td><input type="text" id="class" name="class"></td>
		</tr>
		<tr>
			<td>Genus:</td>
			<td><input type="text" id="genus" name="genus" required></td>
			<td>Species:</td>
			<td><input type="text" id="species" name="species" required></td>
		</tr>
		<tr>
			<td>Species Epithet:</td>
			<td><input type="text" id="epithet" name="epithet"></td>
			<td>Subspecies:</td>
			<td><input type="text" id="subspecies" name="subspecies"></td>
		</tr>
		<tr>
			<td>Collector:</td>
			<td><input type="text" id="collector" name="collector"></td>
			<td>Collector ID:</td>
			<td><input type="text" id="collectorid" name="collectorid"></td>
		</tr>
		<tr>
			<th>Geographical Information</th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
		<tr>
			<td>Location:</td>
			<td><input type="text" id="location" name="location"></td>
			<td>Year of Collection:</td>
			<td><input type="text" id="year" name="year"></td>
		</tr>
		<tr>
			<td>Month of Collection:</td>
			<td><input type="text" id="month" name="month"></td>
			<td>Day of Collection:</td>
			<td><input type="text" id="day" name="day"></td>
		</tr>
		<tr>
			<td>GPS Location:</td>
			<td><input type="text" id="gps" name="gps"></td>
			<td>Import GPX File</td>
			<td></td>
		</tr>

		</table>
		<button type="submit" name="searchButton2" width="100px">Search</button>
	</form>
</body>
</html>