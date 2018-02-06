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
  background: black;
    font-family: "Spectral SC", serif;
}

a {
  text-decoration: none;
}

#content-container {
  width: 100%;
  height: 100%;
  position: absolute
}

#user-display {
    width: calc(100% - 284px);
    height: 100%;
    float: right;
}
.user {
  display: inline-block;
  width: 250px;
  height: 300px;
  background-color: #1b1b1b;
  border: 2px #ad9440 solid;
  margin: 29px;
  padding: 10px;
  font-size: 18px;
  color: #ad9440;
  cursor: pointer;
  transition: background 0.5s;
}
.user:hover {
  background: #161616;
}
.user-top {
  text-align: center;
  width: 250px;
  height: 200px;
}
.user-top-photo {
  width: 150px;
  height: 150px;
  margin: auto;
  background-size: 100%;
  background-position: center;
  margin-bottom: 10px;
}
.user-bottom {
  display: grid;
  grid-template-columns: auto auto;
  font-size: 15px;
}
.item-number {
  text-align: right;
}

#report {
  position: fixed;
  width: 100%;
  height: 100%;
  z-index: 10;
  background: #1b1b1b;
  top: -100%;
  transition: top 1s;
    color: white;
}
#dragon {
  position: absolute;
  z-index: 11;
  width: 100px;
  height: 100px;
  bottom: calc(-100% - 100px);
  background-image: url(http://72dragons.snxwless.net/images/dragon2.gif);
  background-position: center;
  background-size: cover;
  left: calc(50% - 50px);
  transition: bottom 2s;
}


#report-bar {
  height: 50px;
  width: 100%;
  position: sticky;
  top: 0;
  z-index: 100;
  background: maroon;
  border-bottom: 3px #5A0000 solid;
  display: flex;
}
#report-bar-profile {
  width: 20%;
  height: 100%;
  display: flex;
}
#report-bar-profile-photo {
  width: 40px;
  height: 40px;
  margin: 3px;
  background-size: cover;
  background-position: center;
  border: 2px #5A0000 solid;
}
#close {
  height: 50px;
  width: 50px;
  position: absolute;
  right: 0;
  cursor: pointer;
}
#close:before {
  content: '';
  position: absolute;
  width: 50px;
  height: 5px;
  top: 23px;
  transform: rotate(45deg);
  background: #5A0000;
}
#close:after {
  content: '';
  position: absolute;
  width: 50px;
  height: 5px;
  top: 23px;
  transform: rotate(-45deg);
  background: #5A0000;
}
#close:hover:before, #close:hover:after {
  background: #C53333;
}
#report-nav {
  position: absolute;
    width: 600px;
    left: calc(50% - 300px);
}
#report-nav ul {
  display: flex;
    list-style: none;
    text-align: center;
    margin: auto;
      padding: 0;
    height: 50px;
}
#report-nav ul li {
    width: 200px;
  background: maroon;
  cursor: pointer;
  transition: background 0.5s;
}
#report-nav ul li:hover {
  background: #A21616;
}
#report-nav ul #active {
  background: #5A0000;
}
#report-slide {
  display: flex;
  height: calc(100% - 53px);
  width: 300%;
  left: 0;
  position: relative;
  transition: left 1s;
}
.slide {
  height: 100%;
  width: 100%;
  display: grid;
  grid-template-columns: 70% 30%;
}
.slide-box {
  border: 2px #161616 solid;
}
.slide-box-title {
  color: #ad9440;
    background: #161616;
    font-size: 20px;
    padding: 3px;
    padding-left: 10px;
}







#sidebar {
    background: #161616;
    height: 100%;
    width: 284px;
    position: fixed;
    top: 0;
    border-right: 1px #ad9440 solid;
    left: 0;
}
#header {
  
}
nav {
  height: 0;
  width: 100%;
  overflow: hidden;
  background: white;
  transition: height 0.5s;
}
.nav-box {
  height: 50px;
  width: 100%;
  background: #5A0000;
  border-bottom: 1px black solid;
  color: white;
  font-size: 24px;
  text-align: center;
  line-height: 50px;
  transition: background 0.5s;
}
.nav-box:hover {
  background: #800000;
}
#header:hover nav {
  height: 204px;
}
#header-title {
  color: #ad9440;
  font-size: 45px;
  background: black;
  padding: 5px;
  text-align: center;
}
#header-title span {
  color: #800000;
}


