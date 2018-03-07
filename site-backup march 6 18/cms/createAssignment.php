<?php
   include($_SERVER['DOCUMENT_ROOT']."/s140630php/config.php");
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

//Define basic variables
$weekOf = "Week Of";
$assignedPerson = "Assign Assignment";
$category = "Category";
$actSP = $completeScore = $estSP = 0;


$query = "SELECT * FROM webdevTracking";
$track = 0;
$result = mysqli_query($db,$query);
while($data = mysqli_fetch_array($result)) {
	$sheetDD[$track++] = $data;
}


if($_SERVER["REQUEST_METHOD"] == "POST") {
	$weekOf = $_POST["weekOf"];
	$division = $_POST["division"];
	$saga = $_POST["saga"];
	$epic = $_POST["epic"];
	$story = $_POST["story"];
	$assignment = $_POST["assignment"];
	$category = $_POST["category"];
	$assignmentDesc = $_POST["task"];
	$timeAllowed = $_POST["timeAllowed"];
	$assignedPerson = $_POST["member"];
	$dueDate = $_POST["dueDate"];
	$dateSubmitted = $_POST["turnedIn"];
	$accomplishment = $_POST["accomplishment"];
	$comment = $_POST["comment"];
	$estSP = $_POST["estimatedSP"];
	$actSP = $_POST["actualSP"];
	$completedScore = $_POST["completeScore"];
	$action = $_POST['action'];
	$ID = $_POST['toEditID'];
	
	
	if ($_POST["newProject"] == 'on') {
		$newProject = 1;
	} else {
		$newProject = 0;
	}
	if ($_POST["planned"] == 'on') {
		$planned = 1;
	} else {
		$planned = 0;
	}
	if ($_POST["onTime"] == 'on') {
		$onTime = 1;
	} else {
		$onTime = 0;
	}
	if ($_POST["completed"] == 'on') {
		$completed = 1;
	} else {
		$completed = 0;
	}
	if ($_POST["moreWork"] == 'on') {
		$needsMoreWork = 1;
	} else {
		$needsMoreWork = 0;
	}
	if ($_POST["unFinished"] == 'on') {
		$unfinished = 1;
	} else {
		$unfinished = 0;
	}
	if ($action == 'create') {
		if ($division == 'Website') {
			$query = "INSERT INTO webdevTracking (`weekOf`, `projectName`, `category`, `projectType`, `newProject`, `plannedForTheWeek`,  `saga`, `epic`, `story`, `task`, `timeAllowed`, `assignedPerson`, `dueDate`, `estStoryPoints`) VALUES ('$weekOf', '$assignment', '$category', 'Software', '$newProject', '$planned', '$saga', '$epic', '$story', '$assignmentDesc', '$timeAllowed', '$assignedPerson', '$dueDate', '$estSP')";
		} else {
			$query = "INSERT INTO `prodTeamTracking`(`weekOf`, `projectName`, `plannedForTheWeek`, `saga`, `epic`, `story`, `task`, `timeAllowed`, `assignedPerson`, `dueDate`, `estStoryPoints`) VALUES ('$weekOf', '$assignment', '$planned', '$saga', '$epic', '$story', '$assignmentDesc', '$timeAllowed', '$assignedPerson', '$dueDate', '$estSP')";
		}
	} else if ($action == 'edit') {
		if ($division = 'Website') {
			$query = "UPDATE webdevTracking SET `weekOf` = '$weekOf', `projectName` = '$assignment', `category` = '$category', `projectType` = 'Software', `newProject` = '$newProject', `plannedForTheWeek` = '$planned', `saga` = '$saga', `epic` = '$epic', `story` = '$story', `task` = '$assignmentDesc', `timeAllowed` = '$timeAllowed', `assignedPerson` = '$assignedPerson', `dueDate` = '$dueDate', `dateCompleted`='$dateSubmitted',`onTime`='$onTime',`completed`='$completed',`needsMoreWork`='$needsMoreWork',`unfinished`='$unfinished',`accomplishment`='$accomplishment',`comment`='$comment', `estStoryPoints` ='$estSP', `actStoryPoints`='$actSP',`completenessScore`='$completedScore' WHERE ID = '$ID'";
		} else {
			$query = "UPDATE `prodTeamTracking` SET `weekOf` = '$weekOf', `projectName` = '$assignment', `plannedForTheWeek` = '$planned', `saga` = '$saga', `epic` = '$epic', `story` = '$story', `task` = '$assignmentDesc', `timeAllowed` = '$timeAllowed', `assignedPerson` = '$assignedPerson', `dueDate` = '$dueDate', `dateCompleted`='$dateSubmitted',`onTime`='$onTime',`completed`='$completed',`needsMoreWork`='$needsMoreWork',`unfinished`='$unfinished',`accomplishment`='$accomplishment',`comment`='$comment', `estStoryPoints` ='$estSP', `actStoryPoints`='$actSP',`completenessScore`='$completedScore' WHERE ID = '$ID'";
		}
	}
	$db->query($query);
}




?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>72 Dragons</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Spectral+SC:300" rel="stylesheet">
<link href="/scripts/graph/graph.css" rel="stylesheet">
<script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/scripts/graph/graph.js"></script>
<style>
body {
  margin: 0;
  padding: 0;
  background: black;
  font-family: "Spectral SC", serif;
}

#content {
  width: 1000px;
  height: auto;
  margin: auto;
  display: grid;
  grid-template-columns:250px 250px 250px 250px;
  color: #ad9440;
}
.dontMove {
	display: none !important;
}
select {
	display: none;
}






/*Drop Down*/
.choicebar-dropDown {
    min-width: 250px;
    border-right: 3px #580000 solid;
    background: #800000;
    cursor: pointer;
    position: relative;
}
.choicebar-dropDown:hover .dropDown-Container {
	height: 155px;
	overflow: auto;
}
.dropDown-Face{
    width: 100%;
    height: 50px;
    font-size: 18px;
    line-height: 50px;
    padding-left: 5px;
}
.dropDown-Face:after {
    content: '';
    position: absolute;
    top: 20px;
    right: 5px;
    width: 0;
    height: 0;
    border-left: 7px solid transparent;
    border-right: 7px solid transparent;
    border-top: 10px solid #330000;
}
.dropDown-Container {
    width: 100%;
    height: 0;
    position: absolute;
    transition: height 0.5s;
    overflow: hidden;
    z-index: 100;
}
.dropDown-option {
    background: #800000;
    border-bottom: 2px #580000 solid;
    padding-left: 10px;
    font-size: 13px;
    height: 30px;
    line-height: 30px;
    transition: filter 0.5s;
    cursor: pointer;
}
.dropDown-option:first-child {
	border-top: 3px #580000 solid;
}
.dropDown-option:hover {
     filter: brightness(125%);
}




/*Box*/
.box {
  border: 5px #1b1b1b solid;
  margin: 20px 8px;
  width: 475px;
  height: 200px;
  position: relative;
}
.small {
  width: 200px !important;
  margin: 20px;
}
.large {
  width: 1000px !important;
  margin: 20px 0;
}
.box-title {
  background: #161616;
    font-size: 24px;
    text-align: center;
  color: #ad9440;
}
.box-content {
  background: black;
padding: 10px;
    height: 144px;
    overflow: auto;
  text-align: justify;
}

textarea {
  border: 0;
  background: black;
  resize: none;
  color: white;
  width: calc(100% - 4px);
  height: calc(100% - 4px);
  font-size: 16px;
  font-family: "Spectral SC", serif;
}
textarea:focus, input:focus, button:focus {
  outline: none;
}

input {
  font-family: "Spectral SC", serif;
  }
