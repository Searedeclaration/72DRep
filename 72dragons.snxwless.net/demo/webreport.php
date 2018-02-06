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
<link type="text/css" href="/scripts/graph/barchart.css" rel="stylesheet">
<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/scripts/graph/barchart.js"></script>
<style>
body {
  margin: 0;
  padding: 0;
  background: black;
  font-family: "Spectral SC", serif;
}

.sagaContainer {
  position: relative;
  width: 100%;
  display: flex;
  margin: 20px 0;
}
.saga {
  position: relative;
  width: 150px;
  height: 150px;
  padding: 5px;
  border: 2px #ad9440 solid;
  cursor: pointer;
  color: #ad9440;
  background: black;
  z-index: 10;
  text-align: center;
  font-size: 18px;
  display: table;
  margin: 20px auto;
  transition: margin 0.5s, height 0.5s, width 0.5s, border-color 0.25s, font-size 0.5s;
}
.saga:hover {
  width: 175px;
  height: 175px;
  margin: 7.5px auto;
  font-size: 24px;
}
.saga-active {
  width: 175px !important;
  height: 175px !important;
  margin: 7.5px auto !important;
  border-color: #800000 !important;
    font-size: 24px;
}
.text {
  display: table-cell;
  vertical-align: middle;
}

.epicContainer {
  width: 100px;
  height: 0px;
  margin: auto;
  margin-bottom: 50px;
  border: 1px #ad9440 solid !important;
  overflow: hidden;
  transition: width 0.5s, height 0.5s;
}
.hovered {
  width: 1000px !important;
}
.epic-show {
  height: auto;
}

.epic {
  width: 100%;
  height: auto;
  border-bottom: 1px #ad9440 solid;
}
.epic-title {
  height: 75px;
  width: 1000px;
  text-align: center;
  color: white;
  font-size: 24px;
  cursor: pointer;
  background: black;
  transition: background 0.5s, height 0.5s;
  display: table;
}
.epic-title > span {
  display: table-cell;
  vertical-align: middle;
  width: 1000px;
  transition: width 0.5s;
}
.epic-active, .epic-title:hover {
  background: rgba(128, 0, 0, 0.30);
  height: 160px;

}
.epic-active > span, .epic-title:hover > span {
  	width: 500px !important;
  	  height: 150px;
  	  overflow: auto;
}
hr {
	border-color: #ad9440;
}
.epic-side {
overflow: hidden;
width: 0px !important;
height: 0px;
    display: block !important;
    font-size: 18px;
    padding-top: 10px;
    
}
.epic-side-content {
width: 500px;
}
.storiesContainer {
  background: #1b1b1b;
  width: 100%;
  height: 0;
  overflow: hidden;
  transition: height 1s;
}
.story {
  width: 100%;
  display: table;
}
.table {
  display: table-cell;
  vertical-align: middle;
  text-align: center;
  color: #ad9440;
  min-width: 282px;
  height: 200px;
  padding: 25px;
  font-size: 18px;
}
.table:nth-child(even){
  background: #161616;
}
.story-percent {
  position: relative;
  overflow: auto;
  height: 200px;
  display: block;
  border-bottom: 1px #800000 solid;
}
.story-percent-bar {
width: 100%;
    height: 50px;
    position: relative;
}
.cover {
  position: relative;
  width: 0%;
  height: 100%;
  transition: width 1s;
  background-color: #800000;
}
.percent {
  position: absolute;
    top: 0;
    height: 49px;
    width: 100%;
    border: 1px #ad9440 solid;
    line-height: 50px;
}
.story-percent-ach {
width: 100%;
}
.story-todo {
  text-align: left;
  width: 400px;
}

