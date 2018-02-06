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
	$assignmentID = $_POST['id'];
	if ($_POST['legend'] == "Web") {
		$query = "SELECT * FROM webdevTracking WHERE ID = '$assignmentID'";
  		$result = mysqli_query($db,$query);
		while($data = mysqli_fetch_array($result)) {
			$weekOf = $data[1];
			$assignment = $data[2];
			$category = $data[3];
			$assignmentDesc = $data[11];
			$timeAllowed = $data[12];
			$assignedPerson = $data[13];
			$dueDate = $data[14];
			$dateSubmitted = $data[15];
			$accomplishment = $data[20];
			$comment = $data[22];
			$estSP = $data[23];
			$actSP = $data[24];
			$completeScore = $data[25];
			
			//set checkboxes
			if ($data[5] == 1) {
				$newProject = 'checked';
			}
			if ($data[6] == 1) {
				$planned = 'checked';
			}
			if ($data[16] == 1) {
				$onTime = 'checked';
			}
			if ($data[17] == '1') {
				$completed = 'checked';
			}
			if ($data[18] == 1) {
				$needsMoreWork = 'checked';
			}
			if ($data[19] == 1) {
				$unfinished = 'checked';
			}

		}
	} else if ($_POST['legend'] == "Production") {
		$query = "SELECT * FROM prodTeamTracking WHERE ID = '$assignmentID'";
  		$result = mysqli_query($db,$query);
		while($data = mysqli_fetch_array($result)) {
			$weekOf = $data[1];
			$assignment = $data[2];
			$assignmentDesc = $data[8];
			$timeAllowed = $data[9];
			$assignedPerson = $data[10];
			$dueDate = $data[11];
			$dateSubmitted = $data[12];
			$accomplishment = $data[17];
			$comment = $data[18];
			$estSP = $data[19];
			$actSP = $data[20];
			$completeScore = $data[21];
			
			//set checkboxes
			if ($data[4] == 1) {
				$planned = 'checked';
			}
			if ($data[13] == 1) {
				$onTime = 'checked';
			}
			if ($data[14] == '1') {
				$completed = 'checked';
			}
			if ($data[15] == 1) {
				$needsMoreWork = 'checked';
			}
			if ($data[16] == 1) {
				$unfinished = 'checked';
			}
		}
	}
}




?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>72 Dragons</title>
<meta name="viewport" content="width=device-width, height=device-height">
<link href="https://fonts.googleapis.com/css?family=Spectral+SC:300" rel="stylesheet">
<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
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
textarea:focus, input:focus {
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
  grid-column: 1 / 3;
  grid-row: 3;
  border-color: transparent;
}
#story {
  grid-column: 1 / 5;
  grid-row: 4;
  border-color: transparent;
  background: #0e0e0e;
}
#category {
  grid-column: 1 / 3;
  grid-row: 5;
  border-color: transparent;
}
#planned {
  grid-column: 3;
  grid-row: 5;
}
#newProject {
  grid-column: 4;
  grid-row: 5;
}
#task {
  grid-column: 1 / 5;
  grid-row: 6;
}
#timeAllowed {
  grid-column: 1;
  grid-row: 7;
}
#dueDate {
  grid-column: 2;
  grid-row: 7;
}
#onTime {
  grid-column: 3;
  grid-row: 7;
}
#turnedIn {
  grid-column: 4;
  grid-row: 7;
}
#completed {
  grid-column: 1;
  grid-row: 8;
}
#moreWork {
  grid-column: 2;
  grid-row: 8;
}
#unFinished {
  grid-column: 3;
  grid-row: 8;
}
#accomplishment {
  grid-column: 1 / 3;
  grid-row: 9;
}
#comment {
  grid-column: 3 / 5;
  grid-row: 9;
}
#estimatedSP {
  grid-column: 1;
  grid-row: 10;
}
#actualSP {
  grid-column: 2;
  grid-row: 10;
}
#completeScore {
  grid-column: 3 / 5;
  grid-row: 10;
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
}
.legendItem {
    border: 2px #ad9440 solid;
    border-radius: 100%;
    background: #1b1b1b;
    position: relative;
    width: 30px;
    height: 30px;
    margin: 10px;
    cursor: pointer;
    transition: width 0.25s, height 0.25s, margin 0.25s;
}
.legendSymbol {
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
.legendItem:hover {
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
};

</style>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/header.html';?>

<div id="trackingSheetContainer">
	<div id="trackingSheet">
		<table class="userReport">
          	<tr>
          		<th>
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
    			<th>Assignment</th>
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
								echo "<div data-id=\"".$data[0]."\" data-parent=\"".$data[0]."\" onclick=\"sheetdropDownClick('Saga', $(this).text())\" class=\"dropDown-option\">".$data[1]."</div>";
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
								echo "<div data-id=\"".$data[0]."\" data-parent=\"".$data[0]."\" onclick=\"sheetdropDownClick('Epic', $(this).text())\" class=\"dropDown-option\">".$data[1]."</div>";
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
								echo "<div data-id=\"".$data[0]."\" data-parent=\"".$data[0]."\" onclick=\"sheetdropDownClick('Story', $(this).text())\" class=\"dropDown-option\">".$data[1]."</div>";
							}
  						?>
  					</div>
  				</div>
  				<input class="headerChoice" id="inputStory" type="hidden">
  				<br>
  				<br>
  				<span>All</span>
  			</th>
    			<th>Task</th>
    			<th>Time Allowed</th>
    			<th>
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
    			<th>Target Deliverable</th>
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
	<div id="legends">
		<div class="legendItem" onclick="loadLegend('Web', ['EMPTY'])"><div class="legendSymbol">W</div><div class="legendPopout">Web</div></div>
		<div class="legendItem" onclick="loadLegend('Production', ['EMPTY'])"><div class="legendSymbol">P</div><div class="legendPopout">Production</div></div>
		<form id="loadEdit">
		<input type="hidden" id="legendChoice" value="Web">
	</div>
	<div id="toggleSheet" onclick="toggleSheet()"><div id="toggleSheetDragon"></div></div>
	<div id="alertContainer"></div>