input[type="number"] {
    width: calc(100% - 2px);
    border: 0;
    height: 126px;
    font-size: 125px;
    text-align: center;
    background: black;
    color: maroon;
}

/*checkbox dragon*/
.checkDragon {
    position: absolute;
    bottom: 0;
    width: 100%;
    background: black;
    height: 164px;
    left: 0;
    cursor: pointer;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
     -khtml-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;
    transition: background 0.25s;
}
.checkDragon:hover {
	background: maroon;
}
.checkDragon:active {
	background: white;
}
.checkDragon img {
    height: 100%;
    left: calc(50% - 50px);
    position: absolute;
    filter: brightness(0%);
    transition: filter 0.25s;
}
.checked {
	background: black !important;
}
.checked img {
	filter: brightness(100%);
}



/*#editPrev - Load previous tasks*/
.editTaskBar {
	background: #0e0e0e;
	margin: 4% auto;
	padding: 3px;
	width: 96%;
	border-left: 3px maroon solid;
	cursor: pointer;
}
.editTitle {
        font-size: 20px;
	border-bottom: 1px maroon solid;
}
.editBody {
margin-top: 10px;

}
#tasks {
    overflow: auto;
    height: 500px;
    border-top: 5px #1b1b1b solid;
    border-bottom: 5px #1b1b1b solid;
    margin-top: 10px;
}


/*EditGrid*/
.editForm {
	display: none;
}
/*Grid*/
#weekOf {
  grid-column: 1 / 3;
  grid-row: 1;
  border-color: transparent;
}
#division {
  grid-column: 3 / 5;
  grid-row: 1;
  border-color: transparent;
}
#AssignmentName {
  grid-column: 1 / 3;
  grid-row: 2;
}
#AssignmentName input, #timeAllowed input {
    height: 162px;
    width: calc(100% - 2px);
    border: 0;
    color: white;
    background: black;
    font-size: 30px;
    text-align: center;
}
#editPrev {
  grid-column: 3 / 5;
  grid-row: 2 / 4;
  height: 700px !important;
}
#editPrev .box-content {
	height: 644px !important;
}
#memberSelect {
  grid-column: 3 / 5;
  grid-row: 2;
  border-color: transparent;
}
#story {
  grid-column: 1 / 5;
  grid-row: 3;
  border-color: transparent;
  background: #0e0e0e;
}
#storyBars {
	display: flex;
}
#story .choicebar-dropDown {
    width: 33% !important;
    height: 50px;
}
#story .dropDown-option {
	display: none;
}
#story #createStory {
	display: flex;
}
#story .storyChoices {
    width: 500px;
    text-align: center;
    margin: 24px auto;
}
#story .storyHeader {
    font-size: 18px;
}
#story ul {
    list-style: none;
    display: flex;
    padding: 0;
}
#story li {
    background: #1b1b1b;
    width: 200px;
    margin: auto;
    color: #ad9440;
    cursor: pointer;
    padding: 5px;
    transition: background 0.25s, color 0.25s;
}
#story input[type=text] {
	display: block;
    margin: auto;
    height: 35px;
    width: 300px;
    border: 0;
    border-left: 5px #343436 solid;
    background-color: #1b1b1b;
    color: #FFF;
    padding: 0 5px;
    font-size: 16px;
    transition: border-color 0.5s;
  font-family: "Spectral SC", serif;
}

#story li:hover {
    background: maroon;
}
#story .storyActive {
    background: black !important;
}
#story .storyInput {
    display: flex;
    margin: auto;
}
#story button {
height: 35px;
    margin: auto;
    width: 35px;
    border: 0;
    background: #1b1b1b;
    cursor: pointer;
    color: #ad9440;
    font-size: 16px;
    transition: color 0.25s;
}
#story button:hover {
	color: maroon;
}

#category {
  grid-column: 1 / 3;
  grid-row: 4;
  border-color: transparent;
}
#planned {
  grid-column: 3;
  grid-row: 4;
}
#newProject {
  grid-column: 4;
  grid-row: 4;
}
#task {
  grid-column: 1 / 5;
  grid-row: 5;
}
#timeAllowed {
  grid-column: 1;
  grid-row: 6;
}
#dueDate {
  grid-column: 2;
  grid-row: 6;
}
#onTime {
  grid-column: 3;
  grid-row: 6;
}
#turnedIn {
  grid-column: 4;
  grid-row: 6;
}
#completed {
  grid-column: 1;
  grid-row: 7;
}
#moreWork {
  grid-column: 2;
  grid-row: 7;
}
#unFinished {
  grid-column: 3;
  grid-row: 7;
}
#accomplishment {
  grid-column: 1 / 3;
  grid-row: 8;
}
#comment {
  grid-column: 3 / 5;
  grid-row: 8;
}
#estimatedSP {
  grid-column: 1;
  grid-row: 9;
}
#actualSP {
  grid-column: 2;
  grid-row: 9;
}
#completeScore {
  grid-column: 3 / 5;
  grid-row: 9;
}
#sendForm {
  grid-column: 1;
  grid-row: 10;
  
      border: none;
    background: #1b1b1b;
    color: white;
    margin-right: 5px;
    padding: 10px;
    font-size: 12px;
    transition: background 0.5s;
    cursor: pointer;
      font-family: "Spectral SC", serif;
      width: 200px;
margin: auto !important;
font-size: 16px;
height: 44px;
margin-bottom: 50px;
}

#sendForm:hover {
  background: maroon;
}
#sendForm:active {
  background: #A21616;
}






