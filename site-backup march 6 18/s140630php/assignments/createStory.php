<?php
include($_SERVER['DOCUMENT_ROOT']."/s140630php/config.php");

if ($db->connect_errno) {
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


$ID = $_POST['ID'];
$newStory = $_POST['newStory'];
$type = $_POST['type'];


$query = "INSERT INTO webdevPage (page, type, parent) VALUES ('$newStory', '$type', '$ID')";

$db->query($query);
mysqli_close($db);
?>