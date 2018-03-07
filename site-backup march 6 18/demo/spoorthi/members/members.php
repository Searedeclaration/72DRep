<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Members - 72 Dragons</title>
<meta name="viewport" content="width=device-width, height=device-height">
<link rel="stylesheet" type="text/css" href="main.css">
<link href="https://fonts.googleapis.com/css?family=Spectral+SC:300" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<!--<script type="text/javascript" src="default.js"></script>-->
<script type="text/javascript" src="members.js"></script>
</head>
<body>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>72 Dragons</title>
<meta name="viewport" content="width=device-width, height=device-height">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link href="https://fonts.googleapis.com/css?family=Spectral+SC:300" rel="stylesheet">
<link href="members.css" rel="stylesheet">
<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
  setTimeout(function () {
      $('#uncover').animate({
    width: "100%"
  }, 1000);
  }, 500);
  setTimeout(function () {
    $('#fontred').css({
      color: "maroon"
    });
    $('#title').css({
      color: "#ad9440"
    });
    $('#uncover').css({
      opacity: "0"
    });
    $('nav ul li').css({
      opacity: "1"
    });
    $('#icon').css({
      opacity: "1"
    });
    $('footer').css({
      opacity: "1"
    });
    $('header').css({
      'border-bottom': "1px rgb(173, 148, 64) solid"
    });
  }, 1500);
  </script>
  <style>
a {
  text-decoration: none;
  transition: color 0.5s;
}
a:hover {
  color: maroon;
}

header {
  position: sticky;
  width: 100%;
  height: 100px;
  display: flex;
  line-height: 100px;
  transition: border-bottom 0.5s;
  top: 0;
  background: #000000;
  z-index: 999999;
}
#uncover {
  position: absolute;
  height: 100px;
  width: 0%;
  background: white;
  opacity: 1;
  transition: opacity 0.5s;
}
#titleCon {
  overflow: hidden;
}
#title {
  position: absolute;
  z-index: 5;
  font-size: 75px;
  color: black;
  transition: color 0.5s;
}
#fontred {
  color: black;
  transition: color 0.5s;
}
#icon {
  width: 100px;
  height: 100px;
  background-image: url(https://cinando.com/img/company/1010924.jpg?width=283&height=283&404=noimg_company.png);
  background-position: center;
  background-size: 125%;
  filter: invert(1) hue-rotate(180deg);
  opacity: 0;
  transition: opacity 0.5s;
}
nav {
  position: absolute;
  right: 10px;
  font-size: 24px;
  height: 100%;
  line-height: 50px;
}
nav ul {
  list-style: none;
  display: flex;
}
nav ul li {
  margin: 0 10px;
  color: #fff;
  opacity: 0;
  transition: opacity 0.5s;
}
nav ul li a {
  color: white;
  text-decoration: none;
  transition: color 0.4s;
}
nav ul li a:hover {
  color: maroon;
}
container.btn:hover{
	background-color: black;
    color: white;
}

body {
  margin: 0;
  padding: 0;
  background-color: black;
  font-family: "Spectral SC", serif;
  overflow-x: hidden;
}

button, input[type=submit] {
    border: none;
    background: #1b1b1b;
    color: white;
    margin-right: 5px;
    padding: 10px;
    font-size: 12px;
    transition: background 0.5s;
    cursor: pointer;
	font-family: "Spectral SC", serif;
}
input[type=submit] {
width: 200px;
margin: auto !important;
font-size: 16px;
height: 44px;
margin-left=43px;
}
button:hover, input[type=submit]:hover {
  background: maroon;
}
button:active, input[type=submit]:active {
  background: #A21616;
}

#container {
  position: relative;
  width: 1000px;
  height: auto;
  margin: auto;
  border-right: 5px #343436 solid;
  border-left: 5px #343436 solid;
}

