<?php
	$con=mysqli_connect("localhost", "root", "");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else{
		mysqli_select_db($con, 'str_database');
		$sql = "select * from datasets where SubmissionID = '" . $_GET['SubmissionID'] . "' ";
		$rec = mysqli_query($con, $sql);
		$data = mysqli_fetch_array($rec);

		if ($data['SubmissionID'] == "") {
			echo "Well shit";
		}
		$editlink = "datasets_edit.php?SubmissionID=".$_GET['SubmissionID'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $data['ScientificName']?></title>
</head>
	<body>
		<h1><?php echo $data['ScientificName']?></h1>
		<table>
			<tr>
				<td>
					Order:
				</td>
				<td>
					<?php echo $data['Orderr'] ?>
				</td>
			</tr>
			<tr>
				<td>
					Class:
				</td>
				<td>
					<?php echo $data['Class'] ?>
				</td>
			</tr>
			<tr>
				<td>
					Genus:
				</td>
				<td>
					<?php echo $data['Genus'] ?>
				</td>
			</tr>
			<tr>
				<td>
					Species:
				</td>
				<td>
					<?php echo $data['Species'] ?>
				</td>
			</tr>
			<tr>
				<td>
					Species Epithet:
				</td>
				<td>
					<?php echo $data['SpeciesEpithet'] ?>
				</td>
			</tr>
			<tr>
				<td>
					Subspecies:
				</td>
				<td>
					<?php echo $data['Subspecies'] ?>
				</td>
			</tr>
		</table>
		<a href="<?php echo $editlink ?>">EDIT</a>
	</body>
</html>