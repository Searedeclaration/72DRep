<?php
include($_SERVER['DOCUMENT_ROOT']."/s140630php/config.php");

if ($db->connect_errno) {
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
session_start();

$itemID = $_POST['itemID'];
$userID = $_SESSION['login_ID'];

$db->query("UPDATE prodDetlChapters SET userID = '-1' WHERE ID = '$itemID' AND userID = '$userID';");//temp, need to set the children to -1 as well

mysqli_close($db);
?>