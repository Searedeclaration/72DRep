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
<meta name="viewport" content="width=device-width, height=device-height">
<link href="https://fonts.googleapis.com/css?family=Spectral+SC:300" rel="stylesheet">
<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<style>
body {
  padding: 0;
  margin: 0;
  font-family: "Spectral SC", serif;
  background: black;
}

.graph-x {
  grid-area: x;
  display: inline-flex;
}
.graph-x span {
  margin-left: auto;
  width: 0;
}
.graph-x span:after {
  content: '';
  position: absolute;
  border-right: 1px #1b1b1b solid;
  height: 100%;
  top: -20px;
}
.graph-y {
  display: inherit;
  grid-area: y;
}
.graph-y span {
  text-align: right;
  padding-right: 10px;
  margin: 20px 0;
}
.graph-area {
  border-bottom: 2px #1b1b1b solid;
  border-left: 2px #1b1b1b solid;
  grid-area: graph;
  display: grid;
}
.graph-area-barcontainer {
  display: flex;
  margin: 20px 0;
}
.graph-area-bar {
  position: relative;
  height: 25px;
  border-top: 1px gray solid;
  border-bottom: 1px gray solid;
  cursor: pointer;
  transition: filter 0.5s;
}
.graph-area-bar:hover {
  filter: brightness(125%);
}
.graph-area-popup {
    position: absolute;
    width: 100px;
    height: 50px;
    background: #1b1b1b;
    border: 2px #ad9440 solid;
    border-radius: 10px;
  z-index: 1000;
  display: none;
  text-align: center;
  top: 0;
  overflow: hidden;
  transition: width 1s, height 1s, top 1s, left 1s;
}
.graph-area-popup:before {
content: '';
    position: absolute;
    left: -8px;
    top: 18px;
    width: 10px;
    height: 10px;
    transform: rotate(45deg);
    background: #1b1b1b;
    border-bottom: 2px #ad9440 solid;
    border-left: 2px #ad9440 solid;
}
.popup-keep {
  display: block !important;
  border-radius: 0 !important;
  border: 0;
  width: 1000px !important;
  height: calc(100% - 101px) !important;
  position: fixed !important;
  top: 101px !important;
  left: calc(50% - 500px) !important;
  overflow: auto !important;
}
.popup-keep .close {
	width: 49px;
	height: 49px;
	position: absolute;
	top: 0;
	left: 0;
	cursor: pointer;
}
.popup-keep .close:before {
content: '';
    position: absolute;
    width: 50px;
    height: 5px;
    top: 23px;
    left: 0;
    transform: rotate(45deg);
    background: #ad9440;
}
.popup-keep .close:after {
content: '';
    position: absolute;
    width: 50px;
    height: 5px;
    top: 23px;
    left: 0;
    transform: rotate(-45deg);
    background: #ad9440;
}
.popup-keep .popup-title {
  font-size: 32px;
  background-color: #161616;
}
.popup-keep .popup-eventlist {
  width: 1000px;
  display: inline-block;
}
.event {
 margin: 20px 41px;
    width: 240px;
    height: 300px;
    display: inline-block;
    border: 5px #161616 solid;
}
.graph-labels {
  grid-area: label;
  display: table;
}
.graph-labels-box {
  display: table-cell;
  vertical-align: middle;
}
.graph-labels-box ul {
  list-style: none;
}
.graph-labels-box ul li {
  display: flex;
}
.graph-labels-box ul li div {
    width: 12px;
    height: 12px;
    position: relative;
    border: 1px gray solid;
    margin: 6px;
}
.graph-extra {
  grid-area: dontuse;
}

.graph {
  width: 100%;
  height: 100%;
  /*max-height: 600px;
  max-width: 1000px;*/
  overflow: hidden;
  position: relative;
  display: grid;
  color: #ad9440;
  grid-template-areas:'y graph graph graph label' 'y graph graph graph label' 'y graph graph graph label' 'y graph graph graph label' 'dontuse x x x label';
}