#dropDown {
  display: none;
  position: fixed;
  left: calc(50% - 300px);
  top: 110px;
  width: 600px;
  height: 550px;
  z-index: 100000000;
  background-color: black;
  transition: top 0.5s;
}
#photoCon {
    width: 100%;
    padding: 10px 0;
    overflow: auto;
    height: 325px;
    background: #161616;
    border-bottom: 5px #343436 solid;
    transition: padding 0.5s, height 0.5s;
}
.member-bar {
    width: 560px;
    margin: auto;
    display: flex;
    margin-bottom: 10px;
    padding: 10px;
    height: 100px;
    background: #1b1b1b;
    border: 2px #800000 solid;
    cursor: pointer;
    transition: border-color 0.5s, border-width 0.5s;
}
.member-bar:hover {
	border-color: #ad9440;
}
.member-bar-photo {
    height: 100%;
    width: 100px;
    background-position: center;
    background-size: cover;
}
.member-bar-name {
    font-size: 24px;
    padding: 3px 10px;
    color: #ad9440;
}
#member-active {
	border-color: #ad9440 !important;
	border-width: 5px !important;
}
#photo {
  display: block;
  margin: 0 auto;
  height: 100%;
  max-width: 100%;
}
#infoCon {
  width: 100%;
  height: 150px;
}
#member {
  padding: 10px;
  display: flex;
}
#left {
  width: 80%;
}
#right {
  width: 20%;
  position: relative;
}
#member input {
  width: 400px;
  margin: 5px 0;
}
#memberButtons {
	display: flex;
}
.addVideo {
  position: relative;
  width: 100px !important;
  height: 100px;
  border: 1px #343436 dashed;
  color: #343436;
  cursor: pointer;
  margin-left:43px;
}

.addVideo span {
  position: absolute;
  width: 100%;
  bottom: 5px;
  text-align: center;
}
.addVideo:before {
  content: '';
  position: absolute;
  width: 50px;
  border: 2px #343436 solid;
  left: calc(50% - 26px);
  top: 35px;
  transition: border-color 0.5s;
}
.addVideo:after {
  content: '';
  position: absolute;
  height: 50px;
  border: 2px #343436 solid;
  left: calc(50% - 1px);
  top: 10px;
  transition: border-color 0.5s, transform 0.25s;
}
.addVideo:hover:before, .addVideo:hover:after {
  border-color: maroon;
}

.photoList {
	    display: -webkit-box;
    overflow: auto;
    width: 910px;
}
.preview {
    background-position: center;
    background-size: cover;
    border: 1px #ad9440 solid;
    margin: 0px 10px;
    width: 100px;
    position: relative;
}
.member-drop {
    height: 90px;
    width: 90px;
    position: absolute;
    background: #1b1b1b;
    color: #ad9440;
    padding: 5px;
    text-align: center;
    margin: auto;
    opacity: 0;
    top: -1px;
    border: 1px #ad9440 solid;
    border-left: 0;
    z-index: 100000;
    transition: opacity 0.5s, left 0.5s;
    left: 0;
}
.preview:hover .member-drop {
	left: 100px;
	opacity: 1;
}
.poster {
display: table;
    color: #ad9440;
    text-align: center;
}
.poster-view {
    height: 76px;
    display: table-cell;
    vertical-align: middle;
    background: rgba(27, 27, 27, 0.85);
    opacity: 0;
    transition: opacity 0.5s, background 0.5s;
}
.poster-remove {
    display: table-row-group;
    background: rgba(128, 0, 0, 0.85);
    opacity: 0;
    transition: opacity 0.5s, background 0.5s;
}
.preview:hover .poster-view, .preview:hover .poster-remove {
	opacity: 1;
	    cursor: pointer;
}
.poster-view:hover {
    background: rgba(27, 27, 27, 1);
}
.poster-remove:hover {
    background: rgba(128, 0, 0, 1);
}
#memberAddPhoto {
  display: none;
  margin-bottom: 10px;
}

#dropDownCover {
  top: 0;
  display: none;
  position: fixed;
  width: 100%;
  height: 100%;
  background: black;
  opacity: 0.9;
  z-index: 10000000;
}

.section {
  padding: 10px 0;
}



