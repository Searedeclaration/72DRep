<?php
include($_SERVER['DOCUMENT_ROOT']."/s140630php/config.php");

if ($db->connect_errno) {
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

function getLegend($storyID, $type, $db) {
	$query = "SELECT parent FROM webdevPage WHERE pageID = '$storyID'";
	$result = mysqli_query($db,$query);
	$parentID = mysqli_fetch_array($result);
	switch ($type) {
		case 'Story':
			return getLegend($parentID[0], 'Epic', $db);
			break;
		case 'Epic':
			return getLegend($parentID[0], 'Saga', $db);
			break;
		case 'Saga':
			$query = "SELECT page FROM webdevPage WHERE pageID = '$parentID[0]'";
			$result = mysqli_query($db,$query);
			$Legend = mysqli_fetch_array($result);
			return $Legend[0];
			break;
	}
}



$storyType = $_POST['type'];

$loadSampleData = "SELECT * FROM webdevPage WHERE type = '$storyType'";
$result = mysqli_query($db,$loadSampleData);
while($data = mysqli_fetch_array($result)) {
	$legendParent = getLegend($data[0], $storyType, $db);
	$storyInfo[] = "<span data-storyID='".$data[0]."'>[".$legendParent."]</span> ".$data[1];
}

echo json_encode($storyInfo);
mysqli_close($db);
?>