.reportPageTitle {
  text-align: center;
  color: #ad9440;
  font-size: 36px;
  margin: 20px 0;
}
.dragon {
    position: absolute;
    width: 50px;
    height: 50px;
    background-image: url(http://72dragons.snxwless.net/images/dragon2.gif);
    background-size: 400%;
    background-position: 162px 126px;
    transform: rotateZ(-25deg);
    top: 30px;
    cursor: pointer;
    transition: left 2s, transform 2s;
}
.dragonDrop {
    position: absolute;
    width: 50px;
    height: 50px;
    background-image: url(http://72dragons.snxwless.net/images/dragon2.gif);
    background-size: 150%;
    background-position: center;
    transform: rotateZ(-25deg);
    top: 30px;
    cursor: pointer;
    transition: top 1s;
}
.flying {
    animation: flying 5s linear infinite;
}
@keyframes flying {
	10%{transform: rotateZ(-30deg);}
	30%{transform: rotateZ(-10deg);}
	50%{transform: rotateZ(-30deg);}
	70%{transform: rotateZ(-25deg);}
	90%{transform: rotateZ(-15deg);}
}
.dropDown {
position: absolute;
width: 150px;
height: 0;
border: 1px #ad9440 solid; 
border-top: none;
top: calc(100% + 2px);
left: calc(50% - 76px);
transition: height 1s;
background-color: black;
overflow: hidden;
font-size: 18px !important;
display: grid;
}
.dropDown span {
padding: 10px;
}
.drop {
height: 350px;
overflow: auto;
}

#dragonBox {
  z-index: 10000000000;
  width: 150px;
  height: 284px;
  position: fixed;
  left: 20px;
  bottom: 50px;
  animation: dragonfloat 2s linear infinite;
}
@keyframes dragonfloat {
  25% {
    bottom: 52.5px;
  }
  75% {
    bottom: 48.5px;
  }
  
}

#dragonBox-dragon {
  width: 100px;
  height: 100px;
  transform: rotate(-15deg);
  position: absolute;
  left: 25px;
  top: 0;

}
#dragonBox:after {
    content: '';
    position: absolute;
    z-index: 1000;
    transform: rotate(-15deg);
    background-position: 40% 70%;
    background-size: 1200%;
    border-radius: 2px;
    width: 10px;
    height: 10px;
    top: 66px;
    left: 66px;
  background-image: url(http://72dragons.snxwless.net/images/dragon5.gif);
}
#dragonBox-box {
  border: 1px #ad9440 solid;
  position: absolute;
  bottom: 0;
  width: 150px;
}
#dragonBox-box ul {
  list-style: none;
  text-align: center;
  margin: 0;
  padding: 0;
}
#dragonBox-box ul li {
  height: 25px;
  line-height: 25px;
  background: #1b1b1b;
  padding: 5px;
transition: background 0.5s;
  color: #ad9440;
  cursor: pointer;
}
#dragonBox-box ul li:hover {
  background: #161616;
}
</style>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/header.html';?>
<div class="reportPageTitle">Web Report</div>
<div class="sagaContainer">
<?php

	$sagaQuery = "SELECT pageID, page, type, description FROM webdevPage WHERE type = 'Saga'";
	  $sagaResult = mysqli_query($db,$sagaQuery);
  while($saga = mysqli_fetch_array($sagaResult)) {
  	$percent = 0;
	$count = 0;
	$total = 0;
  echo '<div class="dragon"></div><div class="saga saga-'.$saga[0].'"><div class="text">'.$saga[1].'</div><div class="dropDown">';
  $epicQuery = "SELECT pageID, page FROM webdevPage WHERE parent = '$saga[0]'";
	  $epicResult = mysqli_query($db,$epicQuery);
  	while($epic = mysqli_fetch_array($epicResult)) {
  	$storyQuery = "SELECT percentComplete FROM webdevPage WHERE parent = '$epic[0]'";
	  $storyResult = mysqli_query($db,$storyQuery);
  	while($story = mysqli_fetch_array($storyResult)) {
  		$percent += $story[0];
  		$count++;
  		
  	}
  	
  	}
  	if ($count != 0) {
  $total = floor($percent / $count);
  }
  echo '<span>'.$saga[3].'</span><span>'.$total.'% Complete</span></div></div><div class="dragonDrop"></div>';
  
  }
