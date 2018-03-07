<?php
include($_SERVER['DOCUMENT_ROOT']."/s140630php/config.php");

if ($db->connect_errno) {
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


$csv = $_POST['csv'];

$count = 0;
$loadColumns = "SELECT column_name FROM information_schema.columns WHERE table_name = 'webdevPage' ORDER BY ordinal_position";
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
foreach ($csv as $row) {
	$nestCount = 0;
	if ($count == 0) {
		$value = "(";
		foreach ($row as $item) {
			if ($nestCount == 0) {
				$value .= "'".$item."'";
			} else {
				$value .= ",'".$item."'";
			}
			$nestCount++;
		}
		$value .= ")";
	} else {
		$value .= ", (";
		foreach ($row as $item) {
			if ($nestCount == 0) {
				$value .= "'".$item."'";
			} else {
				$value .= ",'".$item."'";
			}
			$nestCount++;
		}
		$value .= ")";
	}
	$count++;
}

$query = "INSERT INTO webdevPage (".$column.") VALUES ".$value;

$db->query($query);
echo $query;
mysqli_close($db);
?>