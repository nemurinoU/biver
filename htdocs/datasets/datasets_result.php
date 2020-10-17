<?php
	$con=mysqli_connect("localhost", "root", "");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else{

	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Results</title>
	</head>
	<body>
		<h1>Results</h1>
		<table>
			<?php
				mysqli_select_db($con, 'str_database');
				$sql = "select * from datasets where";
				$link = $_SERVER['QUERY_STRING'];
				print($link);
				if(strpos($link, 'scientificname') !== false){
					$sql = $sql .  " ScientificName = '" . $_GET['scientificname'] . "' ";
				}
				else if (strpos($link, 'submissionid') !== false){
					$sql = $sql .  " SubmissionID = '" . $_GET['submissionid'] . "' ";
				}
				else {
					$searchArray = ["Orderr" => $_GET['order'],
								"Class" => $_GET['class'],
								"Genus" => $_GET['genus'],
								"Species" => $_GET['species'],
								"SpeciesEpithet" => $_GET['epithet'],
								"Subspecies" => $_GET['subspecies'],
								"Collector" => $_GET['collector'],
								"CollectorID" => $_GET['collectorid'],
								"Location" => $_GET['location'],
								"YearOfCollection" => $_GET['year'],
								"MonthOfCollection" => $_GET['month'],
								"DayOfCollection" => $_GET['day'],
								"GPSLocation" => $_GET['gps']
							];
					$counter = 0;
					$conditional = 0;
					$originalcounter = 0;

					foreach ($searchArray as $key => $value){
						if ($value != ""){
							$counter++;
						}
					}

					$originalcounter = $counter;

					foreach ($searchArray as $key => $value){
						if ($originalcounter != $counter){
							if ($value == ""){
								continue;
							}
							else {
								if ($counter == 0){
									break;
								}
								$sql = $sql . " AND";
							}
						
						}

						if ($counter == 0){
							break;
						}
						else{
							if ($value == ""){
								continue;
							}
							$sql = $sql . " " . $key . "= '" . $value . "'" ;
							$counter--;
						}
					}
				}

				echo $sql;
				$rec = mysqli_query($con, $sql);
				while ($data = mysqli_fetch_array($rec)){
					echo "<tr>";
					echo "<td>";
					echo "<a href='datasets_page.php?SubmissionID=". $data['SubmissionID'] ."'>". $data['ScientificName'] ."</a>";
					echo "</td>";
					echo "</tr>";
				}
			?>

		</table>
	</body>
</html>