/*Tracking Sheet*/
#trackingSheetContainer {
    width: 100%;
    height: calc(100% - 101px);
    background: #0e0e0e;
    position: fixed;
    z-index: 999;
    left: 100%;
    transition: left 0.25s;
}
.toggledSheetContainer {
    left: 0 !important;
}
/*Sheet*/
#trackingSheet {
	width: 100%;
	height: 100%;
	overflow: auto;
}
.userReport {
	width: 4000px;
	border-collapse: collapse;
}
.userReport th {
	 color: #ad9440;
	 background: #1b1b1b;
	 position: sticky;
	 top: -1px;
}
.userReport td {
	 color: white;
	 text-align: center;
	 background: black;
	 cursor: pointer;
	 transition: color 0.25s;
}
.userReport td:hover {
	background: #1f1f1f;
}
tr:hover td {
	background: #0e0e0e;
}
td textarea {
	width: 200px;
	height: 200px;
	background: #565656;
	color: black;
}
.userReport th, .userReport td {
    border: 1px solid #ad9440;
    padding: 5px;
    width: 150px;
}
/*Options*/
#sheetOptions:hover #legends{
    height: 98px !important;
    overflow: unset !important;
}
#sheetOptions:hover #sheetActions{
    width: 270px !important;
    overflow: auto !important;
}
/*Dragon*/
#toggleSheet {
    position: absolute;
    width: 100px;
    height: 100px;
    left: -120px;
    border: 3px #800000 solid;
    border-radius: 100%;
    border-bottom-right-radius: 0%;
    bottom: 20px;
    background: #1b1b1b;
    cursor: pointer;
    overflow: hidden;
    transition: border-color 0.25s, transform 0.25s, left 0.25s, width 0.25s, height 0.25s;
}
#toggleSheetDragon {
    background-image: url(/images/dragons/dragonscrollpre.png);
    background-position: 91px -16px;
    background-size: 100px;
    width: 100%;
    height: 100%;
    transition: transform 0.25s, background-size 0.25s;
}
#toggleSheet:hover #toggleSheetDragon {
    background-image: url(/images/dragons/dragonscrollpost.png);
}
.toggled {
    transform: rotate(90deg);
    border-color: #ad9440 !important;
    width: 50px !important;
    height: 50px !important;
    left: 20px !important;
}
.toggled #toggleSheetDragon{
    transform: rotate(-90deg);
    background-image: url(/images/dragons/dragonscrollpost.png);
    background-size: 45px;
    background-position: 86px -4px;
}
.toggled:hover #toggleSheetDragon{
    background-image: url(/images/dragons/dragonscrollpre.png) !important;
}
/*Legend Items*/
#legends {
    position: absolute;
    bottom: 76px;
    color: #ad9440;
    left: 20px;
    height: 0;
    overflow: hidden;
    transition: height 0.25s;
}
.legendItem, .actionItem {
    border: 2px #ad9440 solid;
    border-radius: 100%;
    background: #1b1b1b;
    position: relative;
    width: 30px;
    height: 30px;
    margin: 10px;
    cursor: pointer;
    color: #ad9440;
    transition: width 0.25s, height 0.25s, margin 0.25s;
}
.legendSymbol{
    text-align: center;
    font-size: 20px;
    transition: font-size 0.25s;
}
.legendPopout {
    position: absolute;
    left: calc(100% + 10px);
    top: calc(50% - 12px);
    overflow: hidden;
    width: 0;
    transition: width 0.25s;
}
.legendItem:hover, .actionItem:hover {
	margin: 5px;
	width: 40px;
	height: 40px;
}
.legendItem:hover .legendSymbol {
	font-size: 28px;
}
.legendItem:hover .legendPopout{
	width: 100px !important;
}
/*Sheet Actions*/
#sheetActions {
    position: absolute;
    bottom: 20px;
    left: 76px;
    display: flex;
    width: 0;
    overflow: hidden;
    transition: width 0.25s;
}
.actionItem:hover .actionSymbol {
    font-size: 32px;
}
.actionSymbol {
    text-align: center;
    font-size: 24px;
    margin-top: 2px;
    margin-left: 0px;
    transition: font-size 0.25s;
}
/*Alerts*/
#alertContainer {
width: 300px;
height: 50px;
position: fixed;
bottom: 20px;
right: 20px;
}
.alert {
	position: absolute;
	background: #1b1b1b;
	border: 2px #ad9440 solid;
	color: #ad9440;
	width: 296px;
	height: 46px;
	display: none;
}
/*upload CSV*/
#uploadCSVBox {
    position: fixed;
    width: 503px;
    display: flex;
    height: 181px;
    color: #ad9440;
    background: black;
    border: 5px #ad9440 solid;
    top: 150%;
    left: calc(50% - 251.5px);
    transition: top 0.25s;
}
.csvActive {
	top: calc(50% - 90.5px) !important;
}
#uploadClick {
width: 100%;
    height: 100px;
    background: #0e0e0e;
    text-align: center;
    line-height: 100px;
    font-size: 24px;
    color: #ad9440;
    overflow: auto;
}
#uploadCSV {
position: absolute;
    width: 100%;
    height: 100px;
    opacity: 0;
    cursor: pointer;
    top: 0;
}
#uploadCSVContent {
    position: relative;
    width: 400px;
    border-left: 3px #ad9440 solid;
}
#submitCSV {
    width: 100%;
    height: 30px;
    border: none;
    background: #1b1b1b;
    color: white;
    margin-right: 5px;
    padding: 10px;
    font-size: 12px;
    transition: filter 0.25s;
    cursor: pointer;
    font-family: "Spectral SC", serif;
    margin: auto !important;
    font-size: 16px;
    line-height: 15px;
    margin-bottom: 50px;
}
#submitCSV:hover {
	filter: brightness(120%);
}
.csvDragon {
    background-image: url(/images/dragons/dragonOnComp.png);
    background-size: auto 100%;
    background-position: center;
    width: 120px;
    height: 100%;
}

/*graphs*/
#graphReport {
    position: absolute;
    top: -100%;
    left: 0;
    width: 100%;
    height: 100%;
    background: black;
    display: flex;
    overflow: auto;
    transition: top 0.25s;
    
}
.view {
    top: 0 !important;
}
.assignmentHide {
	display: none;
}
.assignmentActive {
	width: 0px !important;
}
</style>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/header.html';?>