.title {
  display: block;
  margin: 10px 45px;
  color: rgb(173, 148, 64);
  font-size: 36px;
  display: flex;
}
.dragon {
  position: relative;
  margin-left: 10px;
  width: 50px;
  height: 50px;
  background-image: url(/images/dragon2.gif);
  background-size: cover;
  background-position: center;
  cursor: help;
  animation: hover 2s linear infinite;
}
.dragon:hover .dragon-help {
	display: block;
}
.dragon-help {
position: absolute;
    background: #1b1b1b;
    border: 2px maroon solid;
    width: 300px;
    height: auto;
    text-align: justify;
    font-size: 16px;
    top: 60px;
    right: calc(50% - 166px);
    padding: 10px;
    z-index: 100;
        display: none;
}
.dragon-help:after {
content: '';
    position: absolute;
    width: 0;
    height: 0;
    top: -7px;
    left: 150px;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-bottom: 5px solid #800000;
}
@keyframes hover {
	25%{margin-top: 5px}
	75%{margin-top: -5px}
}

input {
  display: block;
  margin: auto;
  height: 35px;
  width: 895px;
  border: 0;
  border-left: 5px #343436 solid;
  background-color: #1b1b1b;
  color: #FFF;
  padding: 0 5px;
  font-size: 16px;
  transition: border-color 0.5s;
  font-family: 'Lato', sans-serif;
}

.addVideo input[type=file] {
    width: 102px;
    position: absolute;
    top: 0;
    left: 0;
    padding: 0;
    margin: 0;
    border: 0;
    opacity: 0;
    cursor: pointer;
    height: 100%;
    z-index: 10;
}
.hidden {
display: none;
}

textarea {
  display: block;
  margin: auto;
  width: 895px;
  height: 200px;
  border: 0;
  border-left: 5px #343436 solid;
  background-color: #1b1b1b;
  color: #FFF;
  padding: 5px;
  resize: none;
  font-size: 16px;
  transition: border-color 0.5s;
  font-family: 'Lato', sans-serif;
}

textarea:focus, input:focus, button:focus{
  outline: none;
  border-color: maroon;
}

.choices {
  margin: 10px 45px;
}
.stagesOfDevCon {
  width: 100%;
  height: auto;
  min-height: 100px;
}
.hoverStage {
 width: 100%;
  height: 30px;
  position: relative;
  background: #1b1b1b;
}
.stage-bar {
  position: absolute;
  background: #800000;
  width: 0%;
  height: 100%;
  transition: width 0.5s;
}
.stageCon {
  width: 100%;
  height: 100%;
  position: absolute;
  z-index: 5;
  display: flex;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
     -khtml-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;
}
.stage {
  width: 20%;
  text-align: center;
  color: #ad9440;
  font-size: 18px;
  line-height: 30px;
  border-right: 3px black solid;
  cursor: pointer;
}
.stage:last-child {
  border-right: 0;
}
.stage span {
  opacity: 0;
  transition: 0.5s;
}
.stage:hover span {
  opacity: 1;
}
.activeStage {
  opacity: 1 !important;
}
.milestones{
  display: flex;
  height: auto;
}
.dropped {
  height: 501px !important;
}
.dropDownStage {
  height: 0;
  width: 20%;
  border-right: 3px black solid;
  overflow-x: hidden;
  overflow-y: auto;
  transition: height 0.5s;
}
.dropDownStage:last-child {
  border-right: 3px black solid;
}
/*.addAnother {
  text-align: center;
    width: 18px;
    height: 18px;
    background: #800000;
    line-height: 18px;
    left: calc(50% - 10px);
    cursor: pointer;
    position: relative;
    border: 1px #ad9440 solid;
}*/


