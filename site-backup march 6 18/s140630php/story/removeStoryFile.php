<?php
include($_SERVER['DOCUMENT_ROOT']."/s140630php/config.php");

if ($db->connect_errno) {
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$fileID = $_POST['fileID'];
$pageID = $_POST['pageID'];
$fileName = $_POST['fileName'];


$query = "DELETE FROM `storyAttachments` WHERE `ID` = '$fileID'";
unlink(realpath($_SERVER['DOCUMENT_ROOT']."/files/story/".$pageID."/".$fileName));

$db->query($query);
mysqli_close($db);
?>