<div id="trackingSheetContainer">
	<div id="trackingSheet">
		<table class="userReport">
          	<tr>
          		<th class="assignmentMode">
          			<div class="choicebar-dropDown">
  					<div class="dropDown-Face">Week Of</div>
  					<div class="dropDown-Container">
  						<div onclick="sheetdropDownClick('WeekOf', $(this).text())" class="dropDown-option">All</div>
  						<?php 
  							$listed[] = '';
  							$pass = true;
  							
  							foreach ($sheetDD as $item) {
  								foreach ($listed as $used) {
  									if ($item[1] == $used[1]) {
  										$pass = false;
  									}
  								}
  								if ($pass == true) {
  									echo "<div onclick=\"sheetdropDownClick('WeekOf', $(this).text())\" class=\"dropDown-option\">".$item[1]."</div>";
  									array_push($listed, $item);
  								}
  								$pass = true;
  							}
  						?>
  					</div>
  				</div>
  				<input class="headerChoice" id="inputWeekOf" type="hidden">
  				<br>
  				<br>
  				<span>All</span>
  			</th>
    			<th class="assignmentMode">Assignment</th>
    			<th class="webHeader">
          			<div class="choicebar-dropDown">
  					<div class="dropDown-Face">Category</div>
  					<div class="dropDown-Container">
  						<div onclick="sheetdropDownClick('Category', $(this).text())" class="dropDown-option">All</div>
  						<?php 
  							unset($listed);
  							$listed[] = '';
  							$pass = true;
  							foreach ($sheetDD as $item) {
  								foreach ($listed as $used) {
  									if ($item[3] == $used[3]) {
  										$pass = false;
  									}
  								}
  								if ($pass == true) {
  									echo "<div onclick=\"sheetdropDownClick('Category', $(this).text())\" class=\"dropDown-option\">".$item[3]."</div>";
  									array_push($listed, $item);
  								}
  								$pass = true;
  							}
  						?>
  					</div>
  				</div>
  				<input class="headerChoice" id="inputCategory" type="hidden">
  				<br>
  				<br>
  				<span>All</span>
  			</th>
    			<th class="webHeader">
          			<div class="choicebar-dropDown">
  					<div class="dropDown-Face">Assignment Type</div>
  					<div class="dropDown-Container">
  						<div onclick="sheetdropDownClick('spo', $(this).text())" class="dropDown-option">All</div>
  						<?php 
  							unset($listed);
  							$listed[] = '';
  							$pass = true;
  							foreach ($sheetDD as $item) {
  								foreach ($listed as $used) {
  									if ($item[4] == $used[4]) {
  										$pass = false;
  									}
  								}
  								if ($pass == true) {
  									echo "<div onclick=\"sheetdropDownClick('spo', $(this).text())\" class=\"dropDown-option\">".$item[4]."</div>";
  									array_push($listed, $item);
  								}
  								$pass = true;
  							}
  						?>
  					</div>
  				</div>
  				<input class="headerChoice" id="inputspo" type="hidden">
  				<br>
  				<br>
  				<span>All</span>
  			</th>
    			<th class="webHeader">New Project</th>
    			<th>Planned for the Week</th>
    			<th>
    				<div class="choicebar-dropDown">
  					<div class="dropDown-Face">Saga</div>
  					<div class="dropDown-Container">
  						<div onclick="sheetdropDownClick('Saga', $(this).text())" class="dropDown-option">All</div>
  						<?php 
  							$query = "SELECT pageID, page, parent FROM webdevPage WHERE type = 'Saga'";
  							$result = mysqli_query($db,$query);
							while($data = mysqli_fetch_array($result)) {
								echo "<div data-id=\"".$data[0]."\" data-parent=\"".$data[2]."\" onclick=\"sheetdropDownClick('Saga', $(this).text())\" class=\"dropDown-option\">".$data[1]."</div>";
							}
  						?>
  					</div>
  				</div>
  				<input class="headerChoice" id="inputSaga" type="hidden">
  				<br>
  				<br>
  				<span>All</span>
  			</th>
    			<th>
    				<div class="choicebar-dropDown">
  					<div class="dropDown-Face">Epic</div>
  					<div class="dropDown-Container">
  						<div onclick="sheetdropDownClick('Epic', $(this).text())" class="dropDown-option">All</div>
  						<?php 
  							$query = "SELECT pageID, page, parent FROM webdevPage WHERE type = 'Epic'";
  							$result = mysqli_query($db,$query);
							while($data = mysqli_fetch_array($result)) {
								echo "<div data-id=\"".$data[0]."\" data-parent=\"".$data[2]."\" onclick=\"sheetdropDownClick('Epic', $(this).text())\" class=\"dropDown-option\">".$data[1]."</div>";
							}
  						?>
  					</div>
  				</div>
  				<input class="headerChoice" id="inputEpic" type="hidden">
  				<br>
  				<br>
  				<span>All</span>
  			</th>
    			<th>
    				<div class="choicebar-dropDown">
  					<div class="dropDown-Face">Story</div>
  					<div class="dropDown-Container">
  						<div onclick="sheetdropDownClick('Story', $(this).text())" class="dropDown-option">All</div>
  						<?php 
  							$query = "SELECT pageID, page, parent FROM webdevPage WHERE type = 'Story'";
  							$result = mysqli_query($db,$query);
							while($data = mysqli_fetch_array($result)) {
								echo "<div data-id=\"".$data[0]."\" data-parent=\"".$data[2]."\" onclick=\"sheetdropDownClick('Story', $(this).text())\" class=\"dropDown-option\">".$data[1]."</div>";
							}
  						?>
  					</div>
  				</div>
  				<input class="headerChoice" id="inputStory" type="hidden">
  				<br>
  				<br>
  				<span>All</span>
  			</th>
    			<th class="assignmentMode">Task</th>
    			<th class="assignmentMode">Time Allowed</th>
    			<th class="assignmentMode">
          			<div class="choicebar-dropDown">
  					<div class="dropDown-Face">Assigned Person</div>
  					<div class="dropDown-Container">
  						<div onclick="sheetdropDownClick('AssignedPerson', $(this).text())" class="dropDown-option">All</div>
  						<?php 
  							unset($listed);
  							$listed[] = '';
  							
  							$pass = true;
  							foreach ($sheetDD as $item) {
  								foreach ($listed as $used) {
  									if ($item[12] == $used[12]) {
  										$pass = false;
  									}
  								}
  								if ($pass == true) {
  									echo "<div onclick=\"sheetdropDownClick('AssignedPerson', $(this).text())\" class=\"dropDown-option\">".$item[12]."</div>";
  									array_push($listed, $item);
  								}
  								$pass = true;
  							}
  						?>
  					</div>
  				</div>
  				<input class="headerChoice" id="inputAssignedPerson" type="hidden">
  				<br>
  				<br>
  				<span>All</span>
  			</th>
    			<th class="assignmentMode">Date Due</th>
    			<th>Actual Date</th>
    			<th>On Time</th>
    			<th>Completed</th>
    			<th>Needs More Work</th>
    			<th>Unfinished?</th>
    			<th>Accomplishment</th>
    			<th class="webHeader">Key Accomplishment</th>
    			<th>Comment</th>
    			<th>Estimated Story Points</th>
    			<th>Actual Story Points</th>
    			<th>Completeness Score (%)</th>
          	</tr>
          </table>
	</div>
	
	<div id="graphReport">
	
	</div>
	
	<div id="alertContainer"></div>
	<div id="uploadCSVBox">
		<div class="csvDragon"></div>
		<div id="uploadCSVContent">
		<div id="uploadClick">Add CSV</div>
		<input onchange="$('#uploadClick').text($(this).val().substring($(this).val().lastIndexOf('\\') + 1))" type="file" id="uploadCSV">
		<div class="choicebar-dropDown" id="csvDropDown">
  		<div class="dropDown-Face">Upload To</div>
  		<div class="dropDown-Container">
  			<?php 
  				$query = "SELECT pageID, page, parent FROM webdevPage WHERE type = 'Legend'";
  				$result = mysqli_query($db,$query);
				while($data = mysqli_fetch_array($result)) {
					echo "<div data-id=\"".$data[0]."\" data-parent=\"".$data[2]."\" onclick=\"dropDownClick('csvDropDown', $(this).text())\" class=\"dropDown-option\">".$data[1]."</div>";
				}
  			?>
  			</div>
  		</div>
  		<input type="hidden" name="csv">
		<button id="submitCSV" type="button" onclick="uploadCSV()">Upload CSV</button>
		</div>
	</div>
	<div id="sheetOptions">
		
		<div id="legends">
			<div class="legendItem" onclick="loadLegend('Web', ['EMPTY'])"><div class="legendSymbol">W</div><div class="legendPopout">Web</div></div>
			<div class="legendItem" onclick="loadLegend('Production', ['EMPTY'])"><div class="legendSymbol">P</div><div class="legendPopout">Production</div></div>
			<!--<form id="loadEdit">-->
			<input type="hidden" id="legendChoice" value="Web">
		</div>
		<div id="sheetActions">
			<div class="actionItem" onclick="assignmentMode()"><div class="actionSymbol"><i class="fas fa-child"></i></div></div>
			<div class="actionItem" onclick="editItem()"><div class="actionSymbol"><i class="fa fa-pencil-alt"></i></div></div>
			<div class="actionItem" onclick="downloadCSV()"><div class="actionSymbol"><i class="fa fa-download"></i></div></div>
			<div class="actionItem" onclick="setUpUploadCSV()"><div class="actionSymbol"><i class="fa fa-upload"></i></div></div>
			<div class="actionItem" onclick="loadGraphs()"><div class="actionSymbol"><i class="fa fa-chart-bar"></i></div></div>
		</div>
		<div id="toggleSheet" onclick="toggleSheet()"><div id="toggleSheetDragon"></div></div>
	</div>
</div>

