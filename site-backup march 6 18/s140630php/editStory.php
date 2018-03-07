<?php
include($_SERVER['DOCUMENT_ROOT']."/s140630php/config.php");

if ($db->connect_errno) {
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$storyUpdate = array($_POST['id'], $_POST['editTitle'], $_POST['editDesc'], $_POST['editPercent'], $_POST['editMockup'], $_POST['editWebPage'], $_POST['editProgress'], $_POST['editDatabase'], $_POST['editCompleted']);

        $query = "UPDATE webdevPage (page, description, hasMockup, hasWeb, inProgress, isComplete, percentComplete, inDatabase) VALUES ('$storyUpdate[1]', '$storyUpdate[2]', '$storyUpdate[3]', '$storyUpdate[4]', '$storyUpdate[5]', '$storyUpdate[6]', '$storyUpdate[7]', '$storyUpdate[8]') WHERE pageID = '$storyUpdate[0]';";
        $db->query($query);

mysqli_close($db);
?>