?>
</div>
<div class="epicContainer">
<?php
	$graphID = 0;
	$sagaQuery = "SELECT pageID FROM webdevPage WHERE type = 'Saga'";
	  $sagaResult = mysqli_query($db,$sagaQuery);
  while($saga = mysqli_fetch_array($sagaResult)) {
  	$epicQuery = "SELECT pageID, page, type, description FROM webdevPage WHERE parent = '$saga[0]'";
	  $epicResult = mysqli_query($db,$epicQuery);
  	while($epic = mysqli_fetch_array($epicResult)) {
  	echo '<div class="epic saga-'.$saga[0].'"><div class="epic-title"><span>'.$epic[1].'</span><span class="epic-side"><span class="epic-side-content">'.$epic[3].'<hr>';
  	
  	$percent = 0;
	$count = 0;
	$total = 0;
	$storyList = array(
		array(), //Name
		array(), //Percentage
		array(), //hasMockup
		array(), //hasWeb
		array(), //inProgress
		array(), //inDatabase
		array() //isComplete
	);
  	
  	$storyQuery = "SELECT percentComplete FROM webdevPage WHERE parent = '$epic[0]'";
	  $storyResult = mysqli_query($db,$storyQuery);
  	while($story = mysqli_fetch_array($storyResult)) {
  		$percent += $story[0];
  		$count++;
  	}
  	if ($count != 0) {
  $total = floor($percent / $count);
  }
  	echo $total.'% Complete</span></span></div><div class="storiesContainer">';
  	$storyQuery = "SELECT webdevPage.pageID, webdevPage.page, webdevPage.inProgress, webdevPage.isComplete, webdevPage.percentComplete, webdevAccomplishments.date, webdevAccomplishments.accomplishment, webdevComments.date, webdevComments.comment, webdevPage.hasMockup, webdevPage.hasWeb, webdevPage.inDatabase FROM webdevPage, webdevAccomplishments, webdevComments WHERE webdevPage.parent = '$epic[0]' AND webdevAccomplishments.pageID = webdevPage.pageID AND webdevComments.pageID = webdevPage.pageID";
	  $storyResult = mysqli_query($db,$storyQuery);
  	while($story = mysqli_fetch_array($storyResult)) {
  	if ($story[2] == 1) {
  	$progress = 'In Progress<br>Due 2018/01/18<br>Assigned: David Moreno';
  	} else if ($story[3] == 1) {
  	$progress = 'Completed<br>Finished 2018/01/18<br>Submitter: David Moreno';
  	} else {
  	$progress = 'Pending';
  	}
  	array_push($storyList[0], $story[1]);
  	array_push($storyList[1], $story[4]);
  	array_push($storyList[2], $story[9]);
  	array_push($storyList[3], $story[10]);
  	array_push($storyList[4], $story[2]);
  	array_push($storyList[5], $story[11]);
  	array_push($storyList[6], $story[3]);
  	echo '<div class="story"><div class="table story-title">'.$story[1].'</div><div class="table story-status">'.$progress.'</div><div class="table story-percent"><div class="story-percent-bar"><div class="cover"></div><div class="percent">'.$story[4].'%</div></div><br><div class="story-percent-ach"><u>Latest Accomplishment:</u> '.$story[6].' ('.$story[5].')</div><br><div class="story-percent-com"><u>Latest Comment:</u> '.$story[8].' ('.$story[7].')</div></div></div>';

  	}
  	  	echo '</div><div id="graphID'.$graphID.'" class="graph"></div></div>';
  		$numOfStories = count($storyList[0]);
  		echo '<script type="text/javascript">var y = ["'.$storyList[0][0].'"';
for($x = 1; $x < $numOfStories; $x++) {
    echo ', "'.$storyList[0][$x].'"';
}
  		echo '], x = [0, 100], data = [['.$storyList[1][0];
  		
  		for($x = 1; $x < $numOfStories; $x++) {
    echo ', '.$storyList[1][$x];
}
  		
  		echo ']], labels = [["% Complete", "linear-gradient(#FEA3A5, #D84849)"]';
  			
  		echo ']; graph("graphID'.$graphID++.'", x, y, 10, data, labels);</script>'; /*Test*/

  }
  }
?>
</div>


<div id="dragonBox">
<img id="dragonBox-dragon" src="http://72dragons.snxwless.net/images/dragon5.gif">
  <div id="dragonBox-box">
    <ul>
      <li onclick="loadGraph('percent', '% Complete')" id="active">% Complete</li>
      <li onclick="loadGraph('mockup', 'Has Mockup')">Has Mockup</li>
      <li onclick="loadGraph('web', 'Has Web Page')">Has Web Page</li>
      <li onclick="loadGraph('progress', 'In Progress')">In Progress</li>
      <li onclick="loadGraph('database', 'In Database')">In Database</li>
      <li onclick="loadGraph('complete', 'Is Complete')">Is Complete</li>
    </ul>
  </div>
</div>

<script type="text/javascript">