.userReport {
	width: 2500px;
	border-collapse: collapse;
}
.userReport th, .userReport td {
    border: 1px solid #ad9440;
    padding: 5px;
}
</style>
</head>
<body>
<div id="report">
  <div id="report-bar">
    <div id="report-bar-profile">
      <div id="report-bar-profile-photo"></div>
      <div id="report-bar-profile-name"></div>
      <div id="report-nav">
        <ul>
          <li>Weekly Report</li>
          <li>Achievements & Milestones</li>
          <li>Issues & Risks</li>        
          </ul>
      </div>
      <div id="close"></div>
    </div>
  </div>
      <div id="report-slide">
        <div class="slide" style="overflow: auto;">
          <table class="userReport">
          	<tr>
    			<th>Project</th>
    			<th>Category</th>
    			<th>Software / Product / Other</th>
    			<th>New Project</th>
    			<th>Planned for the Week</th>
    			<th>Story</th>
    			<th>Task</th>
    			<th>Time Allowance</th>
    			<th>Assigned Person</th>
    			<th>Target Deliverable</th>
    			<th>Actual Date</th>
    			<th>On Time</th>
    			<th>Completed</th>
    			<th>Needs More Work</th>
    			<th>Accomplishment</th>
    			<th>Key Accomplishment</th>
    			<th>Comment</th>
    			<th>Estimated Story Points</th>
    			<th>Actual Story Points</th>
    			<th>Completeness Score (%)</th>
          	</tr>
          </table>
        </div>
        <div class="slide">
        
          <div class="report-list slide-box">
            <div class="slide-box-title">Top Achievements This Week</div>
          </div>
          <div class="report-graph slide-box"></div>
          <div class="report-list slide-box"><div class="slide-box-title">Top Milestones</div></div>
          <div class="report-graph slide-box"></div>
        </div>
        <div class="slide">
          <div class="report-list slide-box">
            <div class="slide-box-title">Issues</div>
          </div>
          <div class="report-graph slide-box"></div>
          <div class="report-list slide-box">
            <div class="slide-box-title">Risks</div>
          </div>
          <div class="report-graph slide-box"></div>
        </div>
  </div>
  <div id="dragon"></div></div>
<div id="content-container">
<div id="sidebar">
  <div id="header">
    <a href="/"><div id="header-title"><span>72</span> Dragons</div></a>
    <nav>
      <a href="/production/default.php"><div class="nav-box">Production</div></a>
      <a href="/community/bubble.php"><div class="nav-box">Community</div></a>
      <a href="/about/default.php"><div class="nav-box">About</div></a>
      <a href="#"><div class="nav-box">Shop</div></a>
    </nav>
    
  </div>
  <div id="filter">
    
  </div>
</div>


<div id="user-display"></div>
</div>
<script type="text/javascript">
var names = ['David Alejandro Moreno', 'Sanders Aparicio', 'Antonio Ho', 'Hilda Aparicio Sierra', 'Jose Pietro Aparicio', 'Jason Wieder'], pics = ['https://scontent-hkg3-1.xx.fbcdn.net/v/t1.0-9/23916065_10214470529267277_8355945035951033926_n.jpg?oh=7add3c094fded96b84cf24e2be948d30&oe=5AF54A79', 'https://cinando.com/en/People/Image/357359', 'http://72dragons.snxwless.net/images/dragons/3.jpeg', 'http://72dragons.snxwless.net/images/dragons/1.jpeg', 'https://cinando.com/en/People/Image/77874', 'http://72dragons.snxwless.net/images/dragons/5.jpeg'], random = [];

for (var i = 0 ; i < names.length; i++) {
  
  random = [Math.floor(Math.random() * 7), Math.floor(Math.random() * 7), Math.floor(Math.random() * 7), Math.floor(Math.random() * 7)];
  
  $('#user-display').append('<div class="user"><div class="user-top"><div class="user-top-photo"></div><div class="user-top-name"><u>'+names[i]+'</u></div></div><div class="user-bottom"><div class="user-bottom-item">Key Achievements This Week</div><div class="user-bottom-item item-number">'+random[0]+'</div><div class="user-bottom-item">Top Milestones</div><div class="user-bottom-item item-number">'+random[1]+'</div><div class="user-bottom-item">Issues</div><div class="user-bottom-item item-number">'+random[2]+'</div><div class="user-bottom-item">Risks</div><div class="user-bottom-item item-number">'+random[3]+'</div></div></div>');
  $('.user-top-photo').eq(i).css('background-image', 'url('+pics[i]+')');
  
}

$('.user').click(function () {
    
    $.ajax({
    	type: 'post',
    	url: '/s140630php/assignments/loadUserWeeklyReport.php',
    	data: {'user':'David Moreno', 'date':'February 2nd'},
    	success: function (data) {
    		data = JSON.parse(data);
    		$('#report-slide .userReport').append('<tr><td></td> </tr>');
    	}
    });
    
    
    $('#report-bar-profile-photo').css('background-image',  $(this).find(".user-top-photo").css("background-image"));
    
$('#report-bar-profile-name').text($(this).find(".user-top-name").text());
    
    
    
    //show the report
    $('#dragon').css('bottom', '-30px' );
    setTimeout(function () {
      $('#dragon').css('bottom', '-100px' );
      $('#report').css('top', '0px' );
      $('body').css('overflow', 'hidden');
    }, 2000);
  });


$('#close').click(function () {
  $('#dragon').css('bottom', '-30px');
  $('#report').css('top', '-100%');
  setTimeout(function () {
      $('#dragon').css('bottom', '-150%' );
      $('body').css('overflow', 'auto');
    }, 1000);
});






$('#report-nav ul li').click(function () {
  $('#report-slide').css('left', (-100 * $('#report-nav ul li').index(this)) + '%');
});
</script>
</body>
</html>