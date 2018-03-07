<?php
   include($_SERVER['DOCUMENT_ROOT']."/s140630php/config.php");
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>72 Dragons</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Spectral+SC:300" rel="stylesheet">
<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>
<style>
body {
  margin: 0;
  padding: 0;
  background: black;
  overflow-x: hidden;
  font-family: "Spectral SC", serif;
}

/*Story Header*/
#overviewHeader{
    height: 160px;
    width: 1000px;
    margin: auto;
    position: sticky;
    top: 101px;
    background: black;
    z-index: 100;
    margin-bottom: 32px;
    border-bottom: 2px maroon solid;
    /*transition: height 0.25s, width 0.25s;*/
}
.smallHeader {
    height: 50px !important;
    width: 100% !important;
    display: flex;
}
.smallHeader #overviewTitle {
	margin: auto;
	font-size: 30px;
}
#overviewTitle {
  text-align: center;
  color: #ad9440;
  font-size: 54px;
  margin-bottom: 10px;
  transition: font-size 0.25s;
}
#overviewMenu {
  width: 500px;
  margin: auto;
  display: flex;
}
.active {
  background: #1b1b1b !important;
  border-color: #ad9440 !important;
}
.menuItem {
  color: #ad9440;
  margin: auto;
  cursor: pointer;
  border: 2px #1b1b1b solid;
  width: 50px;
  background: black;
  text-align: center;
  padding: 3px;
  overflow: hidden;
  position: relative;
  transition: background 0.25s, filter 0.25s, border-color 0.25s;
}
.menuItem:hover {
  background: #0e0e0e;
  filter: brightness(120%);
}
.menuItem input {
    position: absolute;
    left: 0;
    height: 100%;
    margin-top: -3px;
    padding: 0;
    width: 100%;
    opacity: 0;
    cursor: pointer !important;
    z-index: 10;
}

/*Story Tab Windows*/
#overviewWindows {
  width: 200%;
  overflow: hidden;
  display: flex;
  height: auto;
  position: relative;
  left: 0;
  margin-bottom: 20px;
  transition: left 0.5s;
}
.ov-window {
  height: auto;
  width: 100%;
  position: relative;
}

/*Spread Sheet*/
table {
    width: calc(100% - 2px);
    border-collapse: collapse;
}
tr {
    background: black;
}
tr:hover {
    background: #1b1b1b !important;
}
th {
    color: #ad9440;
    padding: 5px;
    font-size: 20px;
    border: 1px #ad9440 solid;
    background: #0e0e0e;
}
.thImportant {
    width: 200px;
}
td {
    border: 1px #565656 solid;
    color: white;
    text-align: center;
    padding: 5px 0;
}
.editRow {
    cursor: pointer;
}

.table-options {
	position: relative;	
}
.table-options div {
	position: absolute;
    top: 0;
    cursor: pointer;
}
.table-file {
    left: 10px;	
}
.table-comment {
    right: 10px;
}
#table-options-results {
    width: 447px;
    height: 150px;
    position: fixed;
    border: 1px #ad9440 solid;
    border-bottom: 0;
    left: 192px;
    background: #0e0e0e;
    bottom: -200px;
    transition: bottom 0.25s
}
.table-options-active {
    bottom: 0 !important;
}
#options-results-header {
    height: 25px;
    overflow: auto;
    color: #ad9440;
    background: #1b1b1b;
    border-bottom: 1px #ad9440 solid;
    text-align: center;
    cursor: pointer;
}
#options-results-content {
	height: calc(100% - 25px);
	width: 100%;
	overflow: auto;	
}
.options-results-comment, .options-results-file {
    color: white;
    padding: 5px;
    border-bottom: 1px #ad9440 solid;
    transition: border-color 0.25s, background 0.25s;
}
.options-results-file {
    cursor: pointer;
}
.options-results-comment:hover, .options-results-file:hover {
    border-color: #800000;
    background: #1f1f1f;
}

/*Filter*/
#filterContainer {
    position: fixed;
    width: 100%;
    height: 300px;
    bottom: -602px;
    background: #0e0e0e;
    border-top: 2px #ad9440 solid;
    transition: bottom 0.25s, left 0.25s;
}
.filterActive {
    bottom: 0px !important;
}
.filterActive #filterToggle {
    bottom: 320px;
}
.filterActive #downloadCSV {
    bottom: 320px;
    left: 80px;
}
.filterActive #addCSV {
    bottom: 320px;
    left: 140px;
}
#filterToggle {
  z-index: 10;
}
#addCSV {
  overflow: hidden;
}
#addCSV input {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    border-radius: 100%;
    left: 0;
    opacity: 0;
}
.optionCircle {
    color: #ad9440;
    border: 2px #ad9440 solid;
    width: 40px;
    height: 40px;
    position: fixed;
    font-size: 24px;
    text-align: center;
    border-radius: 100%;
    bottom: 20px;
    left: 20px;
    cursor: pointer;
    background: #0e0e0e;
    transition: bottom 0.25s, left 0.25s;
}
#filterToggle svg {
    margin-top: 10px;
}
#addCSV svg, #downloadCSV svg {
    margin-top: 6px;
}
.hiddenCircle {
	left: -100% !important;
}
#filters {
        width: 1423px;
	height: 100%;
	padding-top: 25px;
}
.filterItem {
    width: 281px;
    height: 96px;
    background: black;
    display: inline-block;
    color: #ad9440;
    text-align: center;
    margin: 15px 22px;
    vertical-align: top;
}
.filterCheckBox {
    border: 5px #1b1b1b solid;
    width: 150px;
    height: 86px;
    line-height: 43px;
    cursor: pointer;
    transition: background 0.25s, border-color 0.25s;
    
    -webkit-touch-callout: none;
    -webkit-user-select: none;
     -khtml-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;
}
#ftr-comp-type {
    margin-left: 31px;
}
#ftr-type .menuItem, #ftr-comp-type .menuItem {
    width: 100px !important;
    display: inline-block !important;
    margin: 6px;
}
#ftr-search, #ftr-type, #ftr-comp-type {
    background: none;
}
#ftr-comp {
    width: 480px;
    position: relative;
}
#ftr-comp:active .ftr-comp-value {
    display: block;
}
.ftr-comp-value {
    position: absolute;
    top: -50px;
    width: 50px;
    border-radius: 3px;
    height: 35px;
    left: 217.5px;
    line-height: 30px;
    background: black;
    border: 3px solid #363636;
    display: none;
}
.ftr-comp-value:after {
    content: '';
    position: absolute;
    width: 0;
    height: 0;
    top: 38px;
    left: 20px;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-top: 5px solid #363636;
}
.filterItem input[type=text] {
    width: 266px !important;
    height: 47px !important;
    margin-top: 24px;
}
input[type=checkbox], input[type=radio]{
	display: none;
}
.ftr-comp-slider {
   -webkit-appearance: none;
    width: 100%;
    height: 86px;
    margin: 0;
    background: black;
    outline: none;
    border: 5px #1b1b1b solid;
}

