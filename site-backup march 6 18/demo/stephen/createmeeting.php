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
@charset "UTF-8";
/* CSS Document */
body{
	background-color: #000000;
	font-family: "Spectral SC", serif;
}
#uncover {
  position: absolute;
  height: 100px;
  width: 0%;
  background: white;
  opacity: 1;
  transition: opacity 0.5s;
}
#icon {
  width: 100px;
  height: 100px;
  background-image: url(https://cinando.com/img/company/1010924.jpg?width=283&height=283&404=noimg_company.png);
  background-position: center;
  background-size: 125%;
  filter: invert(1) hue-rotate(180deg);
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
  color: #ad9440;
  transition: color 0.5s;
}
#fontred {
  color: #800000;
  transition: color 0.5s;
}
nav {
  	position: absolute;
  	right: 10px;
  	font-size: 24px;
  	height: 100%;
  	line-height: 50px;
	width: 50%;
}
nav ul {
  list-style: none;
  display: flex;
}
nav ul li {
  margin: 0 10px;
  color: #fff;
  opacity: 1;
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
a {
  text-decoration: none;
  transition: color 0.5s;
}
a:hover {
  color: maroon;
}

header {
  	position: relative;
  	width: 100%;
  	height: 100px;
  	display: flex;
  	line-height: 100px;
  	transition: border-bottom 0.5s;
  	top: 0;
  	background: #000000;
  	z-index: 999999;
	border-bottom: solid #ad9440;
}
.main{
	color: #ad9440;
	padding-left: 2%;
	padding-right: 2%;
}
* {
    box-sizing: border-box;
}
input[type=text], select, textarea {
    width: 100%; 
    padding: 12px; /* Some padding */  
    border: 1px solid #ccc; /* Gray border */
    border-radius: 4px; /* Rounded borders */
    box-sizing: border-box; /* Make sure that padding and width stays in place */
    margin-top: 6px; /* Add a top margin */
    margin-bottom: 16px; /* Bottom margin */
    resize: vertical; /* Allow the user to vertically resize the textarea (not horizontally) */
	background-color: ;	
}

/* Style the submit button */
input[type=submit] {
    background-color: #800000;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
/* When moving the mouse over the submit button */
input[type=submit]:hover {
    background-color: #ad9440;
}
* {
box-sizing: border-box;
}
form{
	margin-left: 25%;
	width: 48%;
}
</style>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/header.html';?>
<div class="main">
		<h1>Create New Meeting</h1>
			<form method="post">
			Meeting Name<br>
  			<input type="text" name="Name" placeholder="Meeeting Name" required="required"><br>
			City:<br>
			<input type="text" name="city" placeholder="City" required="required"><br>
			Address of Event:
			<input type="text" name="Address" placeholder="Address of Event" required="required"><br>
			Time:
			<input type="text" name="Time" placeholder="Time"	required="required"><br>
			Day:
			<input type="text" name="Day" placeholder="Day"	required="required"><br>
			Invite:
			<input type="text" name="Invites" placeholder="Invite"	required="required"><br>	
			<!-- END --><br>
			<input type="submit" value="Submit">
		</form>
	</div>
<script type="text/javascript">


</script>
</body>
</html>