function loadGraph(choice, title) {
	$.ajax({
		type: 'post',
		url: '/s140630php/updateGraph.php',
		data: {'choice':choice},
		success: function (data) {
		var data = JSON.parse(data);
			for (var i = 0; i < data[1].length; i++) {
				if (choice == 'percent') {
					$('.graph-area-bar').eq(i).css('width', data[1][i] + '%').attr('data-city', title).attr('data-value', data[1][i]);
					$('.graph-x').empty()
					
					for (var j = 10; j < 101; j += 10)
    						$('.graph-x').append('<span>' + j + '</span>');
				} else {
					$('.graph-area-bar').eq(i).css('width', (data[1][i] * 100) + '%');
					$('.graph-area-bar').eq(i).attr('data-value', '');
					if (data[1][i] == 0) {
						switch (choice) {
							case 'mockup':
								$('.graph-area-bar').eq(i).attr('data-city', 'Does Not Have Mockup');
							break;
							case 'web':
								$('.graph-area-bar').eq(i).attr('data-city', 'Does Not Have Web Page');
							break;
							case 'progress':
								$('.graph-area-bar').eq(i).attr('data-city', 'Is Not In Progress');
							break;
							case 'database':
								$('.graph-area-bar').eq(i).attr('data-city', 'Is Not In Database');
							break;
							case 'complete':
								$('.graph-area-bar').eq(i).attr('data-city', 'Is Not Complete');
							break;
						}
					} else {
						$('.graph-area-bar').eq(i).attr('data-city', title);
					}
					$('.graph-x').empty()
					for (var j = 0.5; j < 1.5; j+= 0.5)
    						$('.graph-x').append('<span>' + j + '</span>');
				}
			}
		}
	});
}


function loadReports(saga) {
$('.epic').each(function () {
	if ($(this).hasClass(saga))
		$(this).show();
	else
		$(this).hide();
});
}

function loadPercent(tab) {
  $(tab).find('.story-percent').each(function () {
    $(this).find('.cover').css('width', $(this).find('.percent').text());
  });
}

$(document).ready(function () {    
    $('.saga').click(function () {
  if (!$(this).hasClass('saga-active')) {
  $('.saga-active').toggleClass('saga-active');
    $('.epicContainer').addClass('epic-show');
    loadReports($(this).attr('class').split(' ')[1]);
  } else {
    $('.epicContainer').removeClass('epic-show');
  }
    $(this).toggleClass('saga-active');
}).mouseover(function () {
  if(!$('.epicContainer').hasClass('hovered'))
  $('.epicContainer').toggleClass('hovered');
}).mouseout(function() {
  if ( !$( ".saga-active" ).length )
 $('.epicContainer').toggleClass('hovered');
});


$('.epic-title').click(function () {
  $('.epic-active').parent().find('.storiesContainer').css('height', '0px');
  if (!$(this).hasClass('epic-active')) {
  $('.epic-active').toggleClass('epic-active');
  var storyCount = $(this).parent().find('.storiesContainer').children().length;
  $(this).parent().find('.storiesContainer').css('height', (250 * storyCount) + "px");
    loadPercent($(this).parent());
  }
    $(this).toggleClass('epic-active');
});
  
  $('.dragon').click(function () {
  	$(this).css({
  	'left': '+=50',
  	'transform': 'rotateZ(0deg)'
  	});
  	var dragon = $('.dragon').index(this);
  	console.log(dragon);
  	setTimeout(function () {
  	$('.dragonDrop').eq(dragon).css('top', '+=500');
  	$('.dragonDrop').eq(dragon).toggleClass('flying');
  	$('.dropDown').eq(dragon).toggleClass('drop');
  	}, 1000);
  }).each(function () {
  	$(this).css('left', ((100 / $('.saga').length) * $('.dragon').index(this)) + '%');
  });
  
    $('.dragonDrop').click(function () {
  	$(this).css({
  	'top': '-=500',
  	});
  	$(this).toggleClass('flying');
  	var dragon = $('.dragonDrop').index(this);
  	$('.dropDown').eq(dragon).toggleClass('drop');
  	setTimeout(function () {
  	$('.dragon').eq(dragon).css({
  	'left': '-=50',
  	'transform': 'rotateZ(-25deg)'
  	});
  	}, 1000);
  }).each(function () {
  	$(this).css('left', (((100 / $('.saga').length) * $('.dragonDrop').index(this)) + 6) + '%');
  });

});
</script>
</body>
</html>