<form  id="createAssignment" action="/cms/createAssignment.php" method="post">
<div id="content">

  <div id="weekOf" class="box">
  	<div class="choicebar-dropDown" id="weekOfDropDown">
  		<div class="dropDown-Face"><?php echo $weekOf ?></div>
  		<div class="dropDown-Container">
  			<div onclick="dropDownClick('weekOfDropDown', $(this).text())" class="dropDown-option">March 2nd</div>
  			<div onclick="dropDownClick('weekOfDropDown', $(this).text())" class="dropDown-option">February 24th</div>
  			<div onclick="dropDownClick('weekOfDropDown', $(this).text())" class="dropDown-option">February 15th</div>
  			<div onclick="dropDownClick('weekOfDropDown', $(this).text())" class="dropDown-option">February 9th</div>
  			<div onclick="dropDownClick('weekOfDropDown', $(this).text())" class="dropDown-option">February 2nd</div>
  			<div onclick="dropDownClick('weekOfDropDown', $(this).text())" class="dropDown-option">January 26th</div>
  		</div>
  	</div>
    <input type="hidden" name="weekOf">
  </div>
  <div id="division" class="box">
  	<div class="choicebar-dropDown" id="divisionDropDown">
  		<div class="dropDown-Face">Division</div>
  		<div class="dropDown-Container">
  			<?php 
  				$query = "SELECT pageID, page FROM webdevPage WHERE type = 'Legend' ORDER BY page DESC";
  				$result = mysqli_query($db,$query);
				while($data = mysqli_fetch_array($result)) {
					echo "<div data-id=\"".$data[0]."\" onclick=\"dropDownClick('divisionDropDown', $(this).text())\" class=\"dropDown-option\">".$data[1]."</div>";
				}
  			?>
  		</div>
  	</div>
    <input type="hidden" name="division">
  </div>
  
  <div id="AssignmentName" class="box">
    <div class="box-title">Assignment</div> <input name="assignment" placeholder="Assignment" value="<?php echo $assignment ?>">
  </div>
  
  <div id="memberSelect" class="box">
  	<div class="choicebar-dropDown" id="memberDropDown">
  		<div class="dropDown-Face"><?php echo $assignedPerson ?></div>
  		<div class="dropDown-Container">
  			<?php 
  				$query = "SELECT name FROM 72Dstaff ORDER BY name ASC";
  				$result = mysqli_query($db,$query);
				while($data = mysqli_fetch_array($result)) {
					echo "<div onclick=\"dropDownClick('memberDropDown', $(this).text())\" class=\"dropDown-option\">".$data[0]."</div>";
				}
  			?>
  		</div>
  	</div>
    <input type="hidden" name="member">
  </div>
  
  <div id="story" class="box large">
      <div id="storyBars">
  	<div class="choicebar-dropDown" id="sagaDropDown">
  		<div class="dropDown-Face">Saga</div>
  		<div class="dropDown-Container">
  			<?php 
  				$query = "SELECT pageID, page, parent FROM webdevPage WHERE type = 'Saga'";
  				$result = mysqli_query($db,$query);
				while($data = mysqli_fetch_array($result)) {
					echo "<div data-id=\"".$data[0]."\" data-parent=\"".$data[2]."\" onclick=\"dropDownClick('sagaDropDown', $(this).text())\" class=\"dropDown-option\">".$data[1]."</div>";
				}
  			?>
  		</div>
  	</div>
  	<div class="choicebar-dropDown" id="epicDropDown">
  		<div class="dropDown-Face">Epic</div>
  		<div class="dropDown-Container">
  			<?php 
  				$query = "SELECT pageID, page, parent FROM webdevPage WHERE type = 'Epic'";
  				$result = mysqli_query($db,$query);
				while($data = mysqli_fetch_array($result)) {
					echo "<div data-id=\"".$data[0]."\" data-parent=\"".$data[2]."\" onclick=\"dropDownClick('epicDropDown', $(this).text())\" class=\"dropDown-option\">".$data[1]."</div>";
				}
  			?>
  		</div>
  	</div>
  	<div class="choicebar-dropDown" id="storyDropDown">
  		<div class="dropDown-Face">Story</div>
  		<div class="dropDown-Container">
  			<?php 
  				$query = "SELECT pageID, page, parent FROM webdevPage WHERE type = 'Story'";
  				$result = mysqli_query($db,$query);
				while($data = mysqli_fetch_array($result)) {
					echo "<div data-id=\"".$data[0]."\" data-parent=\"".$data[2]."\" onclick=\"dropDownClick('storyDropDown', $(this).text())\" class=\"dropDown-option\">".$data[1]."</div>";
				}
  			?>
  		</div>
  	</div>
      <input type="hidden" name="saga">
      <input type="hidden" name="epic">
      <input type="hidden" name="story">
    </div>
    <div id="createStory">
    	<div class="storyChoices">
    		<div class="storyHeader">Which parent would you like to create a story for?</div>
    		<ul>
    			<li id="choiceNewLegend" data-id="0">Create a Legend</li>
    			<li id="choiceLegend">-</li>
    			<li id="choiceSaga">-</li>
    			<li id="choiceEpic">-</li>
    		</ul>
    	</div>
    	<div class="storyInput">
    		<button type="button" id="addStory"><i class="fas fa-plus"></i></button>
    		<input type="text" placeholder="New Story Name">
    	</div>
    </div>
  </div>
  
    <div id="category" class="box webBlock">
    	<div class="choicebar-dropDown" id="categoryDropDown">
  		<div class="dropDown-Face"><?php echo $category ?></div>
  		<div class="dropDown-Container">
  			<div onclick="dropDownClick('categoryDropDown', $(this).text())" class="dropDown-option">Action Plan</div>
  			<div onclick="dropDownClick('categoryDropDown', $(this).text())" class="dropDown-option">Design pages</div>
  			<div onclick="dropDownClick('categoryDropDown', $(this).text())" class="dropDown-option">Content</div>
  			<div onclick="dropDownClick('categoryDropDown', $(this).text())" class="dropDown-option">Work Assignment</div>
  			<div onclick="dropDownClick('categoryDropDown', $(this).text())" class="dropDown-option">Page Mockups</div>
  			<div onclick="dropDownClick('categoryDropDown', $(this).text())" class="dropDown-option">Development</div>
  			<div onclick="dropDownClick('categoryDropDown', $(this).text())" class="dropDown-option">Strategic plan</div>
  		</div>
  	</div>
    <input type="hidden" name="category">
  </div>
  <div id="planned" class="box small webBlock">
    <div class="box-title">Planned for this week</div> <input type="checkbox" name="planned" <?php echo $planned ?>>
  </div>
  <div id="newProject" class="box small webBlock">
    <div class="box-title">New Project</div> <input type="checkbox" name="newProject" <?php echo $newPRoject ?>>
  </div>
  
  <div id="task" class="box large">
    <div class="box-title">Assignment Description</div>
    <div class="box-content"><textarea name="task" placeholder="Assignment Description"><?php echo $assignmentDesc ?></textarea></div>
  </div>
  
    <div id="timeAllowed" class="box small">
    <div class="box-title">Time Provided</div> <input type="text" name="timeAllowed" placeholder="Time Allowed"  value="<?php echo $timeAllowed ?>">
  </div>
    <div id="dueDate" class="box small">
    <div class="box-title">Date Due</div> <input type="date" name="dueDate"  value="<?php echo $dueDate ?>">
  </div>
    <div id="onTime" class="box small editForm">
    <div class="box-title">On Time</div> <input type="checkbox" name="onTime" <?php echo $onTime ?>>
  </div>
    <div id="turnedIn" class="box small editForm">
    <div class="box-title">Actual Date</div> <input type="date" name="turnedIn"  value="<?php echo $dateSubmitted ?>">
  </div>
  
      <div id="completed" class="box small editForm">
    <div class="box-title">Completed</div> <input type="checkbox" name="completed" <?php echo $completed ?>>
  </div>
      <div id="moreWork" class="box small editForm">
    <div class="box-title">Needs More Work</div> <input type="checkbox" name="moreWork" <?php echo $needsMoreWork ?>>
  </div>
      <div id="unFinished" class="box small editForm">
    <div class="box-title">Unfinished</div> <input type="checkbox" name="unFinished" <?php echo $unfinished ?>>
  </div>
  
    <div id="accomplishment" class="box editForm">
    <div class="box-title">Accomplishment</div>
    <div class="box-content"><textarea name="accomplishment" placeholder="Accomplishment"><?php echo $accomplishment ?></textarea></div>
  </div>
    <div id="comment" class="box editForm">
    <div class="box-title">Comment</div>
    <div class="box-content"><textarea name="comment" placeholder="Comment"><?php echo $comment ?></textarea></div>
  </div>

        <div id="estimatedSP" class="box small">
    <div class="box-title">Estimated Story Points</div> <input onchange="completeScore($(this))" type="number" name="estimatedSP" min="0" max="10"  value="<?php echo $estSP ?>">
  </div>
        <div id="actualSP" class="box small editForm">
    <div class="box-title">Actual Story Points</div> <input onchange="completeScore($(this))" type="number" name="actualSP" min="0" max="10"  value="<?php echo $actSP ?>">
  </div>
        <div id="completeScore" class="box editForm">
    <div class="box-title">Completeness Score (%)</div> <input type="number" name="completeScore" value="<?php echo $completeScore ?>">
  </div>
  
  
  <!--<div id="editPrev" class="box tall">
    <div class="box-title">Edit an Assignment</div>
    <div class="box-content">
    <form id="edit" action = "" method = "post">
    	<div class="choicebar-dropDown" id="divisioneditDropDown">
  		<div class="dropDown-Face">Division</div>
  		<div class="dropDown-Container">
  			<div onclick="dropDownClick('divisioneditDropDown', $(this).text())" class="dropDown-option">Web</div>
  			<div onclick="dropDownClick('divisioneditDropDown', $(this).text())" class="dropDown-option">Production</div>
  		</div>
  	</div>
  	<br>
    	<div class="choicebar-dropDown" id="weekofeditDropDown">
  		<div class="dropDown-Face">Week Of</div>
  		<div class="dropDown-Container">
  			<div onclick="dropDownClick('weekofeditDropDown', $(this).text())" class="dropDown-option">February 2nd</div>
  			<div onclick="dropDownClick('weekofeditDropDown', $(this).text())" class="dropDown-option">January 26th</div>
  		</div>
  	</div>
  	<div id="tasks">
    	<?php
    		$query = "SELECT ID, projectName, task, assignedPerson FROM webdevTracking";
  		$result = mysqli_query($db,$query);
		while($data = mysqli_fetch_array($result)) {
			if (empty($data[2])) {
				echo "<div class=\"editTaskBar\" onclick=\"load(".$data[0].")\"><div class=\"editTitle\">".$data[1]."</div><div class=\"editBody\">Assigned to ".$data[3]."<br><br>Task Description: <br>None.</div></div>";
			} else {
				echo "<div class=\"editTaskBar\" onclick=\"load(".$data[0].")\"><div class=\"editTitle\">".$data[1]."</div><div class=\"editBody\">Assigned to ".$data[3]."<br><br>Task Description: <br>".$data[2]."</div></div>";
			}
		}
    	?>
    	</div>
    	<input type="hidden" name="id">
    	</form>
    </div>
  </div>-->
  <input type="hidden" name="action" value="create">
  <input type="hidden" name="toEditID">
  <input type="submit" id="sendForm" formmethod="post" value="Create Assignment">

