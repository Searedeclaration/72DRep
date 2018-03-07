<?php
include($_SERVER['DOCUMENT_ROOT']."/s140630php/config.php");

if ($db->connect_errno) {
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


$content = $_POST['content'];
$toUpdate = $_POST['toUpdate'];
$columnIndex = $_POST['column'];
$legend = $_POST['legend'];
$count = 0;

if ($legend == 'Web') {
	$loadColumns = "SELECT column_name FROM information_schema.columns WHERE table_name = 'webdevTracking' ORDER BY ordinal_position";
	$result = mysqli_query($db,$loadColumns);
	while($data = mysqli_fetch_array($result)) {
		if ($count == $columnIndex) {
			$column = $data[0];
		}
		$count++;
	}
	$query = "UPDATE webdevTracking set ".$column." = '$content' WHERE ID = '$toUpdate'";
} else if ($legend == 'Production') {
	$loadColumns = "SELECT column_name FROM information_schema.columns WHERE table_name = 'prodTeamTracking' ORDER BY ordinal_position";
	$result = mysqli_query($db,$loadColumns);
	while($data = mysqli_fetch_array($result)) {
		if ($count == $columnIndex) {
			$column = $data[0];
		}
		$count++;
	}
	$query = "UPDATE prodTeamTracking set ".$column." = '$content' WHERE ID = '$toUpdate'";
}

$db->query($query);
echo $query;
mysqli_close($db);
?>