.ftr-comp-slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 70px;
    height: 86px;
    background: none;
    cursor: pointer;
    background-image: url(http://72dragons.snxwless.net/images/dragon2.gif);
    background-size: cover;
    background-position: center;
    transform: rotateY(180deg);
}

.ftr-comp-slider::-moz-range-thumb {
    width: 70px;
    height: 86px;
    background: none;
    cursor: pointer;
    background-image: url(http://72dragons.snxwless.net/images/dragon2.gif);
    background-size: cover;
    background-position: center;
    transform: rotateY(180deg);
}

/*Story Add/Edit*/
#storyTypeSelect {
  width: 1000px;
  margin: auto;
}
#select-type {
  display: flex;
  margin: auto;
}
#select-type .menuItem {
  width: 125px;
}
#select-story {
  margin: 31px 0;
  color: #ad9440;
  /*visibility: hidden;*/
}

/*Story Input*/
.story-input {
    width: 1000px;
    height: 265px;
    margin: auto;
    display: flex;
}
#story-form {
    width: 700px;
}
#story-options {
  width: 700px;
}
.story-options-box {
    background: #0e0e0e;
    border: 5px #1b1b1b solid;
    width: 200px;
    height: 110px;
    color: #ad9440;
    margin: 0 10px;
    overflow: hidden;
    display: inline-block;
    line-height: 50px;
    font-size: 20px;
    text-align: center;
    cursor: pointer;
  position: relative;
  transition: border-color 0.25s, background 0.25s;
  
  
    -webkit-touch-callout: none;
    -webkit-user-select: none;
     -khtml-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;
}
.checked {
  border-color: #ad9440 !important;
  background: #1b1b1b !important;
}
.checkedNo {
  background: #0e0e0e !important;
  border-color: maroon !important;
}
#perComp-title {
    font-size: 20px;
    line-height: 26px;
    height: 26px;
    border-bottom: 1px #ad9440 solid;
}
.story-options-box input[type=number]{
height: 80px;
    width: 100%;
    font-size: 90px;
    text-align: center;
    color: #ad9440;
    background: black;
    border: none;
}
.options-icon {
    position: absolute;
    bottom: -50px;
    font-size: 36px;
    overflow: hidden;
  color: #0e0e0e;
  transition: color 0.25s, bottom 0.25s;
}
.options-icon-show {
  color: #ad9440 !important;
  bottom: 10px !important;
}
.options-upload {
  left: 20px;
}
.options-upload input {
    position: absolute;
    width: 100%;
    opacity: 0;
    height: 100%;
    cursor: pointer;
}
.options-comment {
  right: 20px;
}
#right-dragon {
    width: 300px;
    height: 100%;
    background-image: url(http://72dragons.snxwless.net/images/dragons/dragonOnComp.png);
    background-size: cover;
    background-position: center;
}
#left-dragon {
    width: 300px;
    height: 100%;
    background-image: url(http://72dragons.snxwless.net/images/dragons/dragonscrollpost.png);
    background-size: auto 144%;
    background-position: 0px;
}
.storyCMS-outbox {
    display: none;
}

/*File Upload Pop Out*/
#storyCMS-popout {
    width: 400px;
    height: calc(100% - 153px);
    left: -403px;
    position: fixed;
    top: 153px;
    overflow: auto;
    z-index: 200;
    background: #0e0e0e;
    border-right: 3px #ad9440 solid;
    transition: left 0.5s;
}
.storyCMS-active {
    left: 0 !important;
}
.storyCMS-popout-header {
    text-align: center;
    height: 100px;
    border-bottom: 1px #ad9440 solid;
    position: sticky;
    top: 0;
    background: #0e0e0e;
}
.storyCMS-popout-header {
    font-size: 14px;
    color: #ad9440;
    line-height: 22px;
}
.storyCMS-header-title {
    color: #ad9440;
    font-size: 24px;
    padding: 10px;
}
.storyCMS-header-menu {
	display: flex;
}
.storyCMS-popout-list input{
	display: none;
}
.storyCMS-list-file {
    display: flex;
    width: 100%;
    background: #1b1b1b;
    color: #ad9440;
    border-bottom: 1px black solid;
}
.storyCMS-list-file span {
    width: 320px;
    padding: 1px 10px;
}
.storyCMS-file-options {
    width: 80px;
    background: #1f1f1f;
    display: flex;
    border-left: 1px black solid;
}
.storyCMS-options-item {
    color: black;
    margin: auto;
    cursor: pointer;
    transition: color 0.25s;
}
.storyCMS-options-item:hover, .storyCMS-options-item:hover a{
    color: #ad9440 !important;
}
.storyCMS-options-item a {
    color: black;
}


