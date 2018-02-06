<?php
include($_SERVER['DOCUMENT_ROOT']."/s140630php/config.php");

if ($db->connect_errno) {
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$storyID = $_POST['id'];

$loadSampleData = "SELECT page, description, percentComplete, hasMockup, hasWeb, inProgress, isComplete, inDatabase FROM webdevPage WHERE pageID = '$storyID'";
$result = mysqli_query($db,$loadSampleData);
while($data = mysqli_fetch_array($result)) {
	$storyInfo = $data;
}

echo json_encode($storyInfo);
mysqli_close($db);
?>