.choicebar {
height: 50px;
width: 100%;
background: #800000;
border-bottom: 3px #580000 solid;
display: flex;
color: #ad9440;
}
.choicebar-dropDown {
    width: 12.5%;
    border-right: 3px #580000 solid;
    position: relative;
}
.choicebar-dropDown:hover .dropDown-Container {
	height: 200px;
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
.submit {
width: 100px;
    background: #800000;
    font-size: 18px;
    color: #ad9440;
    border: 0;
    padding: 0;
    cursor: pointer;
    font-family: "Spectral SC", serif;
    border-right: 3px #580000 solid;
    transition: background 0.5s;
}
.submit:hover {
	background: black;
}
.submit:focus {
  outline: none;
}
</style>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/header.html';?>
<div class="choicebar">
</div>
<div class="graph" id="graphThis">Please allow javascript to view this graph</div>

<script type="text/javascript">
function graph(graphID, x, y, increment, data, labels) {
  graphID = '#' + graphID;
  createGraph(graphID);
  addAxis(graphID, x, y, increment);
  //addLabel(graphID, labels);
  addData(graphID, data, labels, x[1]);
}

function createGraph(graphID) {
  $(graphID).html('<div class="graph-x"></div><div class="graph-y"></div><div class="graph-area"><div class="graph-area-popup"></div></div><div class="graph-labels"><div class="graph-labels-box"><ul></ul></div></div><div class="graph-extra"></div>');
}

function addAxis(graphID, x, y, increment) {
  for (var i = increment; i < x[1]+1; i += increment)
    $(graphID + ' .graph-x').append('<span>' + i + '</span>');
 
    for (var j = 0; j < y.length; j++)
    $(graphID + ' .graph-y').append('<span>' + y[j] + '</span>');
}

function addLabel(graphID, labels) {
  for (var i = 0; i < labels.length; i++) {
    $(graphID + ' .graph-labels-box ul').append('<li><div style="background: ' + labels[i][1] + '"></div>' + labels[i][0] + '</li>');
  }
}

function addData(graphID, data, labels, limit) {
  for (var i = 0; i < data[0].length; i++) {
    $(graphID + ' .graph-area').append('<div class="graph-area-barcontainer"></div>');
    for (var j = 0; j < data.length; j++) {
      $(graphID + ' .graph-area-barcontainer').eq(i).append('<div style="background: ' + labels[j][1] + '; width: ' + (data[j][i] / limit) * 100 + '%" data-city="' + labels[j][0] + '" data-value="' + data[j][i] +'" class="graph-area-bar"></div>');
    }
  }
  
  $(graphID + ' .graph-area-bar').mouseover(function () {
    $(graphID + ' .graph-area-popup').css({
      'left': $(this).width() + $(this).offset().left + 10,
      'top': $(this).offset().top - 13.5 - 154
    }).show().html('<div class="close"></div><div class="popup-title">' + $(this).attr('data-city') + '</div><div class="popup-value">' + $(this).attr('data-value') + '</div><div class="popup-eventlist"></div>');
      $('.close').click(function () { 
  $('.popup-keep').toggleClass('popup-keep');
  });
    for (var i = 0; i < $(this).attr('data-value'); i++) {
      $(graphID + ' .popup-eventlist').append('<div class="event">87 North Lane<br> ' + $(this).attr('data-city') + '<br>' + $(this).attr('data-value') + ' attendees<br>Community Sponser: Nike<br>Date: 01/02/18<br>Additional information about event here</div>');
    }
  }).mouseout(function () {
    $(graphID + ' .graph-area-popup').hide();
  }).click(function () {
    $(graphID + ' .graph-area-popup').toggleClass('popup-keep').find('.popup-value').append(' events');
  });
  
  

}

function searchResults() {
	var option = [], yaxis = [], colors = [['#9ED1F7', '#4B89C9'],['#FEA3A5', '#D84849'],['#E1F8AE', '#A0CC62'], ['#CCB6E3', '#8963AD'],['#90F6F9', '#47B6CC'],['#FEA3A5', '#D84849'],['#E1F8AE', '#A0CC62']];
	for (var i = 0; i < $('.choicebar-dropDown').length; i++) {
		if ($('.choicebar-dropDown').eq(i).attr('data-choice') && $('.choicebar-dropDown').eq(i).attr('data-choice') != 'All')
			option[i] = $('.choicebar-dropDown').eq(i).attr('data-choice');
	}
	if (typeof option[0] == 'undefined' )
		yaxis.push(['Award'],['Business Meeting'],['Celebration'],['Festival'],['Party'],['Product launches'],['Training'],['Work Session']);
	else
		yaxis.push(option[0]);
	$.ajax({
		type: 'post',
		url: '/s140630php/dropDownOption.php',
		data: {"choice":option},
		success: function(data) {
			var data = JSON.parse(data);
			console.log(data);
			var x = [0, data.length], points=[[]], labels=[[]];
			for (var i = 0; i < data.length; i++) {
				//Searches labels to add
				for (var l = 0; l < labels.length; l++) {
					if (data[i].city == labels[l][0]) {
						if (points[l]) {
							for (var t = 0; t < yaxis.length; t++) {
								if (data[i].eventType == yaxis[t]) {
									points[l][t]++;
									break;
								}
							}
						} else 
							for(var p = 0; p < yaxis.length; p++){
								if (data[i].eventType == yaxis[p])
								points[l][p] = 1;
								else
								points[l][p] = 0;
							}
							break;
					} else {
						if (l == labels.length - 1) {
							labels[l+1] = [];
							labels[l+1][0] = data[i].city;
							labels[l+1][1] = 'linear-gradient(' + colors[l][0] + ',' + colors[l][1] + ')';
							points[l+1] = [];
							for(var p = 0; p < yaxis.length; p++) {
								points[l+1][p] = 0;
							}
						}
					}
						
				}
			}
			points.shift();
			labels.shift();
			graph('graphThis', x, yaxis, 2, points, labels);
			
		}
	});
}

function dropDownClick(dropDown, option, category) {
	dropDown = dropDown.parent().parent();
	dropDown.find('.dropDown-Face').text(option);
	dropDown.attr('data-choice', option);
}

function newDropDown(category, title) {
	$('.choicebar').append('<div class="choicebar-dropDown" id="' + category + '"></div>');
	var dropDown = $('.choicebar-dropDown').last();
 	dropDown.html('<div class="dropDown-Face"></div><div class="dropDown-Container"></div>');
 	dropDown.find('.dropDown-Face').text(title);
 	$.ajax({
		type: 'post',
		url: '/s140630php/dropDownSecond.php',
		data: {"choice":category},
		success: function(data) {
			var data = JSON.parse(data);
			data.unshift(['All'])
			for (var i = 0; i < data.length; i++) {
				dropDown.find('.dropDown-Container').append('<div onclick="dropDownClick($(this), $(this).text(), \'' + category + '\')" class="dropDown-option">' + data[i][0]+ '</div>');
			}
		}
	});
}

function createDropDowns(dropDownArray) {
for (var i = 0; i < dropDownArray.length; i++) {
	newDropDown(dropDownArray[i][0], dropDownArray[i][1]);
}
$('.choicebar').append('<button class="submit" onclick="searchResults()">Create Report</button>');
}

$(document).ready(function () {

var dropDownMain = [['eventType', 'Event Type'],['community', 'Community'],['city', 'City'],['state', 'State/Region'],['country','Country'],['communitySponsor', 'Sponsor']];
createDropDowns(dropDownMain);


  var y = ['Celebration', 'Product Launches', 'Award'], x = [0, 50], data = [[10, 3, 25], [27, 13, 1], [10, 33, 8]], labels = [['New York', 'linear-gradient(#9ED1F7, #4B89C9)'], ['London', 'linear-gradient(#FEA3A5, #D84849)'], ['Hong Kong', 'linear-gradient(#E1F8AE, #A0CC62)']];
  graph('graphThis', x, y, 5, data, labels);
});
</script>
</body>
</html>