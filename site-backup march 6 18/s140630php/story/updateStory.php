<?php
include($_SERVER['DOCUMENT_ROOT']."/s140630php/config.php");

if ($db->connect_errno) {
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$ID = $_POST['updateID'];
$storyType = $_POST['createType'];
$parent = $_POST['createStoryParentID'];
$storyName = $_POST['storyName'];
$hasMockup = $_POST['crt-hm'];
$hasWebpage = $_POST['crt-hw'];
$inProgress = $_POST['crt-ip'];
$isComplete = $_POST['crt-ic'];
$inDatabase = $_POST['crt-idb'];
$storyDesc = $_POST['storyDesc'];
$perComp = $_POST['crt-perComp'];
//$comments = $_POST['comment'];

if (isset($hasMockup)) {
	$hasMockup = "1";
} else {
	$hasMockup = "0";
}
if (isset($hasWebpage)) {
	$hasWebpage = "1";
} else {
	$hasWebpage = "0";
}
if (isset($inProgress)) {
	$inProgress = "1";
} else {
	$inProgress = "0";
}
if (isset($isComplete)) {
	$isComplete = "1";
} else {
	$isComplete = "0";
}
if (isset($inDatabase)) {
	$inDatabase = "1";
} else {
	$inDatabase = "0";
}

$query = "UPDATE webdevPage SET page = '$storyName', type = '$storyType', parent = '$parent', description = '$storyDesc', hasMockup = '$hasMockup', hasWeb = '$hasWebpage', inProgress = '$inProgress', isComplete = '$isComplete', percentComplete = '$perComp', inDatabase = '$inDatabase' WHERE pageID = '$ID'";
$db->query($query);

//Files and Comments



//Files
$fileInputNames = array('mockupFiles', 'webpageFiles', 'progressFiles', 'completeFiles', 'databaseFiles');
$i = 0;
if (!file_exists($_SERVER['DOCUMENT_ROOT']."/files/story/".$ID)) {
	mkdir($_SERVER['DOCUMENT_ROOT']."/files/story/".$ID, 0777, true);
}
foreach ($fileInputNames as $inputName) {
	if (!empty($_FILES[$inputName]["error"])) {
		foreach ($_FILES[$inputName]["error"] as $key => $error) {
    			if ($error == UPLOAD_ERR_OK) {
       				$tmp_name = $_FILES[$inputName]["tmp_name"][$key];
        			$name = basename($_FILES[$inputName]["name"][$key]);
        			move_uploaded_file($tmp_name, $_SERVER['DOCUMENT_ROOT']."/files/story/".$ID."/".$name);
        			$query = "INSERT INTO storyAttachments (storyID, sectionID, fileName) VALUES ('$ID', '$i', '$name');";
        			$db->query($query);
    			} else {
    				echo $error;
    			}
		}
	}
	$i++;
}

/*
//Comments
for ($i = 0; $i < 5; $i++) {
	if(isset($comments[$i])) {
		foreach($comments[$i] as $comment) {
			$query = "INSERT INTO storyComments (storyID, sectionID, comment) VALUES ('$ID', '$i', '$comment')";
			$db->query($query);
		}
	}
}*/

mysqli_close($db);

echo '<script type="text/javascript"> window.location = "http://72dragons.snxwless.net/cms/story.php"; </script> '
?>