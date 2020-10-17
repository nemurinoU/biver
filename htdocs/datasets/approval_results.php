<?php
	$con=mysqli_connect("localhost", "root", "");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else{
		mysqli_select_db($con, 'str_database');
		$sql = "select * from datasets where SubmissionID='" . $_GET['id'] . "'";
		$rec = mysqli_query($con, $sql);
		$data = mysqli_fetch_array($rec);

		$sql = "select * from edit_datasets where SubmissionID='" . $_GET['id'] ."'";
		$rec = mysqli_query($con, $sql);
		$data2 = mysqli_fetch_array($rec);

		if ($_GET['action'] == "Accept") {
			echo "<script type='text/javascript'>alert('Curse');</script>";

			if ($data2['ScientificName'] != ""){
				$ins = "update datasets set ScientificName='" . $data2['ScientificName'] . "' where SubmissionID='" . $_GET['id'] . "'";
				mysqli_query($con, $ins);
			}
			if ($data2['Orderr'] != ""){
				$ins = "update datasets set Orderr='" . $data2['Orderr'] . "' where SubmissionID='" . $_GET['id'] . "'";
				mysqli_query($con, $ins);
			}
			if ($data2['Class'] != ""){
				$ins = "update datasets set Class='" . $data2['Class'] . "' where SubmissionID='" . $_GET['id'] . "'";
				mysqli_query($con, $ins);
			}
			if ($data2['Genus'] != ""){
				$ins = "update datasets set Genus='" . $data2['Genus'] . "' where SubmissionID='" . $_GET['id'] . "'";
				mysqli_query($con, $ins);
			}
			if ($data2['Species'] != ""){
				$ins = "update datasets set Species='" . $data2['Species'] . "' where SubmissionID='" . $_GET['id'] . "'";
				mysqli_query($con, $ins);
			}
			if ($data2['SpeciesEpithet'] != ""){
				$ins = "update datasets set SpeciesEpithet='" . $data2['SpeciesEpithet'] . "' where SubmissionID='" . $_GET['id'] . "'";
				mysqli_query($con, $ins);
			}
			if ($data2['Subspecies'] != ""){
				$ins = "update datasets set Subspecies='" . $data2['Subspecies'] . "' where SubmissionID='" . $_GET['id'] . "'";
				mysqli_query($con, $ins);
			}
			if ($data2['Collector'] != ""){
				$ins = "update datasets set Collector='" . $data2['Collector'] . "' where SubmissionID='" . $_GET['id'] . "'";
				mysqli_query($con, $ins);
			}
			if ($data2['CollectorID'] != ""){
				$ins = "update datasets set CollectorID='" . $data2['CollectorID'] . "' where SubmissionID='" . $_GET['id'] . "'";
				mysqli_query($con, $ins);
			}
			if ($data2['Location'] != ""){
				$ins = "update datasets set Location='" . $data2['Location'] . "' where SubmissionID='" . $_GET['id'] . "'";
				mysqli_query($con, $ins);
			}
			if ($data2['YearOfCollection'] != ""){
				$ins = "update datasets set YearOfCollection='" . $data2['YearOfCollection'] . "' where SubmissionID='" . $_GET['id'] . "'";
				mysqli_query($con, $ins);
			}
			if ($data2['MonthOfCollection'] != ""){
				$ins = "update datasets set MonthOfCollection='" . $data2['MonthOfCollection'] . "' where SubmissionID='" . $_GET['id'] . "'";
				mysqli_query($con, $ins);
			}
			if ($data2['DayOfCollection'] != ""){
				$ins = "update datasets set DayOfCollection='" . $data2['DayOfCollection'] . "' where SubmissionID='" . $_GET['id'] . "'";
				mysqli_query($con, $ins);
			}
			if ($data2['GPSLocation'] != ""){
				$ins = "update datasets set GPSLocation='" . $data2['GPSLocation'] . "' where SubmissionID='" . $_GET['id'] . "'";
				mysqli_query($con, $ins);
			}
			$delete = "DELETE FROM edit_datasets WHERE SubmissionID='". $_GET['id'] . "'";
			mysqli_query($con,$delete);
			header('location:datasets_approval.php');
		}

		else {
			echo "<script type='text/javascript'>alert('Dream');</script>";

			$delete = "DELETE FROM edit_datasets WHERE SubmissionID='". $_GET['id'] . "'";
			mysqli_query($con,$delete);

			header('location:datasets_approval.php');
		}
	}
?>