.choice {
    position: relative;
    z-index: 2;
    min-width: 140px;
    margin: 10px 0;
    margin-left: 5px;
    display: inline-flex;
    color: white;
    font-size: 18px;
  cursor: pointer;
}
.checkbox {
    min-width: 60px;
  max-width: 60px;
    height: 60px;
    position: relative;
    /* background-color: #1b1b1b; */
    cursor: pointer;
    margin-right: 5px;
    background-image: url(http://72dragons.snxwless.net/images/dragon1pre.png);
    background-position: center;
    background-size: 150%;
    filter: brightness(50%);
    transition: filter 0.5s;
}
.choice:hover .checkbox {
  background-image: url(http://72dragons.snxwless.net/images/dragon1peek.png);
      filter: brightness(75%);
}
.checked {
  background-image: url(http://72dragons.snxwless.net/images/dragon1post.png) !important;
      filter: brightness(100%) !important;
}
.check {
    visibility: hidden;
}
.stageFile {
    background: black;
    height: 50px;
    width: calc(100% - 11px);
  border: 3px #565656 solid;
    position: relative;
    font-size: 14px;
    overflow: hidden;
    text-align: center;
  display: none;
}
.showStageFile {
  display: table;
}
.stageFile input{
  position: absolute;
  z-index: 1;
  top: 0;
  left: 0;
  height: 100%;
  opacity: 0;
    cursor: pointer;
}
.stageFile span {
    width: 100%;
    display: table-cell;
    vertical-align: middle;
  color: #ad9440;
}

</style>
</head>
<body>
<header>
  <div id="uncover"></div>
  <a href="/" style="display: flex;"><div id="icon"></div>
  <div id="titleCon">
    <div id="title"><span id="fontred">72</span> Dragons</div>
  </div></a>
  <nav>
    <ul>
      <li><a href="http://72dragons.snxwless.net/production/default.php">Production</a></li>
      <li><a href="http://72dragons.snxwless.net/community/default.php">Community</a></li>
      <li><a href="http://72dragons.snxwless.net/about/default.php">About</a></li>
      <li><a href="#">Shop</a></li>
      <li><a href="http://72dragons.snxwless.net/login.php">Login</a></li>
    </ul>
  </nav>
</header>
</body>
</html>


<div id="overviewHeader">
  <div id="overviewTitle">Member Page</div>
  <div id="overviewMenu">
    <div class="menuItem addMmbr active">
	<svg class="svg-inline--fa fa-list fa-w-16" role="img" aria-hidden="true" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" data-icon="list" data-prefix="fas" data-fa-proceed="">
	<path xmlns="http://www.w3.org/2000/svg" fill="currentColor" d="M 448 294.2 v -76.4 c 0 -13.3 -10.7 -24 -24 -24 H
	286.2 V 56 c 0 -13.3 -10.7 -24 -24 -24 h -76.4 c -13.3 0 -24 10.7 -24 24 v 137.8 H 24 c -13.3 0 -24 10.7 -24 24 v 
	76.4 c 0 13.3 10.7 24 24 24 h 137.8 V 456 c 0 13.3 10.7 24 24 24 h 76.4 c 13.3 0 24 -10.7 24 -24 V 318.2 H 424 c 13.3 0 24 -10.7 24 -24 Z" />
	</svg>
	</div>
	<!--<button type="button" onclick="<?php require('edit.php'); ?>">Click Me!</button>-->
    <div class="menuItem editMmbr"><svg xmlns="http://www.w3.org/2000/svg" class="svg-inline--fa fa-pencil-alt fa-w-16" role="img" aria-hidden="true" viewBox="0 0 512 512" data-icon="pencil-alt" 
	data-prefix="fas" data-fa-processed=""><path fill="currentColor" d="M 497.9 142.1 l -46.1 46.1 c -4.7 4.7 -12.3 4.7 -17 0 l -111 -111 c -4.7 -4.7 -4.7 -12.3 0 -17 l 46.1 -46.1 c 18.7 -18.7 49.1 
	-18.7 67.9 0 l 60.1 60.1 c 18.8 18.7 18.8 49.1 0 67.9 Z M 284.2 99.8 L 21.6 362.4 L 0.4 483.9 c -2.9 16.4 11.4 30.6 27.8 27.8 l 121.5 -21.3 l 262.6 -262.6 c 4.7 -4.7 4.7 -12.3 0 -17 l -111 -111 
	c -4.8 -4.7 -12.4 -4.7 -17.1 0 Z M 124.1 339.9 c -5.5 -5.5 -5.5 -14.3 0 -19.8 l 154 -154 c 5.5 -5.5 14.3 -5.5 19.8 0 s 5.5 14.3 0 19.8 l -154 154 c -5.5 5.5 -14.3 5.5 -19.8 0 Z M 88 424 h 48 v 
	36.3 l -64.5 11.3 l -31.1 -31.1 L 51.7 376 H 88 v 48 Z" /></svg>
	</div>
    </div>
</div>
    
    
<div id="overviewWindows" >
  <div class="ov-window" id="addMmbr">
   <form action="add.php" method="POST" id="mmbrform">
   
      <h1 style="color:#ad9440;">ADD A MEMBER</h1>
      
      <hr>  
	         
            <input type="text" id="n" name="n" placeholder="Full Name" required="required" /><br>
			
		    <select type="text" id='g' name="g">
              <option>Male</option>
              <option>Female</option>
            </select>
            <br>
		


 

 
    
    
 
           	<input type="text" name="nl" id="nl" placeholder="Native Language" required="required" /><br>
			
			<input type="text" id="ol1" name="ol1" placeholder="Other Languages" required="required" /><br>
			
			<input type="text" id="ol2" name="ol2" placeholder="Other Languages" required="required" /><br>
			
			<input type="text" id="sk" name="sk" placeholder="Skills/Expertise" required="required" /><br>
			
			<input type="text" id="eb" name="eb" placeholder="Educational Background" required="required" /><br>
            		
			<input type="text" id="int" name="int"placeholder="Interests in the Film Industry" required="required"/> <br>
						
			<input type="text" id="hobbies" name="hobbies"placeholder="Hobbies" required="required"/> <br>
						
			<input type="text" id="Address" name="Address"placeholder="Address" required="required"/> <br>
					
			<div class="choicebar-dropDown">
    <div class="dropDown-Face">Country of Citizenship</div>
    <div class="dropDown-Container">
        	    <div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Aland Islands</div>
    			<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Afghanistan</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Albania</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Algeria</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">American Samoa</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Andorra</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Angola</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Anguilla</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Antigua and Barbuda</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Argentina</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Armenia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Aruba</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Australia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Austria</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Azerbaijan</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">The Bahamas</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Bahrain</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Bangladesh</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Barbados</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Belarus</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Belgium</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Belize</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Benin</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Bermuda</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Bhutan</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Bolivia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Bosnia and Herzegovina</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Botswana</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Brazil</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Brunei</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Bulgaria</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Burkina Faso</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Burundi</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Cambodia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Cameroon</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Canada</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Cape Verde</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Cayman Islands</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Central African Republic</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Chad</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Chile</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">People 's Republic of China</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Republic of China</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Christmas Island</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Cocos(Keeling) Islands</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Colombia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Comoros</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Congo</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Cook Islands</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Costa Rica</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Cote d'Ivoire</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Croatia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Cuba</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Cyprus</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Czech Republic</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Denmark</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Djibouti</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Dominica</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Dominican Republic</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Ecuador</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Egypt</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">El Salvador</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Equatorial Guinea</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Eritrea</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Estonia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Ethiopia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Falkland Islands</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Faroe Islands</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Fiji</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Finland</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">France</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">French Polynesia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Gabon</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">The Gambia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Georgia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Germany</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Ghana</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Gibraltar</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Greece</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Greenland</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Grenada</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Guadeloupe</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Guam</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Guatemala</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Guernsey</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Guinea</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Guinea - Bissau</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Guyana</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Haiti</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Honduras</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Hong Kong</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Hungary</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Iceland</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">India</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Indonesia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Iran</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Iraq</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Ireland</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Israel</div>
		        <div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Italy</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Jamaica</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Japan</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Jersey</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Jordan</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Kazakhstan</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Kenya</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Kiribati</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">North Korea</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">South Korea</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Kosovo</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Kuwait</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Kyrgyzstan</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Laos</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Latvia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Lebanon</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Lesotho</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Liberia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Libya</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Liechtenstein</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Lithuania</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Luxembourg</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Macau</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Macedonia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Madagascar</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Malawi</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Malaysia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Maldives</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Mali</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Malta</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Marshall Islands</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Martinique</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Mauritania</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Mauritius</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Mayotte</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Mexico</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Micronesia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Moldova</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Monaco</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Mongolia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Montenegro</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Montserrat</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Morocco</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Mozambique</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Myanmar</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Nagorno - Karabakh</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Namibia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Nauru</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Nepal</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Netherlands</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Netherlands Antilles</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">New Caledonia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">New Zealand</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Nicaragua</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Niger</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Nigeria</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Niue</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Norfolk Island</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Turkish Republic of Northern Cyprus</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Northern Mariana</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Norway</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Oman</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Pakistan</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Palau</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Palestine</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Panama</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Papua New Guinea</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Paraguay</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Peru</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Philippines</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Pitcairn Islands</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Poland</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Portugal</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Puerto Rico</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Qatar</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Romania</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Russia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Rwanda</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Saint Barthelemy</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Saint Helena</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Saint Kitts and Nevis</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Saint Lucia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Saint Martin</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Saint Pierre and Miquelon</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Saint Vincent and the Grenadines</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Samoa</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">San Marino</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Sao Tome and Principe</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Saudi Arabia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Senegal</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Serbia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Seychelles</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Sierra Leone</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Singapore</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Slovakia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Slovenia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Solomon Islands</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Somalia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Somaliland</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">South Africa</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">South Ossetia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Spain</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Sri Lanka</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Sudan</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Suriname</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Svalbard</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Swaziland</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Sweden</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Switzerland</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Syria</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Taiwan</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Tajikistan</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Tanzania</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Thailand</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Timor - Leste</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Togo</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Tokelau</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Tonga</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Transnistria Pridnestrovie</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Trinidad and Tobago</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Tristan da Cunha</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Tunisia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Turkey</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Turkmenistan</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Turks and Caicos Islands</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Tuvalu</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Uganda</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Ukraine</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">United Arab Emirates</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">United Kingdom</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">United States</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Uruguay</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Uzbekistan</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Vanuatu</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Vatican City</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Venezuela</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Vietnam</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">British Virgin Islands</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Isle of Man</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">US Virgin Islands</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Wallis and Futuna</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Western Sahara</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Yemen</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Zambia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Zimbabwe</div>
	
    </div>
    <input class="dropDown-Choice" name="exampleName" type="hidden">
</div>
    <br>
        		

<div class="choicebar-dropDown">
    <div class="dropDown-Face">Country of Residence</div>
    <div class="dropDown-Container">
    			<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Aland Islands</div>
    			<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Afghanistan</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Albania</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Algeria</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">American Samoa</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Andorra</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Angola</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Anguilla</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Antigua and Barbuda</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Argentina</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Armenia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Aruba</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Australia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Austria</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Azerbaijan</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">The Bahamas</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Bahrain</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Bangladesh</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Barbados</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Belarus</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Belgium</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Belize</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Benin</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Bermuda</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Bhutan</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Bolivia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Bosnia and Herzegovina</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Botswana</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Brazil</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Brunei</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Bulgaria</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Burkina Faso</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Burundi</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Cambodia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Cameroon</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Canada</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Cape Verde</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Cayman Islands</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Central African Republic</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Chad</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Chile</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">People 's Republic of China</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Republic of China</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Christmas Island</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Cocos(Keeling) Islands</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Colombia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Comoros</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Congo</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Cook Islands</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Costa Rica</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Cote d'Ivoire</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Croatia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Cuba</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Cyprus</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Czech Republic</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Denmark</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Djibouti</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Dominica</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Dominican Republic</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Ecuador</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Egypt</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">El Salvador</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Equatorial Guinea</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Eritrea</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Estonia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Ethiopia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Falkland Islands</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Faroe Islands</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Fiji</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Finland</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">France</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">French Polynesia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Gabon</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">The Gambia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Georgia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Germany</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Ghana</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Gibraltar</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Greece</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Greenland</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Grenada</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Guadeloupe</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Guam</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Guatemala</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Guernsey</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Guinea</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Guinea - Bissau</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Guyana</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Haiti</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Honduras</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Hong Kong</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Hungary</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Iceland</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">India</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Indonesia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Iran</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Iraq</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Ireland</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Israel</div>
		        <div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Italy</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Jamaica</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Japan</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Jersey</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Jordan</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Kazakhstan</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Kenya</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Kiribati</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">North Korea</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">South Korea</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Kosovo</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Kuwait</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Kyrgyzstan</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Laos</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Latvia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Lebanon</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Lesotho</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Liberia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Libya</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Liechtenstein</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Lithuania</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Luxembourg</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Macau</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Macedonia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Madagascar</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Malawi</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Malaysia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Maldives</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Mali</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Malta</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Marshall Islands</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Martinique</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Mauritania</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Mauritius</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Mayotte</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Mexico</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Micronesia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Moldova</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Monaco</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Mongolia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Montenegro</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Montserrat</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Morocco</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Mozambique</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Myanmar</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Nagorno - Karabakh</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Namibia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Nauru</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Nepal</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Netherlands</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Netherlands Antilles</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">New Caledonia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">New Zealand</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Nicaragua</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Niger</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Nigeria</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Niue</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Norfolk Island</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Turkish Republic of Northern Cyprus</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Northern Mariana</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Norway</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Oman</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Pakistan</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Palau</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Palestine</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Panama</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Papua New Guinea</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Paraguay</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Peru</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Philippines</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Pitcairn Islands</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Poland</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Portugal</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Puerto Rico</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Qatar</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Romania</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Russia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Rwanda</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Saint Barthelemy</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Saint Helena</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Saint Kitts and Nevis</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Saint Lucia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Saint Martin</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Saint Pierre and Miquelon</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Saint Vincent and the Grenadines</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Samoa</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">San Marino</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Sao Tome and Principe</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Saudi Arabia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Senegal</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Serbia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Seychelles</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Sierra Leone</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Singapore</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Slovakia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Slovenia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Solomon Islands</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Somalia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Somaliland</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">South Africa</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">South Ossetia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Spain</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Sri Lanka</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Sudan</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Suriname</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Svalbard</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Swaziland</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Sweden</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Switzerland</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Syria</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Taiwan</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Tajikistan</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Tanzania</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Thailand</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Timor - Leste</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Togo</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Tokelau</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Tonga</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Transnistria Pridnestrovie</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Trinidad and Tobago</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Tristan da Cunha</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Tunisia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Turkey</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Turkmenistan</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Turks and Caicos Islands</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Tuvalu</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Uganda</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Ukraine</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">United Arab Emirates</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">United Kingdom</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">United States</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Uruguay</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Uzbekistan</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Vanuatu</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Vatican City</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Venezuela</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Vietnam</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">British Virgin Islands</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Isle of Man</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">US Virgin Islands</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Wallis and Futuna</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Western Sahara</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Yemen</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Zambia</div>
				<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Zimbabwe</div>
	
    <input class="dropDown-Choice" name="exampleName" type="hidden">
</div></div>

	<br>
	
<script>
function dropDownClick(dropDown,choice) {
	dropDown.find('.dropDown-Face').text(choice);
	dropDown.find('input').val(choice);
}

</script>
						
								
			<input type="text" id="City" name="City"placeholder="City" required="required"/> <br>
			 		
			<input type="text" id="State" name="State"placeholder="State" required="required"/> <br>
			 		
			<input type="text" id="zip" name="zip"placeholder="Zip Code" required="required"/> <br>
             			
			<input type="tel" id="tel1" name="tel1"placeholder="Telephone number Primary" /> <br>
			 	
			<input type="tel" id="tel2" name="tel2"placeholder="Telephone number Secondary" /> <br>
			<input type="email" id="e1" name="el"placeholder="Email ID" /> <br>
      <div class="clearfix">
        
        <button type="submit" class="add" value="submit" id="addMmbr">Add</button>
      </div>
    </div>
  </form>
<?php require 'add.php'; ?>

</div>
  
 <div class="ov-window" id="editMmbr">
 <?php
$con = mysqli_connect("localhost","root","","72dragonsdb");

$sql = "SELECT * FROM members table";
	$result=mysqli_query($con,$sql);
	
	echo '<table id="mmbrSheet">';
    	echo "<tbody>" ; echo "<tr>";
    		echo '<th>Name</th>';
			echo '<th>Gender</th>';
			echo '<th>Native Language</th>';
			echo '<th>Other Language1</th>';
			echo '<th>Other Language2</th>';
			echo '<th>Skills/Expertise</th>';
			echo '<th>Educational Background</th>';
			echo '<th>Roles in Film Industry</th>';
			echo '<th>Interests in Film Industry</th>';
			echo '<th>Hobbies</th>';
			echo '<th>Country of Citizenship</th>';
			echo '<th>Country of Residence</th>';
			echo '<th>Address</th>';
			echo '<th>State</th>';
			echo '<th>City</th>';
			echo '<th>Zip</th>';
			echo '<th>Telepone number Primary</th>';
			echo '<th>Telepone number Secondary</th>';
			echo '<th>Email Address</th>';
			echo '</tr>';
			
			
			$count=mysqli_num_rows($result);
			for($i=0;$i<$count;++$i){
				$row1 = mysqli_fetch_assoc($result);
				echo "<tr>";
				echo "<td>$Name</td>";echo "<td>$Gender</td>";echo "<td>$Native Language</td>";echo "<td>$Other languages #1</td>";
				echo "<td>$Other languages #2</td>";echo "<td>$Skills/Expertise</td>";echo "<td>$Educational Background</td>";echo "<td>$Roles in the Film Industry</td>";
				echo "<td>$Interests in the Film Industry</td>";echo "<td>$Hobbies</td>";echo "<td>$Country of Citizenship</td>";echo "<td>$Country of Residence</td>";
				echo "<td>$Address</td>";echo "<td>$State</td>";echo "<td>$City</td>";echo "<td>$Zip Code</td>";echo "<td>$Telepone number Primary</td>";
				echo "<td>$Telepone number Secondary</td>";echo "<td>$Email Address</td>";
				echo "</tr>";
			}
	
echo '<?table>';

mysqli_close($con);
?>
  
      </div> 
   </div>
  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>72 Dragons</title>
<meta name="viewport" content="width=device-width, height=device-height">
<link href="https://fonts.googleapis.com/css?family=Spectral+SC:300" rel="stylesheet">
<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<style>
footer {
  position: relative;
  width: 100%;
  height: 400px;
  display: flex;
  transition: height 0.5s;
  background: #1b1b1b;
  border-top: 5px maroon solid;
  color: white;
  margin-top: 20px;
}
footer h3 {
  color: #ad9440;
}
#footerContent {
  position: relative;
  left: calc(50% - 450px);
  width: 900px;
  display: flex;
}
.footerPanel {
  width: 500px;
  padding: 20px;
  text-align: center;
}
.footerPanel img {
  width: 200px;
}
#social {
  display: flex;
  text-align: center;
  width: 100px;
  position: relative;
  left: calc(50% - 50px);
}
#social img {
  height: 25px;
  width: auto;
  border-radius: 5px;
  margin: 0 10px;
  filter: grayscale(1);
  transition: filter 0.5s;
}
#social img:hover {
  filter: grayscale(0);
}

.footerPanel a {
  color: maroon;
  text-decoration: none;
}
</style>
</head>
<body>
<footer>
  <div id="footerContent">
    <div class="footerPanel">
      <img src="https://scontent-hkg3-2.xx.fbcdn.net/v/t31.0-8/18839650_1549037021793453_4706551412004634203_o.jpg?oh=6c7ed577c53f91fde039129231461e26&oe=5ACD0A0A">
      <div id="social">
        <a id="youtube" href="https://www.youtube.com/channel/UC9zmUnMUiuVyYv-9gnl4T_w"><img src="https://cdn0.iconfinder.com/data/icons/social-flat-rounded-rects/512/youtube_v2-512.png"></a>
        <a id="facebook" href="https://www.facebook.com/72Dragons/"><img src="https://image.flaticon.com/icons/png/512/124/124010.png"></a>
      </div>
    </div>
    <div class="footerPanel">
      <h3>Contact Us</h3>
      Email: <a href="mailto:contact@72dragons.com">contact@72dragons.com</a>
    </div>
  </div>
</footer>
</body>
</html></body>
</html>