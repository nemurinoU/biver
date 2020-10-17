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
		if (isset($_POST['editbutton'])){
			$link = $_SERVER['QUERY_STRING'];
			$sql2 = "select * from edit_datasets where SubmissionID = '" . $_GET['SubmissionID'] . "' ";
			$rec2 = mysqli_query($con, $sql2);
			$data2 = mysqli_fetch_array($rec2);
			$var1 = $_POST['submissionid'];
			$var2 = $_POST['scientificname'];
			$var3 = $_POST['order'];
			$var4 = $_POST['class'];
			$var5 = $_POST['genus'];
			$var6 = $_POST['species'];
			$var7 = $_POST['speciesepithet'];
			$var8 = $_POST['subspecies'];
			$var9 = $_POST['collector'];
			$var10 = $_POST['collectorid'];
			$var11 = $_POST['location'];
			$var12 = $_POST['yearofcollection'];
			$var13 = $_POST['monthofcollection'];
			$var14 = $_POST['dayofcollection'];
			$var15 = $_POST['gpslocation'];

			if ($data2['SubmissionID'] !== $_POST['submissionid']) {
				echo "<script type='text/javascript'>alert('$var2');</script>";
				$editor="INSERT INTO edit_datasets (`SubmissionID`, `ScientificName`, `Orderr`, `Class`, `Genus`, `Species`, `SpeciesEpithet`, `Subspecies`, `Collector`, `CollectorID`, `Location`, `YearOfCollection`, `MonthOfCollection`, `DayOfCollection`, `GPSLocation`) VALUES ('$var1','$var2','$var3','$var4','$var5','$var6','$var7','$var8','$var9','$var10','$var11','$var12','$var13','$var14','$var15')";
				
				mysqli_query($con,$editor);
				header('location:datasets_page.php?SubmissionID='.$_POST['submissionid']);
				
			}
			else {
				echo "<script type='text/javascript'>alert('$var2');</script>";
				$delete = "DELETE FROM edit_datasets WHERE SubmissionID='". $_POST['submissionid'] . "'";
				mysqli_query($con,$delete);
				$editor="INSERT INTO edit_datasets (`SubmissionID`, `ScientificName`, `Orderr`, `Class`, `Genus`, `Species`, `SpeciesEpithet`, `Subspecies`, `Collector`, `CollectorID`, `Location`, `YearOfCollection`, `MonthOfCollection`, `DayOfCollection`, `GPSLocation`) VALUES ('$var1','$var2','$var3','$var4','$var5','$var6','$var7','$var8','$var9','$var10','$var11','$var12','$var13','$var14','$var15')";
				mysqli_query($con,$editor);
				header('location:datasets_page.php?SubmissionID='.$_POST['submissionid']);
				
			}
		}
		else {
			$editlink = "datasets_edit.php?SubmissionID=".$_GET['SubmissionID'];
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
	<form action="<?php $_PHP_SELF;?>" method="post">
		<h1><?php echo $data['ScientificName']?></h1>
		<table>
			<input type="text" id="submissionid" name="submissionid" value="<?php echo $data['SubmissionID'] ?>" hidden="" readonly="">
			<tr>
				<td>
					Scientific Name:
				</td>
				<td>
					<input type="text" id="scientificname" name="scientificname" placeholder="<?php echo $data['ScientificName'] ?>">
				</td>
			</tr>
			<tr>
				<td>
					Order:
				</td>
				<td>
					<input type="text" id="order" name="order" placeholder="<?php echo $data['Orderr'] ?>">
				</td>
			</tr>
			<tr>
				<td>
					Class:
				</td>
				<td>
					<input type="text" id="class" name="class" placeholder="<?php echo $data['Class'] ?>">
				</td>
			</tr>
			<tr>
				<td>
					Genus:
				</td>
				<td>
					<input type="text" id="genus" name="genus" placeholder="<?php echo $data['Genus'] ?>">
				</td>
			</tr>
			<tr>
				<td>
					Species:
				</td>
				<td>
					<input type="text" id="species" name="species" placeholder="<?php echo $data['Species'] ?>">
				</td>
			</tr>
			<tr>
				<td>
					Species Epithet:
				</td>
				<td>
					<input type="text" id="speciesepithet" name="speciesepithet" placeholder="<?php echo $data['SpeciesEpithet'] ?>">
				</td>
			</tr>
			<tr>
				<td>
					Subspecies:
				</td>
				<td>
					<input type="text" id="subspecies" name="subspecies" placeholder="<?php echo $data['Subspecies'] ?>">
				</td>
			</tr>
			<tr>
				<td>
					Collector:
				</td>
				<td>
					<input type="text" id="collector" name="collector" placeholder="<?php echo $data['Collector'] ?>">
				</td>
			</tr>
			<tr>
				<td>
					Collector ID:
				</td>
				<td>
					<input type="text" id="collectorid" name="collectorid" placeholder="<?php echo $data['CollectorID'] ?>">
				</td>
			</tr>
			<tr>
				<td>
					Location:
				</td>
				<td>
					<input type="text" id="location" name="location" placeholder="<?php echo $data['Location'] ?>">
				</td>
			</tr>
			<tr>
				<td>
					Year Of Collection:
				</td>
				<td>
					<input type="text" id="yearofcollection" name="yearofcollection" placeholder="<?php echo $data['YearOfCollection'] ?>">
				</td>
			</tr>
			<tr>
				<td>
					Month Of Collection:
				</td>
				<td>
					<input type="text" id="monthofcollection" name="monthofcollection" placeholder="<?php echo $data['MonthOfCollection'] ?>">
				</td>
			</tr>
			<tr>
				<td>
					Day Of Collection:
				</td>
				<td>
					<input type="text" id="dayofcollection" name="dayofcollection" placeholder="<?php echo $data['DayOfCollection'] ?>">
				</td>
			</tr>
			<tr>
				<td>
					GPS Location:
				</td>
				<td>
					<input type="text" id="gpslocation" name="gpslocation" placeholder="<?php echo $data['GPSLocation'] ?>">
				</td>
			</tr>
		</table>
		<button type="submit" id="editbutton" name="editbutton"> EDIT </button>
	</form>
</body>
</html>