/*Input*/
button {
    height: 35px;
    margin-left: calc(50% - 75px);
    width: 150px;
    border: 0;
    background: #1b1b1b;
    cursor: pointer;
    color: #565656;
    font-size: 16px;
    transition: color 0.25s;
    font-family: "Spectral SC", serif;
}
button:hover {
	color: #ad9440;
}
input[type=text] {
  display: block;
  margin: auto;
  height: 35px;
  width: 700px;
  border: 0;
  border-left: 5px #343436 solid;
  background-color: #1b1b1b;
  color: #FFF;
  padding: 0 5px;
  font-size: 16px;
  transition: border-color 0.5s;
  font-family: "Spectral SC", serif;
}
textarea {
  display: block;
  margin: 10px auto;
  width: 700px;
  height: 200px;
  border: 0;
  border-left: 5px #343436 solid;
  background-color: #1b1b1b;
  color: #FFF;
  padding: 5px;
  resize: none;
  font-size: 16px;
  transition: border-color 0.5s;
  font-family: "Spectral SC", serif;
}
textarea:focus, input:focus, button:focus{
  outline: none;
  border-color: maroon;
}
.ftr-comp-slider:focus {
  border-color: #1b1b1b !important;
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
	max-height: 155px;
	height: auto;
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

.dropDown-Container span {
    color: #330000;
}
</style>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/header.html';?>
<div id="overviewHeader">
  <div id="overviewTitle">Story Overview</div>
  <div id="overviewMenu">
    <div class="menuItem loadSheet active"><i class="fas fa-list"></i></div>
    <div class="menuItem addStory"><i class="fas fa-plus"></i></div>
    <div class="menuItem editStory"><i class="fas fa-pencil-alt"></i></div>
  </div>
</div>

<div id="overviewWindows">
  <div class="ov-window" id="sheet">
    <table id="storySheet">
    	<tr>
    		<th class="thImportant">Page</th>
	    	<th>Type</th>
    		<th class="thImportant">Parent</th>
    		<th class="thImportant">Description</th>
    		<th>Has Mockup</th>
   	 	<th>Has Webpage</th>
   	 	<th>In Progress</th>
   	 	<th>Is Complete</th>
   	 	<th>Percent Complete</th>
   	 	<th>In Database</th>
    	</tr>
    	<?php
    		$query = "Select * from webdevPage;";
    		$result = mysqli_query($db,$query);
		while($data = mysqli_fetch_array($result)) {
			$parent = '';
			
			$query = "Select * from webdevPage;";
	    		$checkResult = mysqli_query($db,$query);
			while($check = mysqli_fetch_array($checkResult)) {
				if ($data[3] == $check[0]) {
					$parent = $check[1];
					break;
				}
			}
			echo "<tr><td><input type='hidden' value=".$data[0].">".$data[1]."</td><td>".$data[2]."</td><td><input type='hidden' value=".$data[3].">".$parent."</td><td>".$data[4]."</td>";
			if ($data[5] == 1) {
				echo "<td><div class='table-options'><div class='table-file'><i class='fas fa-file-alt'></i></div><div class='table-comment'><i class='fas fa-comment'></i></div></div>".$data[5]."</td>";
			} else {
				echo "<td>".$data[5]."</td>";
			}
			if ($data[6] == 1) {
				echo "<td><div class='table-options'><div class='table-file'><i class='fas fa-file-alt'></i></div><div class='table-comment'><i class='fas fa-comment'></i></div></div>".$data[6]."</td>";
			} else {
				echo "<td>".$data[6]."</td>";
			}
			if ($data[7] == 1) {
				echo "<td><div class='table-options'><div class='table-file'><i class='fas fa-file-alt'></i></div><div class='table-comment'><i class='fas fa-comment'></i></div></div>".$data[7]."</td>";
			} else {
				echo "<td>".$data[7]."</td>";
			}
			if ($data[8] == 1) {
				echo "<td><div class='table-options'><div class='table-file'><i class='fas fa-file-alt'></i></div><div class='table-comment'><i class='fas fa-comment'></i></div></div>".$data[8]."</td>";
			} else {
				echo "<td>".$data[8]."</td>";
			}
			echo "<td>".$data[9]."</td>";
			if ($data[10] == 1) {
				echo "<td><div class='table-options'><div class='table-file'><i class='fas fa-file-alt'></i></div><div class='table-comment'><i class='fas fa-comment'></i></div></div>".$data[10]."</td>";
			} else {
				echo "<td>".$data[10]."</td>";
			}
			echo "</tr>";
		}
    	?>
    </table>
    
    <div id="table-options-results">
    	<div id="options-results-header"></div>
    	<div id="options-results-content"></div>
    </div>
    
    <div id="filterContainer">
    	<div class="optionCircle" id="filterToggle"><i class="fas fa-filter"></i></div>
    	<div class="optionCircle" id="downloadCSV" onclick="downloadCSV()"><i class="fas fa-download"></i></div>
    	<div class="optionCircle" id="addCSV"><input id="uploadCSV" type="file" accept=".csv" onchange="uploadCSV()"><i class="fas fa-upload"></i></div>
    	<div id="filters">
    		<!--<div class="filterItem" id="ftr-parent">
    			<div class="choicebar-dropDown">
  				<div class="dropDown-Face">Parent</div>
  				<div class="dropDown-Container">
  					
  				</div>
  			</div>
    		</div>-->
    		<div class="filterItem filterCheckBox" id="ftr-hm">
    			Has Mockup?<br><span><i class="fas fa-minus"></i></span>
    			<input type="radio"
     name="ftr-hm" value="1">
     			<input type="radio"
     name="ftr-hm" value="0">
     			<input type="radio"
     name="ftr-hm" value="All" checked="checked">
    		</div>
    		<div class="filterItem filterCheckBox" id="ftr-ip">
    			In Progress?<br><span><i class="fas fa-minus"></i></span>
    			<input type="radio"
     name="ftr-ip" value="1">
     			<input type="radio"
     name="ftr-ip" value="0">
     			<input type="radio"
     name="ftr-ip" value="All" checked="checked">
    		</div>
    		<div class="filterItem filterCheckBox" id="ftr-idb">
    			In Database?<br><span><i class="fas fa-minus"></i></span>
    			<input type="radio"
     name="ftr-idb" value="1">
     			<input type="radio"
     name="ftr-idb" value="0">
     			<input type="radio"
     name="ftr-idb" value="All" checked="checked">
    		</div>
    		<div class="filterItem" id="ftr-search">
    			<input type="text" name="ftr-search" placeholder="Search">
    		</div>
    		<div class="filterItem" id="ftr-type">
    			<div class="menuItem">Legend</div>
         		<div class="menuItem">Saga</div>
         		<div class="menuItem">Epic</div>
         		<div class="menuItem">Story</div>
         		<input type="radio"
     name="storyType" value="Legend">
     			<input type="radio"
     name="storyType" value="Saga">
     			<input type="radio"
     name="storyType" value="Epic">
     			<input type="radio"
     name="storyType" value="Story">
     
    		</div>
    		<div class="filterItem filterCheckBox" id="ftr-hw">
    			Has Webpage?<br><span><i class="fas fa-minus"></i></span>
    			<input type="radio"
     name="ftr-hw" value="1">
     			<input type="radio"
     name="ftr-hw" value="0">
     			<input type="radio"
     name="ftr-hw" value="All" checked="checked">
     
    		</div>
    		<div class="filterItem filterCheckBox" id="ftr-ic">
    			Is Complete?<br><span><i class="fas fa-minus"></i></span>
    			<input type="radio"
     name="ftr-ic" value="1">
     			<input type="radio"
     name="ftr-ic" value="0">
     			<input type="radio"
     name="ftr-ic" value="All" checked="checked">
    		</div>
    		<div class="filterItem" id="ftr-comp">
    			<input type="range" min="0" max="100" value="50" class="ftr-comp-slider">
    			<div class="ftr-comp-value">50</div>
    		</div>
    		<div class="filterItem" id="ftr-comp-type">
    			<div class="menuItem">=</div>
         		<div class="menuItem">≥</div>
         		<div class="menuItem">≤</div>
         		<div class="menuItem active">None</div>
         		<input type="radio"
     name="compType" value="equals">
     			<input type="radio"
     name="compType" value="greater">
     			<input type="radio"
     name="compType" value="less">
     			<input type="radio"
     name="compType" value="none">
     
    		</div>
    	</div>
    </div>
  </div>
  
  
  <div class="ov-window" id="storyCMS">
  <form action="/s140630php/story/createStory.php" id="storyForm" enctype="multipart/form-data" method="post">
    <input type="hidden" name="updateID">
    <div id="storyCMS-popout">
    	<input type="hidden" id="prevSectionBox">
    	<input type="hidden" id="sectionBox">
    	<div class="storyCMS-popout-header">
    		<div class="storyCMS-header-title"></div>
    		<span></span>
    		<div class="storyCMS-header-menu">
    			<div class="menuItem"><input type="file" name="file[0][]"><i class="fas fa-plus"></i></div>
    			<!--<div class="menuItem"><i class="fas fa-trash-alt"></i></div>-->
    		</div>
    	</div>
    	<div class="storyCMS-popout-list"></div>
    </div>
  
    <div id="storyTypeSelect">
      <div id="select-type">
         <div class="menuItem">Legend</div>
         <div class="menuItem">Saga</div>
         <div class="menuItem">Epic</div>
         <div class="menuItem">Story</div>
         <input type="radio"
     name="createType" value="Legend">
     			<input type="radio"
     name="createType" value="Saga">
     			<input type="radio"
     name="createType" value="Epic">
     			<input type="radio"
     name="createType" value="Story">
      </div>
      <div id="select-story">
        <div class="choicebar-dropDown">
  		<div class="dropDown-Face">Parent</div>
  			<div class="dropDown-Container">
  					
  			</div>
  		</div>
  	</div>
  	<input type="hidden" name="createStoryParentID">
    </div>
    
    <div class="story-input">
    <div id="story-form">
      <input type="text" name="storyName" placeholder="Story Name">
    <textarea name="storyDesc" placeholder="Description"></textarea>
      </div>
      <div id="right-dragon"></div>
    </div>
    
    <div class="story-input">
      <div id="left-dragon"></div>
      <div id="story-options">
        <div id="opt-mockup" class="story-options-box">
          Has a Mockup?
          <br><span><i class="fas fa-times"></i></span>
          <div class="options-icon options-upload"><i class="fas fa-file-alt"></i></div>
          <div class="options-icon options-comment"><i class="fas fa-plus" data-fa-transform="shrink-10 up-.5" data-fa-mask="fas fa-comment"></i></div>
          <input type="checkbox" name="crt-hm">
          <div class="storyCMS-outbox"></div>
          </div>
        <div id="opt-web" class="story-options-box">Has a Webpage?<br><span><i class="fas fa-times"></i></span>
          <div class="options-icon options-upload"><i class="fas fa-file-alt"></i></div>
          <div class="options-icon options-comment"><i class="fas fa-plus" data-fa-transform="shrink-10 up-.5" data-fa-mask="fas fa-comment"></i></div>
          <input type="checkbox" name="crt-hw">
          <div class="storyCMS-outbox"></div>
        </div>
        <div id="opt-prog" class="story-options-box">Is In Progress?<br><span><i class="fas fa-times"></i></span>
          <div class="options-icon options-upload"><i class="fas fa-file-alt"></i></div>
          <div class="options-icon options-comment"><i class="fas fa-plus" data-fa-transform="shrink-10 up-.5" data-fa-mask="fas fa-comment"></i></div>
          <input type="checkbox" name="crt-ip">
          <div class="storyCMS-outbox"></div>
        </div>
        <div id="opt-comp" class="story-options-box">Is Complete?<br><span><i class="fas fa-times"></i></span>
          <div class="options-icon options-upload"><i class="fas fa-file-alt"></i></div>
          <div class="options-icon options-comment"><i class="fas fa-plus" data-fa-transform="shrink-10 up-.5" data-fa-mask="fas fa-comment"></i></div>
          <input type="checkbox" name="crt-ic">
          <div class="storyCMS-outbox"></div>
        </div>
        <div class="story-options-box">
        <div id="perComp-title">% Complete</div>
        <input type="number" min="0" max="100" name="crt-perComp" value="0">
        </div>
        <div id="opt-data" class="story-options-box">Is In Database?<br><span><i class="fas fa-times"></i></span>
          <div class="options-icon options-upload"><i class="fas fa-file-alt"></i></div>
          <div class="options-icon options-comment"><i class="fas fa-plus" data-fa-transform="shrink-10 up-.5" data-fa-mask="fas fa-comment"></i></div>
          <input type="checkbox" name="crt-idb">
          <div class="storyCMS-outbox"></div>
        </div>
      </div>
    </div>
    
    <button id="createStory">Create Story</button>
    </form>
  </div>
</div>


<script type="text/javascript">
$(document).ready(function () {

  //Menu Item
  
  $('#overviewMenu .menuItem').click(function () {
    if (!$(this).hasClass('active')) {
      var checkboxes = ['#opt-mockup', '#opt-web', '#opt-prog', '#opt-comp', '#opt-data'];
      $('#overviewMenu  .active').removeClass('active');
      $(this).addClass('active');
      $('td').off('click').parent().removeClass('editRow');
      $('.storyCMS-outbox, .storyCMS-popout-list, #prevSectionBox, #sectionBox').empty();
      $('#storyCMS-popout').removeClass('storyCMS-active');
      $('#table-options-results').removeClass('table-options-active');
      
      if ($(this).hasClass('addStory')) {
        $(document).scrollTop(5);
      	//reset form
      	$('#storyForm')[0].reset();
      	$('#storyForm .active').removeClass('active');
      	$('#storyForm .dropDown-Face').text('Parent');
      	$('#storyForm .dropDown-Container').empty();
        for (var cb = 0; cb < checkboxes.length; cb++) {
        	$(checkboxes[cb]).click(); //Otherwise it doesn't click on the box. It'll run the if below and check the box, but not click it
        	if ($(checkboxes[cb] + ' input[type=checkbox]').prop('checked')) {
        		$(checkboxes[cb] + ' input[type=checkbox]').prop('checked', true);
        		$(checkboxes[cb]).click();
        	}
        }	
      
      	$('#filterContainer').css('left', '-100%');
      	$("#filterToggle, #addCSV, #downloadCSV").addClass('hiddenCircle');
        $('#overviewWindows').css('left', '-100%');
        $('#storyForm').attr('action', '/s140630php/story/createStory.php');
        $('#createStory').text('Create Story');
        
      } else {
      	$('#filterContainer').css('left', '0');
      	$('#filterToggle, #addCSV, #downloadCSV').removeClass('hiddenCircle');
        $('#overviewWindows').css('left', '0');
        
        if ($(this).hasClass('editStory')) {
          alert('Please select the story you wish to edit');
          $('td').each(function () {
          	$(this).parent().addClass('editRow');
          	$(this).on('click', function() {
  			$('td').off('click').parent().removeClass('editRow');
  			$('#filterContainer').css('left', '-100%');
      			$("#filterToggle, #addCSV, #downloadCSV").addClass('hiddenCircle');
      			$('#storyForm').attr('action', '/s140630php/story/updateStory.php');
      			$('#createStory').text('Update Story');
        		$('#overviewWindows').css('left', '-100%');
        		$(document).scrollTop(5);
        		
        		//Add data
        		var row = $(this).parent().find('td');
        		$('input[name=updateID').val(row.eq(0).find('input').val());
        		$('#story-form input').val(row.eq(0).text()); //Name
        		$('#story-form textarea').val(row.eq(3).text()); //Desc
        		$('input[name=createStoryParentID]').val(row.eq(2).find('input').val()); //Desc
        		switch (row.eq(1).text()) {
        			case 'Legend':
        				$('#select-type input[value=Legend]').prop('checked', true);
        				$('#select-type .menuItem').removeClass('active').eq(0).click();
        				break;
        			case 'Saga':
        				$('#select-type input[value=Saga]').prop('checked', true);
        				$('#select-type .menuItem').removeClass('active').eq(1).click();
        				break;
        			case 'Epic':
        				$('#select-type input[value=Epic]').prop('checked', true);
        				$('#select-type .menuItem').removeClass('active').eq(2).click();
        				break;
        			case 'Story':
        				$('#select-type input[value=Story]').prop('checked', true);
        				$('#select-type .menuItem').removeClass('active').eq(3).click();
        				break;
        			default:
        				alert('There is a problem with the story type assigned to this story. Please contact a site administrator.');
        		}
        		$('#select-story .dropDown-Face').text(row.eq(2).text());
        		for (var cb = 0; cb < checkboxes.length; cb++) {
        			if (cb == checkboxes.length - 1) {
        				$(checkboxes[cb] + 'input').prop('checked', row.eq(cb+5).text());
        				if (row.eq(cb+5).text() == 1) {
        					if (!$(checkboxes[cb]).hasClass('checked'))
        						$(checkboxes[cb]).click();
        				} else {
        					if ($(checkboxes[cb]).hasClass('checked'))
        						$(checkboxes[cb]).click();
        				}
        			} else {
        				$(checkboxes[cb] + 'input').prop('checked', row.eq(cb+4).text());
        				if (row.eq(cb+4).text() == 1) {
        					if (!$(checkboxes[cb]).hasClass('checked'))
        						$(checkboxes[cb]).click();
        				} else {
        					if ($(checkboxes[cb]).hasClass('checked'))
        						$(checkboxes[cb]).click();
        				}
        			}
        		}
        		if (row.eq(8).text().indexOf('%') > -1)
        			$('input[name=crt-perComp]').val(row.eq(8).text().slice(0, -1));
        		else
        			$('input[name=crt-perComp]').val(row.eq(8).text());
        		
        		//set files
        		$.ajax({
        			type: 'post',
        			url: '/s140630php/story/getStoryFiles.php',
        			data: {'ID':row.eq(0).find('input').val()},
        			success: function (data) {
        				data = JSON.parse(data);
        				for (var fl = 0; fl < data.length; fl++) {
        					$('.storyCMS-outbox').eq(data[fl].sectionID).append('<div fileID="' + data[fl].ID + '" class="uploadedFile">' + data[fl].fileName + '</div>');
        				}
        			}
        		});
        		
        		//set comments
        		$.ajax({
        			type: 'post',
        			url: '/s140630php/story/getComments.php',
        			data: {'ID':row.eq(0).find('input').val()},
        			success: function (data) {
        				data = JSON.parse(data);
        				for (var fl = 0; fl < data.length; fl++) {
        					$('.storyCMS-outbox').eq(data[fl].sectionID).append('<textarea commentID="' + data[fl].ID + '" class="uploadedComment">' + data[fl].comment + '</textarea>');
        				}
        			}
        		});
		});
          });
        }
      }
    }
  });
  
  $('#select-type .menuItem').click(function () {
    if (!$(this).hasClass('active')) {
      $('#select-type .active').removeClass('active');
      $(this).addClass('active');
      $('#select-type input[value=' + $(this).text() + ']').click();
      
      
      var loadType = 'none';
      switch ($(this).text()) {
		case 'Story':
			loadType = 'Epic';
			break;
		case 'Epic':
			loadType = 'Saga';
			break;
		case 'Saga':
			loadType = 'Legend';
			break;
      }
      $('#select-story .dropDown-Container').empty();
      if (loadType != 'none')
      $.ajax({
      		type: 'post',
      		url: '/s140630php/story/loadStoryDetailByType.php',
      		data: {'type':loadType},
      		success: function (data) {
      			//console.log("prejson - " + data);
      			data = JSON.parse(data);
      			//console.log("postjson - " + data);
      			for (var i = 0; i < data.length; i++) {
      				$('#select-story .dropDown-Container').append("<div onclick=\"dropDownClick('select-story', $(this))\" class=\"dropDown-option\">" + data[i] + "</div>");
      			}
      		}
      });
      
    } else {
      $(this).removeClass('active');
      $('#select-type input[value=' + $(this).text() + ']').prop('checked', false);
    }
  });
  
  $('#ftr-type .menuItem').click(function () {
    if (!$(this).hasClass('active')) {
      $('#ftr-type .active').removeClass('active');
      $(this).addClass('active');
      $('#ftr-type input[value=' + $(this).text() + ']').click();
    } else {
      $(this).removeClass('active');
      $('#ftr-type input[value=' + $(this).text() + ']').prop('checked', false);
    }
  });
  $('#ftr-comp-type .menuItem').click(function () {
    var i;
    switch ($(this).text()) {
    	case '=':
    		i = "equals";
    		break;
    	case '≥':
    		i = "greater";
    		break;
    	case '≤':
    		i = "less";
    		break;
    	case 'None':
    		i = "none";
    }
    if (!$(this).hasClass('active')) {
      $('#ftr-comp-type .active').removeClass('active');
      $(this).addClass('active');
      $('#ftr-comp-type input[value=' + i + ']').click();
    } else {
      $(this).removeClass('active');
      $('#ftr-comp-type .menuItem').eq(3).addClass('active');
      $('#ftr-comp-type input[value=' + i + ']').prop('checked', false);
      $('#ftr-comp-type input[value=none]').prop('checked', true);
    }
  });
  
  //Create/Edit Story
  $('.story-options-box').click(function (e) {
   if(e.target == e.currentTarget)
      checkBox($(this));
   else {
   	if($(e.target).closest('.options-icon').hasClass('options-icon-show')) {
   	     var sectionTitle = $(e.target).closest('.story-options-box').contents().eq(0).text(), sectionOption;
   	     setTimeout(function () {
   		//Set previous section index and current section index
   		$('#prevSectionBox').val($('#sectionBox').val());
   		
   		if ($('.story-options-box').index($(e.target).closest('.story-options-box')) == 5)
   			$('#sectionBox').val(4);
   		else
   			$('#sectionBox').val($('.story-options-box').index($(e.target).closest('.story-options-box')));
   		
   		$('.storyCMS-header-menu input').attr('name', 'file[' + $('#sectionBox').val() + '][]');
   		
   		//Store New Input for submitting
   		if ($('.storyCMS-popout-list input').length != 0) {
   			$('.storyCMS-popout-list input').each(function () {
   				$(this).appendTo($('.storyCMS-outbox').eq($('#prevSectionBox').val()));
   			});
   		} else if ($('.storyCMS-popout-list textarea').length != 0) {
   			$('.storyCMS-popout-list textarea').each(function () {
   				$(this).appendTo($('.storyCMS-outbox').eq($('#prevSectionBox').val()));
   			});
   		}
   		
   		if ($('.storyCMS-uploadedFile').length != 0) {
   			$('.storyCMS-uploadedFile').each(function () {
   				$('.storyCMS-outbox').eq($('#prevSectionBox').val()).append('<div fileID="' + $(this).attr('fileID') + '" class="uploadedFile">' + $(this).find('span').text() + '</div>');
   			});
   		}
   		
   		$('.storyCMS-popout-list').empty();
   		
   	       },500);
   		//What option did the user click on and load from outbox (and database)
   		if ($(e.target).closest('.options-icon').hasClass('options-upload')) { //Upload
   			sectionOption = 'File Manager';
   		     setTimeout(function () {
   			$('.storyCMS-header-menu input').show();
   			switch ($('#sectionBox').val()) {
   				case '0':
   					$('.storyCMS-header-menu input').attr('name', 'mockupFiles[]');
   					break;
   				case '1':
   					$('.storyCMS-header-menu input').attr('name', 'webpageFiles[]');
   					break;
   				case '2':
   					$('.storyCMS-header-menu input').attr('name', 'progressFiles[]');
   					break;
   				case '3':
   					$('.storyCMS-header-menu input').attr('name', 'completeFiles[]');
   					break;
   				case '4':
   					$('.storyCMS-header-menu input').attr('name', 'databaseFiles[]');
   					break;
   				
   			}
   			$('.storyCMS-outbox').eq($('#sectionBox').val()).find('input').each(function () { //non uploaded files
   				$('.storyCMS-popout-list').append('<div class="storyCMS-list-file"><span>[TO UPLOAD] '+ $(this).val().split("\\")[2] + '</span><div class="storyCMS-file-options"><div class="storyCMS-options-item storyCMS-tempItem-delete"><i class="fas fa-trash-alt"></i></div></div></div>');
   				$(this).appendTo('.storyCMS-list-file:last');
  				$('.storyCMS-list-file:last .storyCMS-tempItem-delete').click(function () {
  					$(this).closest('.storyCMS-list-file').remove();
  				});
   				
   			});
   			$('.storyCMS-outbox').eq($('#sectionBox').val()).find('.uploadedFile').each(function () { //uploaded files
   				$('.storyCMS-popout-list').append('<div class="storyCMS-list-file storyCMS-uploadedFile" fileID="' + $(this).attr('fileid') + '"><span>'+ $(this).text() + '</span><div class="storyCMS-file-options"><div class="storyCMS-options-item storyCMS-view"><a target="_blank" href="/files/story/' + $("input[name=updateID]").val() + '/'+ $(this).text() + '" style="text-decoration: none;"><i class="fas fa-eye"></i></a></div><div class="storyCMS-options-item storyCMS-tempItem-delete"><i class="fas fa-trash-alt"></i></div></div></div>');
   				$(this).remove();
   				var fileID = $(this).attr('fileid'), fileName = $(this).text();
  				$('.storyCMS-list-file:last .storyCMS-tempItem-delete').click(function () {
  					$.ajax({
  						type: 'post',
  						url: '/s140630php/story/removeStoryFile.php',
  						data: {'fileID': fileID, 'fileName':fileName, 'pageID':$("input[name=updateID]").val()}
  					});
  					$(this).closest('.storyCMS-list-file').remove();
  				});
   				
   			});
   		     },500);
   		} else { //Comment
   			sectionOption = 'Comment Manager';
   		     setTimeout(function () {
   			$('.storyCMS-header-menu input').hide();
   			$('.storyCMS-outbox').eq($('#sectionBox').val()).find('textarea').each(function () {
   				$('.storyCMS-popout-list').append('<div class="storyCMS-list-file"><div class="storyCMS-file-options"><div class="storyCMS-options-item storyCMS-tempItem-delete"><i class="fas fa-trash-alt"></i></div></div></div>');
   				$(this).prependTo($('.storyCMS-list-file:last'));
   				if ($(this).hasClass('uploadedComment')) {
   					var commentID = $(this).attr('commentid'), comment = $(this).text();
   					$('.storyCMS-list-file:last .storyCMS-tempItem-delete').click(function () {
   						$.ajax({
  							type: 'post',
  							url: '/s140630php/story/removeComment.php',
  							data: {'commentID': commentID, 'comment':comment}
  						});
  						$(this).closest('.storyCMS-list-file').remove();
  					});
   				} else {
   					$('.storyCMS-list-file:last .storyCMS-tempItem-delete').click(function () {
  						$(this).closest('.storyCMS-list-file').remove();
  					});
   				}
   			});
   		     },500);
   		}
   	       
   		//Setting the Header
   		if ($('#storyCMS-popout').hasClass('storyCMS-active')) {
   		    if ($('.storyCMS-popout-header span').text() != sectionTitle || $('.storyCMS-header-title').text() != sectionOption) {
   			$('#storyCMS-popout').toggleClass('storyCMS-active');
   			setTimeout(function () {
   				$('.storyCMS-header-title').text(sectionOption);
   				$('.storyCMS-popout-header span').text(sectionTitle);
   				//$('.storyCMS-popout-list').empty();
   				$('#storyCMS-popout').toggleClass('storyCMS-active');
   			}, 1000);
   		    } else {
   		    	$('#storyCMS-popout').toggleClass('storyCMS-active');
   		    }
   		} else {
   			$('.storyCMS-header-title').text(sectionOption);
   			$('.storyCMS-popout-header span').text(sectionTitle);
   			//$('.storyCMS-popout-list').empty();
   			$('#storyCMS-popout').toggleClass('storyCMS-active');
   		}

        }
   }
  });
  
  $('.storyCMS-header-menu .menuItem').click(function (e) {
   if(!$(e.target).is('input')) { //fix so that borders do not trigger when using file manager
      $('.storyCMS-popout-list').append('<div class="storyCMS-list-file"><textarea name="comment[' + $('#sectionBox').val() + '][]"></textarea><div class="storyCMS-file-options"><div class="storyCMS-options-item storyCMS-tempItem-delete"><i class="fas fa-trash-alt"></i></div></div></div>');
   }
  });
      
  $('.storyCMS-header-menu input').change(function () {
  	if ($(this).val() != "") {
  		var cloned = $(this).clone(true, true);
  		$(this).parent().append(cloned);
  		$('.storyCMS-popout-list').append('<div class="storyCMS-list-file"><span>[TO UPLOAD] '+ $(this).val().split("\\")[2] + '</span><div class="storyCMS-file-options"><div class="storyCMS-options-item storyCMS-tempItem-delete"><i class="fas fa-trash-alt"></i></div></div></div>');
  		$(this).appendTo('.storyCMS-list-file:last');
  		$('.storyCMS-list-file:last .storyCMS-tempItem-delete').click(function () {
  			$(this).closest('.storyCMS-list-file').remove();
  		});
  		$('.storyCMS-header-menu input').val('');
  	}
  });
  
  
  
  
  if ($(document).scrollTop() > 10 )
        	$('#overviewHeader').addClass('smallHeader');
        else if ($(document).scrollTop() == 0)
        	$('#overviewHeader').removeClass('smallHeader');
  $(document).on("mousewheel", function() {
        if ($(document).scrollTop() > 10 )
        	$('#overviewHeader').addClass('smallHeader');
        else if ($(document).scrollTop() == 0)
        	$('#overviewHeader').removeClass('smallHeader');
  });
  
  //Filter
  
  $('.filterCheckBox').click(function () {
    var id = $(this).attr('id');
    if ($(this).hasClass('checked')) {
      $(this).removeClass('checked').addClass('checkedNo');
      $(this).find('span').html('<i class="fas fa-times"></i>');
      $('input[name=' + id + ']')[2].click();
    } else if ($(this).hasClass('checkedNo')) {
      $(this).removeClass('checkedNo');
      $(this).find('span').html('<i class="fas fa-minus"></i>');
      $('input[name=' + id + ']')[0].click();
    } else {
      $(this).addClass('checked');
      $(this).find('span').html('<i class="fas fa-check"></i>');
      $('input[name=' + id + ']')[1].click();
    }
  });
  
  
  $('#filterToggle').click(function() {
  	$('#filterContainer').toggleClass('filterActive');
  });
  
  $('#filters input').change(function() {
  	var hasMockup = $('input[name=ftr-hm]:checked').val(), inProgress = $('input[name=ftr-ip]:checked').val(), inDatabase = $('input[name=ftr-idb]:checked').val(), storyType = $('input[name=storyType]:checked').val(), isComplete = $('input[name=ftr-ic]:checked').val(), search = $('input[name=ftr-search]').val(), hasWebpage = $('input[name=ftr-hw]:checked').val(), perComp = $('.ftr-comp-slider').val(), perCompType = $('input[name=compType]:checked').val();
  	
  	//console.log(hasMockup + "///" + inProgress + "///" + inDatabase + "///" + storyType + "///" + isComplete + "///" + search + "///" + hasWebpage + "///" + perComp);
  	$.ajax({
  		type: 'post',
  		url: '/s140630php/story/filterStorySheet.php',
  		data: {'hasMockup':hasMockup, 'inProgress':inProgress, 'inDatabase':inDatabase, 'storyType':storyType, 'isComplete':isComplete, 'search':search, 'hasWebpage':hasWebpage, 'perComp':perComp, 'perCompType': perCompType},
  		success: function(data) {
  			//console.log(data);
  			try {
  				data = JSON.parse(data);
  			}
			catch(err) {
  				console.log("ERROR:" + err);
  			}
  			//console.log(data);
  			$('#storySheet tr').children('td').parent().remove();
  			for (var i = 0; i < data.length; i++) {
  				$('#storySheet').append(data[i]);
  			}
  		}
  	});
  });
  
  $('.ftr-comp-slider').on('input', function () {
  	$('.ftr-comp-value').css('left', ((4.15 * $('.ftr-comp-slider').val()) + 10) + 'px').text($('.ftr-comp-slider').val());
  });
  
  $('.table-file').click(function () {
  	tableoption('StoryFiles', $(this).closest('tr').children('td').eq(0).find('input').val(), $(this).closest('tr').children('td').eq(0).text());
  });
  
  $('.table-comment').click(function () {
  	tableoption('Comments', $(this).closest('tr').children('td').eq(0).find('input').val(), $(this).closest('tr').children('td').eq(0).text());
  });
  
  $('#options-results-header').click(function () {
  	$('#table-options-results').removeClass('table-options-active');
  });
 
});

function tableoption(type, storyID, storyName) {
  	$('#table-options-results').removeClass('table-options-active');
  	$('#options-results-content').empty();
	$.ajax({
  		type: 'post',
  		url: '/s140630php/story/get' + type + '.php',
  		data: {'ID': storyID},
  		success: function (data) {
  			data = JSON.parse(data);
  			console.log(data);
  			
  			if (type == "Comments") {
  				for (var i = 0; i < data.length; i++) {
  					$('#options-results-content').append('<div class="options-results-comment">' + data[i].comment + '</div>');
  				}
  			} else if (type == "StoryFiles") {
  				for (var i = 0; i < data.length; i++) {
  					$('#options-results-content').append('<a target="_blank" href="/files/story/' + storyID + '/' + data[i].fileName + '"><div class="options-results-file">' + data[i].fileName + '</div></a>');
  				}
  			}
  		}
  	});
  	setTimeout(function () {
  		if (type == "Comments")
  			$('#options-results-header').text(storyName + ' comments');
  		else if (type == "StoryFiles")
  			$('#options-results-header').text(storyName + ' files');
  		$('#table-options-results').addClass('table-options-active');
  	}, 500);
}

function checkBox(box) {
    box.toggleClass('checked');
    if (box.hasClass('checked')) {
      box.find('span').html('<i class="fas fa-check"></i>');
      box.find('input').prop('checked', true);
      box.find('.options-icon').addClass('options-icon-show');
    } else {
      box.find('span').html('<i class="fas fa-times"></i>');
      box.find('input').prop('checked', false);
      box.find('.options-icon').removeClass('options-icon-show');
    }
}

function dropDownClick(id, content) {
	$('#' + id + ' .dropDown-Face').text(content.text());
	$('input[name=createStoryParentID]').val(content.find('span').attr('data-storyid'));
}

function downloadCSV() {
	var line = "", csvContents = "", title = Math.floor(Math.random() * 10000) + ".csv";
	
	//Set Header of CSV File
	for (var h = 0; h < $('tr').eq(0).children('th').length; h++) {
		if (h == $('tr').eq(0).children('th').length - 1)
			line += $('tr').eq(0).children('th').eq(h).text() + "\n";
		else
			line += $('tr').eq(0).children('th').eq(h).text() + ",";
	}
	csvContents = line;
	line = "";
	
	//Set Values of CSV File
	for (var i = 1; i < $('tr').length; i++) {
		for (var j = 0; j < $('tr').eq(i).children().length; j++) {
			if (j == $('tr').eq(i).children().length - 1) {
				if ($('tr').eq(i).children().eq(j).text().indexOf(',') > -1)
					line += "\"" + $('tr').eq(i).children().eq(j).text() + "\"\n";
				else
					line += $('tr').eq(i).children().eq(j).text() + "\n";
			} else {
				if ($('tr').eq(i).children().eq(j).text().indexOf(',') > -1)
					line += "\"" + $('tr').eq(i).children().eq(j).text() + "\",";
				else 
					line += $('tr').eq(i).children().eq(j).text() + ",";
			}
		}
		csvContents += line;
		line = "";
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
        var data = [], readyLine = "", fileText = evt.target.result.replace("'", "\'"), skip = 0, nextLine = false, line = "", quotesArray, quotesTemp, toInsert, quoteCount, commasLength, quotesLength, fixLine;
        
        for (var i = 0; i < fileText.split('\n').length - 1; i++) {
          fixLine = false;
          line = fileText.split('\n')[i];
                    	
          if ((line.match(/\"/g) || []).length % 2) {
          	alert("Invalid CSV format. Unpartnered (\") found in file.");
          	return;
          }
          for (var lineSort = 0; lineSort < line.length; lineSort++) {
          	if (line[lineSort].indexOf('"') > -1) {
          		fixLine = true;
          	}
          }
          if (!fixLine) { //There are no doublequotes in the line
          	data.push(line.split(','));
          } else { //There are doublequotes possibly wrapping a value
          	quotesArray = [], quotesTemp = [], toInsert = [], quoteCount = 1, quotesLength = line.split('"').length - 2; 
    		
    		for (var s = 0; s < quotesLength; s++) {
    		    quotesArray.push(line.split('"')[quoteCount]);
    		    quotesTemp.push(quotesArray[s].replace(/,/g, "{TEMPNAME}"));
	   	    line = line.replace(quotesArray[s], quotesTemp[s]);
   		    quoteCount += 2;
    		}
    
    		commasLength = line.split(',').length;
    
    		for (var c = 0; c < commasLength; c++) {
    		    toInsert.push(line.split(',')[c].replace(/{TEMPNAME}/g, ",").replace(/\"/g, "")); //"
    		}
    		data.push(toInsert);
     	  }
        }
        
        //console.log(data);
        $.ajax({
        	type: 'post',
        	url: '/s140630php/story/uploadCSV.php',
        	data: {'csv':data},
        	success: function (data) {
        		alert("Your CSV has been uploaded");
        		//console.log('CSV Uploaded \n\n\n' + data);
        	}
        });
      }
    };

    var blob = file.slice(start, stop + 1);
    reader.readAsBinaryString(blob);
}
</script>
</body>
</html>