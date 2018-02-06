<?php
include($_SERVER['DOCUMENT_ROOT']."/s140630php/config.php");

if ($db->connect_errno) {
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


$filter = $_POST['filter'];
$ableAddOn = false;
foreach ($filter as $value) {
	if ($value != 'EMPTY') {
		$ableAddOn = true;
	}
}

if ($ableAddOn) {
	$addOn = "WHERE ";
	if ($filter[0] != 'EMPTY') {
		$addOn .= "weekOf = '$filter[0]' AND ";
	}
	if ($filter[1] != 'EMPTY') {
		$addOn .= "category = '$filter[1]' AND ";
	}
	if ($filter[2] != 'EMPTY') {
		$addOn .= "projectType = '$filter[2]' AND ";
	}
	if ($filter[3] != 'EMPTY') {
		$addOn .= "saga = '$filter[3]' AND ";
	}
	if ($filter[4] != 'EMPTY') {
		$addOn .= "epic = '$filter[4]' AND ";
	}
	if ($filter[5] != 'EMPTY') {
		$addOn .= "story = '$filter[5]' AND ";
	}
	if ($filter[6] != 'EMPTY') {
		$addOn .= "assignedPerson = '$filter[6]' AND ";
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