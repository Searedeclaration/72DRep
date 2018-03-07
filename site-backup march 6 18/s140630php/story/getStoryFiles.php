<?php
include($_SERVER['DOCUMENT_ROOT']."/s140630php/config.php");

if ($db->connect_errno) {
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$storyID = $_POST['ID'];

$query = "SELECT * FROM storyAttachments WHERE storyID = '$storyID'";
$result = mysqli_query($db,$query);
while($data = mysqli_fetch_array($result)) {
	$files[] = $data;
}

echo json_encode($files);
mysqli_close($db);
?>