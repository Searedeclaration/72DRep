<?php
include($_SERVER['DOCUMENT_ROOT']."/s140630php/config.php");

if ($db->connect_errno) {
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


$csv = $_POST['csv'];
$legend = $_POST['legend'];

if ($legend == 'Website') {
	$table = 'webdevTracking';
} else {
	$table = 'prodTeamTracking';
}

$count = 0;
$loadColumns = "SELECT column_name FROM information_schema.columns WHERE table_name = '$table' ORDER BY ordinal_position";
$result = mysqli_query($db,$loadColumns);
while($data = mysqli_fetch_array($result)) {
	if ($count == 1) {
		$column = $data[0];
	} else if ($count == 0) {
		$placeholder;
	} else {
		$column .= ", ".$data[0];
	}
	$count++;
}

$count = 0;
foreach ($csv as $item) {
	if ($count == 0) {
		$value = "(".$item.")";
	} else {
		$value .= ", (".$item.")";
	}
	$count++;
}

$query = "INSERT INTO ".$table." (".$column.") VALUES ".$value;

$db->query($query);
echo $query;
mysqli_close($db);
?>