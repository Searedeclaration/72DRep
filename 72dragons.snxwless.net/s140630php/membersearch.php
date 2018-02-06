<?php
include($_SERVER['DOCUMENT_ROOT']."/s140630php/config.php");
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$memberNameWithSpace = $_POST['search'];
$memberName = str_replace(" ", "", $memberNameWithSpace);



$query = "SELECT * FROM filmMembers WHERE memberPhoto LIKE '%$memberName%' ORDER BY firstName ASC, lastName ASC";
$result = mysqli_query($db,$query);
while($data = mysqli_fetch_array($result)) {
	$member[] = $data;
}
  echo json_encode($member);
  mysqli_close($db);
?>