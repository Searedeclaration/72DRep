<?php
include($_SERVER['DOCUMENT_ROOT']."/s140630php/config.php");

if ($db->connect_errno) {
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$commentID = $_POST['commentID'];
$comment = $_POST['comment'];


$query = "DELETE FROM `storyComments` WHERE `ID` = '$commentID'";

$db->query($query);
mysqli_close($db);
?>