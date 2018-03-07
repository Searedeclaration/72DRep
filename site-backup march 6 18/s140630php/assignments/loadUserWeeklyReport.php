<?php
include($_SERVER['DOCUMENT_ROOT']."/s140630php/config.php");

if ($db->connect_errno) {
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$addOn = '';

if (isset($_POST['user']) || isset($_POST['date'])) {
	$addOn = "WHERE ";
	if (isset($_POST['user'])) {
		$searchVar = $_POST['user'];
		$addOn .= "assignedPerson = '$searchVar' AND ";
	}
	if (isset($_POST['date'])) {
		$searchVar = $_POST['date'];
		$addOn .= "weekOf = '$searchVar' AND ";
	}
	
	$addOn = rtrim($addOn,"AND ");
	
}

$loadReport = "SELECT * FROM webdevTracking ".$addOn;
$result = mysqli_query($db,$loadReport);
while($data = mysqli_fetch_array($result)) {
	$report[] = $data;
}

echo json_encode($report);
mysqli_close($db);
?>