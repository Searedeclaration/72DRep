<?php
include($_SERVER['DOCUMENT_ROOT']."/s140630php/config.php");

if ($db->connect_errno) {
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


$division = $_POST['division'];
$ID = $_POST['ID'];
if ($division == 'Web') {
	$loadReport = "SELECT * FROM webdevTracking WHERE ID = '$ID';";
} else if ($division == 'Production') {
	$loadReport = "SELECT * FROM prodTeamTracking WHERE ID = '$ID';";
}
$result = mysqli_query($db,$loadReport);
while($data = mysqli_fetch_array($result)) {
	$report = $data;
}

echo json_encode($report);
mysqli_close($db);
?>