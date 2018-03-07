<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Dragons</title>
<link href="Dragons stylesheet.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Spectral+SC" rel="stylesheet">	
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
/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 33.33%;
    padding: 10px 10px 40px 10px;
	text-align: center;
	height: 300px;
}
/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .column {
        width: 100%;
    }
}
.dropdown {
    position: relative;
}
.dropdown-content {
    position: absolute;
	bottom: -150px;
	transition: height 0.5s;
    background-color: #ad9440;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	text-align: center;
	border-radius: 0px 0px 20px 20px;
  	z-index: 0;
  	top: 100%;
	left: 92px;
  	width: 230px;
	height: 0px;
	
}
.dropdown-content p {
    color: #000;
    padding: 1px 1px;
    display: block;
}
.title{
	color: maroon;
	font-family: "lobster";
	font-size: 20px;
}
.dropdown:hover .dropdown-content {
	display: block;
	-webkit-transition: 2s; /* Safari */
	visibility: visible;
    transition: 2s;
	z-index: 10;
	min-height: 5px;
	max-height: 200px;
	height: 150px;
}
.dropdown img{
	height: 200px;
	width: 200px;
	transition: 1.2s;
    -webkit-transition: 1.2s; /* Safari 3.1 to 6.0 */
}
.dropdown img:hover{
	width: 230px;
	height: 230px;
	margin: 0px;
	padding: 0px;
}
.column img:hover{
	position:static;
	z-index: 100;
	margin: 0px;
	padding: 0px;
}
img:hover{
	margin: 0px;
	padding: 0px;
}
</style>
</head>
<body>
	<header>
		<div id="uncover"></div>
  		<div id="icon"></div>
		<div id="titleCon">
			<div id="title"><span id="fontred">72</span> Dragons</div>
  		</div>
  		<nav>
    		<ul>
      			<li><a href="#">Production</a></li>
      			<li><a href="#">Community</a></li>
      			<li><a href="#">About</a></li>
      			<li><a href="#">Shop</a></li>
      			<li><a href="#">Login</a></li>
    		</ul>
  		</nav>
	</header>
	<div class="main">
		<h1>MEET THE DRAGONS</h1>
		<div class="row">
			<div class="column">
				<div class="dropdown">
					<img src="Dragons Images/WhatsApp Image 2017-12-23 at 3.22.06 PM (1).jpeg" alt="Big Dragon">
					<div class="dropdown-content">
						    <p class="title">Big Dragon</p>
    						<p>Bradley Miller</p>
    						<p>Owner</p>
					</div>
				</div> 	
			</div>
			<div class="column">
				<div class="dropdown">
					<img src="Dragons Images/WhatsApp Image 2017-12-23 at 3.21.56 PM.jpeg" alt="Dr Dragon">
					<div class="dropdown-content">
						<p class="title">Dr Dragon</p>
						<p>Pietro Aparicio</p>
					</div>
				</div>	
			</div>
			<div class="column">
				<div class="dropdown">
					<img src="Dragons Images/WhatsApp Image 2017-12-23 at 3.21.53 PM.jpeg" alt="Baby Dragon">
					<div class="dropdown-content">
					<p class="title">Baby Dragon</p>
					<p>Sander Aparicio</p>	
					</div>
				</div>	
			</div>
			<div class="column">
			<a href="dragons/profile.php">
				<div class="dropdown">
					<img src="https://lh3.googleusercontent.com/Y4dgul0ZJcMHtLehjOy22rzBfSUlplAbEQMY2ZsNoSGzAoaQkg1r_2ojCKOCknZSdJirnCsh1DePSO0dLjgn" alt="Princess">
					<div class="dropdown-content">
						<p class="title">Princess</p>
						<p>Hilda Aparicio</p>
					</div>
				</div>	
				</a>
			</div>
			<div class="column">
				<div class="dropdown">
					<img src="Dragons Images/WhatsApp Image 2017-12-23 at 3.21.54 PM (1).jpeg" alt="Dragon Q">
					<div class="dropdown-content">
						<p class="title">Dragon Q</p>
						<p>Tony</p>
					</div>
				</div>
			</div>
			<div class="column">
				<div class="dropdown">
					<img src="Dragons Images/WhatsApp Image 2017-12-23 at 3.22.01 PM.jpeg" alt="Friendly Dragon">
					<div class="dropdown-content">
						<p class="title">Friendly Dragon</p>
						<p>Jason Wieder</p>
					</div>
				</div>	
			</div>
			<div class="column">
				<div class="dropdown">
					<img src="Dragons Images/WhatsApp Image 2017-12-23 at 3.21.54 PM.jpeg" alt="Queen Alice">
					<div class="dropdown-content">
						<p class="title">Queen Alice</p>
						<p>Alice Miller</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>