</div>
  </form>


<script type="text/javascript">
//Sheet
function loadHeaders(data, legend) {
	var headers = [];
	if (legend == "Web") {
		headers = [['WeekOf', 'Category', 'spo', 'AssignedPerson'], [1, 3, 4, 12]];
	} else if (legend == "Production") {
		headers = [['WeekOf', 'AssignedPerson'], [1, 9]];
	}
	for (var i = 0; i < headers.length; i++) {
		$('#input' + headers[0][i]).siblings('.choicebar-dropDown').find('.dropDown-Container').empty().append('<div onclick="sheetdropDownClick(\'' + headers[0][i] + '\', $(this).text())" class="dropDown-option">All</div>');
		var listed = [''], pass = true;
  		for (var j = 0; j < data.length; j++) {
  			for (var k = 0; k < listed.length; k++) {
  				if (data[j][headers[1][i]] == listed[k]) {
  					pass = false;
  				}
  			}
  			if (pass == true) {
  				$('#input' + headers[0][i]).siblings('.choicebar-dropDown').find('.dropDown-Container').append("<div onclick=\"sheetdropDownClick('" + headers[0][i] + "', $(this).text())\" class=\"dropDown-option\">" + data[j][headers[1][i]] + "</div>");
  				listed.push(data[j][headers[1][i]]);
  			}
  			pass = true;
  		}
	}
}
function loadSheet(data) {
	$('.userReport tr').each(function () {
		if ($(this).children('td').length != 0)
			$(this).remove();
	});
	for (var i = 0; i < data.length; i++) {
    		$('#trackingSheet .userReport').append('<tr><input type="hidden" class="assignmentID" value="' + data[i][0] + '"></tr>');
    		for (var j = 1; j < (Object.keys(data[i]).length / 2); j++) {
    			if (data[i][j] == 'null' || data[i][j] == 'NULL' || data[i][j] == null)
    				data[i][j] = "";
    			$('#trackingSheet .userReport').find('tr').last().append('<td>' + data[i][j] + '</td>');					
    		}
    	}
    	
    	$('.userReport td').dblclick(function() {
  		var content = $(this).text();
  		$(this).empty().append('<textarea>' + content + '</textarea>');
  		$(this).find('textarea').focus().focusout(function() {
    			var newContent = $(this).val(), ID = $(this).parent().siblings('input').val(), position =  $(this).parent().parent().find('td').index($(this).parent()) + 1;
    			$(this).parent().empty().text(newContent);
    			if (content != newContent)
    			$.ajax({
    				type: 'post',
    				url: '/s140630php/assignments/updateFromSheet.php',
    				data: {'content':newContent, 'toUpdate':ID, 'column':position, 'legend':$('#legendChoice').val()},
    				success: function(data) {
    					$('#alertContainer').append('<div class="alert">Row ID-' + ID + ', Column ID-' + position + ' was successfully saved</div>');
    					var theAlert = $('.alert:last');
    					theAlert.fadeIn();
    					setTimeout(function () {4
    						theAlert.fadeOut();
    					},5000);
    					setTimeout(function () {
    						theAlert.remove();
    					},6000);
    				}
    			});
  		});
	});
}
function toggleSheet() {
	$('#toggleSheet').toggleClass('toggled');
	$('#trackingSheetContainer').toggleClass('toggledSheetContainer');
	$('#content').toggleClass('dontMove');
}

function sheetdropDownClick(idName, toSearch) {
	var reportHeaderData = [];
	if (toSearch != 'All')
		$('#input' + idName).val(toSearch);
	else
		$('#input' + idName).val('');
	
	$('#input' + idName).siblings('span').text(toSearch);
		
	for (var i = 0; i < $('.headerChoice').length; i++) {
		if ($('.headerChoice').eq(i).val() == '')
			reportHeaderData.push('EMPTY');
		else
			reportHeaderData.push($('.headerChoice').eq(i).val());
	}
	console.log(reportHeaderData);
	loadLegend($('#legendChoice').val(), reportHeaderData)
}

function loadLegend(legend, filter) {
	var ajaxUrl;
	if (legend == "Web") {
		$('.webHeader').show();
		ajaxUrl = '/s140630php/assignments/loadWebFilteredReport.php';
	} else if (legend == "Production") {
		$('.webHeader').hide();
		ajaxUrl = '/s140630php/assignments/loadProductionFilteredReport.php';
	}
	
	$('.assignmentHide').removeClass('assignmentHide');
	$('.userReport').removeClass('assignmentActive');
	
	$.ajax({ 
		type: 'post',
		url: ajaxUrl,
		data: {'filter': filter},
		success: function (data) {
    			data = JSON.parse(data);
			loadSheet(data);
			if (filter.length == 1 && filter[0] == 'EMPTY') { //reset
				loadHeaders(data, legend);
				$('#legendChoice').val(legend)
				$('th input').val('');
				$('th span').text('All');
			}
		}
	});
}

function assignmentMode() {
	var index;
	$('th').each(function () {
		if (!$(this).hasClass('assignmentMode')) {
			index = $('th').index($(this));
			$('tr').each(function () {
				$(this).find('td').eq(index).toggleClass('assignmentHide');
			});
			$(this).toggleClass('assignmentHide');
		}
	});
	$('.userReport').toggleClass('assignmentActive');
}

