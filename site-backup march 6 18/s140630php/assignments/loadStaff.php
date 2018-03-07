<?php
include($_SERVER['DOCUMENT_ROOT']."/s140630php/config.php");
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$query = "SELECT ID, name, profile FROM 72Dstaff ORDER BY name ASC;";
$result = mysqli_query($db,$query);
while($data = mysqli_fetch_array($result)) {
	$member[] = $data;
}
  echo json_encode($member);
  mysqli_close($db);
?>