</div>


<div id="content">
  <div id="weekOf" class="box">
  	<div class="choicebar-dropDown" id="weekofDropDown">
  		<div class="dropDown-Face"><?php echo $weekOf ?></div>
  		<div class="dropDown-Container">
  			<div onclick="dropDownClick('weekofDropDown', $(this).text())" class="dropDown-option">February 2nd</div>
  			<div onclick="dropDownClick('weekofDropDown', $(this).text())" class="dropDown-option">January 26th</div>
  		</div>
  	</div>
    <select name="weekOf"><option value="test">ff</option></select>
  </div>
  <div id="division" class="box">
  	<div class="choicebar-dropDown" id="divisionDropDown">
  		<div class="dropDown-Face">Division</div>
  		<div class="dropDown-Container">
  			<div onclick="dropDownClick('divisionDropDown', $(this).text())" class="dropDown-option">Web</div>
  			<div onclick="dropDownClick('divisionDropDown', $(this).text())" class="dropDown-option">Production</div>
  		</div>
  	</div>
    <select name="division"><option value="test">ff</option></select>
  </div>
  
  <div id="AssignmentName" class="box">
    <div class="box-title">Assignment</div> <input name="assignment" placeholder="Assignment" value="<?php echo $assignment ?>">
  </div>
  
  <div id="memberSelect" class="box">
  	<div class="choicebar-dropDown" id="membersDropDown">
  		<div class="dropDown-Face"><?php echo $assignedPerson ?></div>
  		<div class="dropDown-Container">
  			<?php 
  				$query = "SELECT name FROM 72Dstaff ORDER BY name ASC";
  				$result = mysqli_query($db,$query);
				while($data = mysqli_fetch_array($result)) {
					echo "<div onclick=\"dropDownClick('membersDropDown', $(this).text())\" class=\"dropDown-option\">".$data[0]."</div>";
				}
  			?>
  		</div>
  	</div>
    <select name="member"><option value="test">ff</option></select>
  </div>
  
  <div id="story" class="box large">
    <select name="saga"><option value="test">ff</option></select>
    <select name="epic"><option value="test">ff</option></select>
    <select name="story"><option value="test">ff</option></select>
  </div>
  
    <div id="category" class="box">
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
    <select name="category"><option value="test">ff</option></select>
  </div>
  <div id="planned" class="box small">
    <div class="box-title">Planned for this week</div> <input type="checkbox" name="planned" <?php echo $planned ?>>
  </div>
  <div id="newProject" class="box small">
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
    <div class="box-title">Target Deliverable</div> <input type="date" name="dueDate"  value="<?php echo $dueDate ?>">
  </div>
    <div id="onTime" class="box small">
    <div class="box-title">On Time</div> <input type="checkbox" name="onTime" <?php echo $onTime ?>>
  </div>
    <div id="turnedIn" class="box small">
    <div class="box-title">Actual Date</div> <input type="date" name="turnedIn"  value="<?php echo $dateSubmitted ?>">
  </div>
  
      <div id="completed" class="box small">
    <div class="box-title">Completed</div> <input type="checkbox" name="completed" <?php echo $completed ?>>
  </div>
      <div id="moreWork" class="box small">
    <div class="box-title">Needs More Work</div> <input type="checkbox" name="moreWork" <?php echo $needsMoreWork ?>>
  </div>
      <div id="unFinished" class="box small">
    <div class="box-title">Unfinished</div> <input type="checkbox" name="unFinished" <?php echo $unfinished ?>>
  </div>
  
    <div id="accomplishment" class="box">
    <div class="box-title">Accomplishment</div>
    <div class="box-content"><textarea name="accomplishment" placeholder="Accomplishment"><?php echo $accomplishment ?></textarea></div>
  </div>
    <div id="comment" class="box">
    <div class="box-title">Comment</div>
    <div class="box-content"><textarea name="comment" placeholder="Comment"><?php echo $comment ?></textarea></div>
  </div>
  
        <div id="estimatedSP" class="box small">
    <div class="box-title">Estimated Story Points</div> <input onchange="completeScore($(this))" type="number" name="estimatedSP" min="0" max="10"  value="<?php echo $estSP ?>">
  </div>
        <div id="actualSP" class="box small">
    <div class="box-title">Actual Story Points</div> <input onchange="completeScore($(this))" type="number" name="actualSP" min="0" max="10"  value="<?php echo $actSP ?>">
  </div>
        <div id="completeScore" class="box">
    <div class="box-title">Completeness Score (%)</div> <input type="number" name="completeScore" disabled value="<?php echo $completeScore ?>">
  </div>
  
  
  <div id="editPrev" class="box tall">
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
  </div>
  