function editItem() {
	$('tr').toggleClass('toEdit');
	alert("Please select the row you wish to edit");
	$('.toEdit').click(function () {
		var ID = $(this).find('input').val(), division = $('#legendChoice').val();
		$('.toEdit').unbind( "click" ).toggleClass('toEdit');
		$('.editForm').show();
		if (division == 'Web')
			$('.webBlock').show();
		else
			$('.webBlock').hide();
		
		$.ajax({
			type: 'post',
			url: '/s140630php/assignments/loadReport.php',
			data: {'division':division, 'ID':ID},
			success: function (data) {
				data = JSON.parse(data);
				console.log(data);

				$('input[name=weekOf]').val(data.weekOf);
				$('#weekOf .dropDown-Face').text(data.weekOf);
				
				$('input[name=division]').val(division);
				$('#division .dropDown-Face').text(division);
				
				$('input[name=assignment]').val(data.projectName);
				
				$('input[name=member]').val(data.assignedPerson);
				$('#memberSelect .dropDown-Face').text(data.assignedPerson);
				
				$('input[name=category]').val(data.category);
				$('#category .dropDown-Face').text(data.category);
				
				if (data.plannedForTheWeek == 1)
					$('input[name=planned]').prop('checked', true);
					
				if (data.newProject == 1)
					$('input[name=newProject]').prop('checked', true);
					
				$('textarea[name=task]').val(data.task);
				
				$('input[name=dueDate]').val(data.dueDate);
				
				if (data.onTime == 1)
					$('input[name=onTime]').prop('checked', true);
					
				$('input[name=turnedIn]').val(data.dateCompleted);
				
				if (data.completed == 1)
					$('input[name=completed]').prop('checked', true);
				
				if (data.needsMoreWork == 1)
					$('input[name=moreWork]').prop('checked', true);
				
				if (data.unfinished == 1)
					$('input[name=unFinished]').prop('checked', true);
				
				$('textarea[name=accomplishment]').val(data.accomplishment);
					
				$('textarea[name=comment]').val(data.comment);
				
				$('input[name=estimatedSP]').val(data.estStoryPoints);
				
				$('input[name=actualSP]').val(data.actStoryPoints);
				
				$('input[name=completeScore]').val(data.completenessScore);
				
				$('input[name=action]').val('edit');
				$('input[name=toEditID]').val(ID);
				
				$('input[type=checkbox]').each(function () {
					if ($(this).is(":checked"))
						$(this).parent().find('.checkDragon').addClass('checked');
					else
						$(this).parent().find('.checkDragon').removeClass('checked');
				});
				
				$('#sendForm').val('Update Assignment');
			}
		});
		
		toggleSheet();
	});
}

function downloadCSV() {
	var line = "", csvContents = "", title = "Report for " + $('#legendChoice').val();
	//set the title
	$('.userReport span').each(function () {
		if ($(this).text() != 'All')
			title += " - " + $(this).text();
	});
	title += ".csv";
	//get header
	for (var h = 0; h < $('tr').eq(0).children('th:visible').length; h++) {
		if (j == $('tr').eq(i).children('th:visible').length - 1) {
			if (($('tr').eq(0).children('th:visible').eq(h).text()).split('\n')[0] == "")
				line += $('tr').eq(0).children('th:visible').eq(h).text().split("\n")[2].split("  					")[1];
			else
				line += ($('tr').eq(0).children('th:visible').eq(h).text()).split('\n')[0];
		} else {
			if (($('tr').eq(0).children('th:visible').eq(h).text()).split('\n')[0] == "")
				line += $('tr').eq(0).children('th:visible').eq(h).text().split("\n")[2].split("  					")[1] + ",";
			else
				line += ($('tr').eq(0).children('th:visible').eq(h).text()).split('\n')[0] + ",";
		}
	}
	csvContents += line + "\n";
	//get contents of each row
	for (var i = 1; i < $('tr').length; i++) {
		line = "";
		for (var j = 1; j < $('tr').eq(i).children().length; j++) {
			if (j == $('tr').eq(i).children().length - 1)
				line += "\"" + $('tr').eq(i).children().eq(j).text() + "\"";
			else
				line += "\"" + $('tr').eq(i).children().eq(j).text() + "\",";
		}
		if (i == $('tr').length - 1)
			csvContents += line;
		else
			csvContents += line + "\n";
	}
	//put contents into a file and download
	var element = document.createElement('a');
  	element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(csvContents));
  	element.setAttribute('download', title);

  	element.style.display = 'none';
  	document.body.appendChild(element);

  	element.click();

  	document.body.removeChild(element);
	
}

function setUpUploadCSV() {
	$('#uploadCSVBox').toggleClass('csvActive');
}

