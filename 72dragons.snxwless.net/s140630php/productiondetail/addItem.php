<?php
include($_SERVER['DOCUMENT_ROOT']."/s140630php/config.php");

if ($db->connect_errno) {
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
session_start();

$chaptersTitle = $_POST['title'];
$chaptersDesc = $_POST['desc'];
$chaptersType = $_POST['type'];
$chaptersParent= $_POST['parent'];
$process = $_POST['process'];
$itemID = $_POST['itemID'];
$userID = $_SESSION['login_ID'];

if ($process == 'create') {
$query = "INSERT INTO prodDetlChapters (userID, type, parent, title, description) VALUES ('$userID', '$chaptersType', '$chaptersParent', '$chaptersTitle', '$chaptersDesc');";
$db->query($query);
//return the id that was created
$res = mysqli_query($db,'SELECT LAST_INSERT_ID()');
$row = mysqli_fetch_array($res);
echo $row[0];

} else if ($process == 'save') {
$query = "UPDATE prodDetlChapters SET title = '$chaptersTitle', description = '$chaptersDesc' WHERE ID = '$itemID'";
$db->query($query);
}
mysqli_close($db);
?>