</div>


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
    					$('#alertContainer').append('<div class="alert">Row ID-' + ID + ', Column ID-' + position + ' was saved</div>');
    					var theAlert = $('.alert:last');
    					theAlert.fadeIn();
    					setTimeout(function () {
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

//Content

function completeScore(number) {
	if (number.val() < 0)
		number.val(0);
	else if (number.val() > 10)
		number.val(10);
	$('#completeScore input').val(Math.ceil(($('#actualSP input').val() / $('#estimatedSP input').val()) * 100));
}

function load(id) {
	$('input[name=id]').val(id);
	$( "#edit" ).submit();
}

function dropDownClick(dropDownID, title) {
	$('#' + dropDownID + ' .dropDown-Face').text(title);
	
	
	
	
	
	
	if ($('#' + dropDownID).parent().attr('id') == 'edit') {
		var division, weekOf, ignore = 0; 
		if (dropDownID == 'divisioneditDropDown') {
			division = title, weekOf = 'all';
		} else if (dropDownID == 'weekofeditDropDown') {
			division = $('#divisioneditDropDown .dropDown-Face').text(), weekOf = title;
			if ($('#divisioneditDropDown .dropDown-Face').text() == 'Division')
				ignore++;	
		}
		
		if (!ignore)
			$.ajax({
				type: 'post',
				url: 'url',
				data: {'division':division, 'weekOf':weekOf},
				success: function (data) {
					data = JSON.parse(data);
				}
			});
	}
}

//Onload

$(document).ready(function () {
	$('input[type=checkbox]').each(function () {
		$(this).parent().append('<div class="checkDragon"><img src="http://72dragons.snxwless.net/images/dragons/dragonscrollpost.png"></div>');
		if ($(this).is(":checked"))
			$(this).parent().find('.checkDragon').toggleClass('checked');
		$(this).parent().find('.checkDragon').click(function () {
			$(this).toggleClass('checked');
		});
	});
	
	
	
	
	
	//Set up sheet
	$.ajax({
    			type: 'post',
    			url: '/s140630php/assignments/loadUserWeeklyReport.php',
    			data: {'date':'February 2nd'},
    			success: function (data) {
    				data = JSON.parse(data);
    				loadSheet(data);
    				
    			}
    	});
});
</script>
</body>
</html>