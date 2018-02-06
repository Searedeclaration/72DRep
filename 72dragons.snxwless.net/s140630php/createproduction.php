<?php
include($_SERVER['DOCUMENT_ROOT']."/s140630php/config.php");
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$prodTitle = $_POST['prodTitle'];
$prodRegion = $_POST['prodRegion'];
$prodDesc = $_POST['prodDesc'];
$prodNeeds = $_POST['prodNeeds'];

//Production Information	
$query = "INSERT INTO userProductions (title, region, description, needs) VALUES ('$prodTitle', '$prodRegion', '$prodDesc', '$prodNeeds');";
$db->query($query);

$query = "SELECT productionID FROM userProductions WHERE title = '$prodTitle' AND region = '$prodRegion' AND description = '$prodDesc' ORDER BY productionID DESC";
$result = mysqli_query($db,$query);
while($data = mysqli_fetch_array($result)) {
	$movieID = $data[0];
	break;
}

//Genres
if(isset($_POST['check'])) {
$numItems = count($_POST['check']);
$i = 0;
$query = "INSERT INTO prodGenres (productionID, genre) VALUES";
foreach ($_POST['check'] as $genre) {
if(++$i === $numItems) {
 $query .= " ('$movieID', '$genre');";
} else {
 $query .= " ('$movieID', '$genre'), ";
 }
}
$db->query($query);
}
//Members
if(isset($_POST['member'])) {
$memberInfo = array();
$numItems = count($_POST['member']);
$i = 0;
foreach ($_POST['member'] as $member) {
	$memberInfo[++$i][0] = $member;
}
$i = 0;
foreach ($_POST['role'] as $role) {
	$memberInfo[++$i][1] = $role;
}
$i = 0;
foreach ($_POST['character'] as $character) {
	$memberInfo[++$i][2] = $character;
}


$numItems = count($memberInfo);
$i = 0;
$query = "INSERT INTO prodMembers (productionID, memberID, role, characterName) VALUES";
foreach ($memberInfo as $member) {
if(++$i === $numItems) {
 $query .= " ('$movieID', '$member[0]', '$member[1]', '$member[2]');";
} else {
 $query .= " ('$movieID', '$member[0]', '$member[1]', '$member[2]'), ";
 }
}
$db->query($query);
}


//files
/*$target_dir = $_SERVER['DOCUMENT_ROOT']."/images/posters/";
$target_file = $target_dir . basename($_FILES["prodPoster"]["name"]);
if (move_uploaded_file($_FILES["prodPoster"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["prodPoster"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
}*/

foreach (array_slice($_FILES["poster"]["error"], 1) as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["poster"]["tmp_name"][$key];
        $name = basename($_FILES["poster"]["name"][$key]);
        move_uploaded_file($tmp_name, $_SERVER['DOCUMENT_ROOT']."/images/posters/".$name);
        $query = "INSERT INTO prodPosters (productionID, posterURL) VALUES ('$movieID', '$name');";
        $db->query($query);
    } else {
    	echo $error;
    }
}

/*$stageItems = $_POST['stageitem']
$previousvalue = null;
$numItems = count($stageItems);
$i = 0;
foreach ($_POST['check'] as $genre) {


if (++i == $numItems) {
//do query
}
$previousvalue = $genre;
}

*/
mysqli_close($db);

//header("location: ../production/movie.php?id=".$movieID);
?>