function uploadCSV() {
    var files = document.getElementById('uploadCSV').files;
    if (!files.length) {
      alert('Please select a file');
      return;
    }

    var file = files[0];
    var start = 0, stop = file.size - 1;

    var reader = new FileReader();

    // If we use onloadend, we need to check the readyState.
    reader.onloadend = function(evt) {
      if (evt.target.readyState == FileReader.DONE) { // DONE == 2
        var data = [], readyLine = "", fileText = evt.target.result.replace("'", "\'"), skip = 0, nextLine = false, longQuote = "";
        
        for (var i = 0; i < fileText.split('\n').length; i++) {
          if ((fileText.split('\n')[i].match(/\"/g) || []).length > 0) { 
            for (var c = 0; c < (fileText.split('\n')[i].match(/,/g) || []).length+1; c++) {
              if (skip > 0)
                skip--; //skipping commas inbetween ""
              else if (fileText.split('\n')[i].split(',')[c].charAt(0) == '"') {
                while (!nextLine) {
                  if (fileText.split('\n')[i].split(',')[c+skip].charAt(fileText.split('\n')[i].split(',')[c+skip].length - 1) == '"') {
                    for (var nl = 0; nl <= skip; nl++) {
                      if (nl != 0)
                        longQuote += ',';
                      longQuote += fileText.split('\n')[i].split(',')[c+nl];
                    }
                    readyLine += "'" + longQuote.slice(0, -1).slice(1, longQuote.length) + "',";
                    longQuote = "";
                    nextLine = true;
                  } else
                    skip++; //go to after next comma
                }
                nextLine = false;
              } else {
                readyLine += "'" + fileText.split('\n')[i].split(',')[c] + "',"; //" was not included in this portion
              }
            }
            data.push(readyLine.slice(0, -1));
            readyLine = "";
          } else {
            data.push("'" + fileText.split('\n')[i].replace(/,/g, "','").slice(0, -2)); //No " Found
          }
        }
        
        //console.log(data);
        $.ajax({
        	type: 'post',
        	url: '/s140630php/assignments/uploadCSV.php',
        	data: {'csv':data,'legend':$('input[name=csv').val()},
        	success: function (data) {
        		//alert("Your CSV has been uploaded");
        		console.log('CSV Uploaded \n\n\n' + data);
        	}
        });
      }
    };

    var blob = file.slice(start, stop + 1);
    reader.readAsBinaryString(blob);
  }

//Graph
function loadGraphs() { 
	var dates = [], place = -1, sameDate = false, estSP = 21, storyPoints = [[], []], completed = [[], []], completenessScore = [[]];
	
	if ($('#legendChoice').val() == 'Production')
		estSP = 17;
	
	$('#graphReport').toggleClass('view');
	
	//overall report
	for (var h = 1; h < $('tr').length; h++) {
		for (var i = 0; i < dates.length; i++) {
			if (dates[i] == $('tr').eq(h).children('td').eq(0).text())
				sameDate = true;
		}
		if (!sameDate) {
			if (place != -1) {
				completenessScore[0][place] = Math.round(completenessScore[0][place] / completed[0][place]);
					console.log(storyPoints[0][place] / storyPoints[1][place]);
					}
			place++;
			completed[0][place] = 0;
			completed[1][place] = 0;
			storyPoints[0][place] = 0;
			storyPoints[1][place] = 0;
			completenessScore[0][place] = 0;
			dates.push($('tr').eq(h).children('td').eq(0).text());
		}
		
		var checkIfNaN = parseFloat($('tr').eq(h).children('td').eq(estSP - 6).text());
				
		if (isNaN(checkIfNaN)) {
			if (checkIfNaN == 1)
				checkIfNaN = "1";
			else
				checkIfNaN = 0;
			
		}

		completed[1][place] += checkIfNaN; //Completed
		
		completed[0][place]++; //Number of Assignments
		
		checkIfNaN = parseFloat($('tr').eq(h).children('td').eq(estSP).text());
		if (isNaN(checkIfNaN))
			checkIfNaN = 0;
		storyPoints[0][place] += checkIfNaN;     //Est story points
		
		checkIfNaN = parseFloat($('tr').eq(h).children('td').eq(estSP + 1).text());
		if (isNaN(checkIfNaN))
			checkIfNaN = 0;
		storyPoints[1][place] += checkIfNaN; //Act story points

		checkIfNaN = parseFloat($('tr').eq(h).children('td').eq(estSP + 2).text());
		if (isNaN(checkIfNaN))
			checkIfNaN = 0;
		completenessScore[0][place] += checkIfNaN; //Completeness Score
		sameDate = false;
	}
	completenessScore[0][place] = Math.round(completenessScore[0][place] / completed[0][place]);
	console.log(completenessScore);
	
	$('#graphReport').html('<div class="graph graph-line" id="storyPoints"></div><div class="graph graph-bar" id="completed"></div><div class="graph graph-bar" id="score"></div>');
	createGraph('storyPoints', 'Story Points', storyPoints, dates, ["Estimated Story Points", "Actual Story Points"]);
	createGraph('completed', 'Assignments Completed', completed, dates, ["Total Assignments", "Completed Assignments"]);
	createGraph('score', 'Velocity', completenessScore, dates, ["Completeness Score"]);
}

//Content

function completeScore(number) {
	if (number.val() < 0)
		number.val(0);
	else if (number.val() > 10)
		number.val(10);
	$('#completeScore input').val(Math.ceil(($('#actualSP input').val() / $('#estimatedSP input').val()) * 100));
}

function dropDownClick(dropDownID, title) {

	$('input[name=' + dropDownID.split("DropDown")[0] + ']').val(title);
		$('#' + dropDownID + ' .dropDown-Face').text(title);
		
	switch (dropDownID) {
		case 'divisionDropDown':
		 	var id = $('#divisionDropDown .dropDown-option:contains("' + title + '")').attr('data-id');
			$('#story .dropDown-option').hide();
			$('#sagaDropDown .dropDown-Face').text("Saga");
			$('#epicDropDown .dropDown-Face').text("Epic");
			$('#storyDropDown .dropDown-Face').text("Story");
			$('#choiceLegend').text(title).attr('data-id',id);
			$('#choiceSaga').text('-').attr('data-id','');
			$('#choiceEpic').text('-').attr('data-id','');
			$('#sagaDropDown .dropDown-option').each(function () {
				if ($(this).attr('data-parent') == id)
					$(this).show();
			});
			break;
		case 'sagaDropDown':
			var id = $('#sagaDropDown .dropDown-option:contains("' + title + '")').attr('data-id');
			$('input[name=saga]').val(id);
			$('#epicDropDown .dropDown-option').hide();
			$('#storyDropDown .dropDown-option').hide();
			$('#epicDropDown .dropDown-Face').text("Epic");
			$('#storyDropDown .dropDown-Face').text("Story");
			$('#choiceSaga').text(title).attr('data-id',id);
			$('#choiceEpic').text('-').attr('data-id','');
			$('#epicDropDown .dropDown-option').each(function () {
				if ($(this).attr('data-parent') == id)
					$(this).show();
			});
			break;
		case 'epicDropDown':
			var id = $('#epicDropDown .dropDown-option:contains("' + title + '")').attr('data-id');
			$('input[name=epic]').val(id);
			$('#storyDropDown .dropDown-option').hide();
			$('#storyDropDown .dropDown-Face').text("Story");
			$('#choiceEpic').text(title).attr('data-id',id);
			$('#storyDropDown .dropDown-option').each(function () {
				if ($(this).attr('data-parent') == id)
					$(this).show();
			});
			break;
		case 'storyDropDown':
			var id = $('#storyDropDown .dropDown-option:contains("' + title + '")').attr('data-id');
			$('input[name=story]').val(id);
			break;
		default:
			break;
	}
}

function loadStories(parent, type, name) {
	$.ajax({
    		type: 'post',
    		url: '/s140630php/loadStories.php',
    		data: {'storyID':parent, 'storyTitle':name},
    		success: function (data) {
    			data = JSON.parse(data);
    			switch (type) {
    			case 'New Legend':
				type = "legend";
				break;
			case 'Legend':
				type = "saga";
				break;
			case 'Saga':
				type = "epic";
				break;
			case 'Epic':
				type = "story";
				break;
			}
			for (var i = 0; i < data.length; i++) {
				$('#' + type + 'DropDown .dropDown-Container').append("<div data-id=\"" + data[i][0] + "\" data-parent=\"" + data[i][3] + "\" onclick=\"dropDownClick('" + type + "DropDown', $(this).text())\" class=\"dropDown-option\" style='display:block'>" + data[i][1] + "</div>");
			}
    		}
    	});
}
//Onload

$(document).ready(function () {
	$('input[type=checkbox]').each(function () {
		var checkbox = $(this);
		$(this).parent().append('<div class="checkDragon"><img src="http://72dragons.snxwless.net/images/dragons/dragonscrollpost.png"></div>');
		if ($(this).is(":checked"))
			$(this).parent().find('.checkDragon').toggleClass('checked');
		$(this).parent().find('.checkDragon').click(function () {
			$(this).toggleClass('checked');
			if (checkbox.prop('checked'))
  	    			checkbox.prop('checked', false);
  	    		else
  	    			checkbox.prop('checked', true);
		});
	});
	
	$('#addStory').click(function () {
		var newStory = $(this).siblings('input').val(), storyList = [], type = "Legend", id = $('#story .storyActive').attr('data-id');
		
		switch ($('#story .storyActive').attr('id').split('choice')[1]) {
			case 'Legend':
				type = "Saga";
				break;
			case 'Saga':
				type = "Epic";
				break;
			case 'Epic':
				type = "Story";
				break;
		}
		if (isNaN(id))
			newStory = 'NO NEW STORY'; //or a new legend
		
		if (newStory != 'NO NEW STORY') {
			$.ajax({
    			type: 'post',
    			url: '/s140630php/assignments/createStory.php',
    			data: {'ID':id, 'newStory':newStory, 'type':type},
    			success: function () {
    				alert('Story Created Successfully');
    				loadStories(id, $('#story .storyActive').attr('id').split('choice')[1], newStory);
    			}
    			});
		}
	});
	
	$('.storyChoices li').click(function () {
		if (!$(this).hasClass('storyActive'))
			$('.storyActive').toggleClass('storyActive');
		$(this).toggleClass('storyActive');
	});
	
	//Set up sheet
	$.ajax({
    			type: 'post',
    			url: '/s140630php/assignments/loadUserWeeklyReport.php',
    			data: {'date':'March 2nd'},
    			success: function (data) {
    				data = JSON.parse(data);
    				loadSheet(data);
    				
    			}
    	});
    	$(window).bind('beforeunload', function(){
  		return 'Are you sure you want to leave?';
	});

});
</script>
</body>
</html>