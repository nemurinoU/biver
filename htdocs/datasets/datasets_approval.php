<?php
	$con=mysqli_connect("localhost", "root", "");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Submission Approval</title>
</head>
<body>
	<table>
		<tr>
			<td>Submission ID</td>
			<td>Scientific Name</td>
			<td>Order</td>
			<td>Class</td>
			<td>Genus</td>
			<td>Species</td>
			<td>Subspecies</td>
			<td>Species Epithet</td>
			<td>Collector</td>
			<td>CollectorID</td>
			<td>Location</td>
			<td>YearOfCollection</td>
			<td>MonthOfCollection</td>
			<td>DayOfCollection</td>
			<td>GPSLocation</td>
			
			<td>Actions</td>
		</tr>
	<?php 
			mysqli_select_db($con, 'str_database');
			$sql = "select * from edit_datasets";
			$rec = mysqli_query($con, $sql);
		
			while ($data = mysqli_fetch_array($rec)) {
				echo "<tr>";
				echo "<td>" . $data['SubmissionID'] . "</td>";
				echo "<td>" . $data['ScientificName'] . "</td>";
				echo "<td>" . $data['Orderr'] . "</td>";
				echo "<td>" . $data['Class'] . "</td>";
				echo "<td>" . $data['Genus'] . "</td>";
				echo "<td>" . $data['Species'] . "</td>";
				echo "<td>" . $data['Subspecies'] . "</td>";
				echo "<td>" . $data['SpeciesEpithet'] . "</td>";
				echo "<td>" . $data['Collector'] . "</td>";
				echo "<td>" . $data['CollectorID'] . "</td>";
				echo "<td>" . $data['Location'] . "</td>";
				echo "<td>" . $data['YearOfCollection'] . "</td>";
				echo "<td>" . $data['MonthOfCollection'] . "</td>";
				echo "<td>" . $data['DayOfCollection'] . "</td>";
				echo "<td>" . $data['GPSLocation'] . "</td>";
				$SubmissionID = $data['SubmissionID'];
				echo "<td><button><a href='approval_results.php?id=$SubmissionID&action=Accept' class='edits'>Accept</a></button>&nbsp;&nbsp;<button><a href='approval_results.php?id=$SubmissionID&action=Deny' class='edits'>Deny</a></button></td>";
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>