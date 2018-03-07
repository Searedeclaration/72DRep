<?php
include($_SERVER['DOCUMENT_ROOT']."/s140630php/config.php");

if ($db->connect_errno) {
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
session_start();

$itemID = $_POST['itemID'];
$userID = $_SESSION['login_ID'];

$res = mysqli_query($db,"SELECT ID, title, description FROM prodDetlChapters WHERE ID = '$itemID' AND userID = '$userID';");
while($data = mysqli_fetch_array($res)){
	$column[] = $data;
}


echo json_encode($column);
mysqli_close($db);
?>