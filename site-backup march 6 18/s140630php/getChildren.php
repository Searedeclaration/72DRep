<?php
include($_SERVER['DOCUMENT_ROOT']."/s140630php/config.php");

if ($db->connect_errno) {
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$storyID = $_POST['id'];

$loadSampleData = "SELECT pageID, page FROM webdevPage WHERE parent = '$storyID'";
$result = mysqli_query($db,$loadSampleData);
while($data = mysqli_fetch_array($result)) {
	$childrenList[] = $data;
}

echo json_encode($childrenList);
mysqli_close($db);
?>