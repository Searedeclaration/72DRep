<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Actors/Cast</title>
<link href="Actors stylesheet.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Spectral+SC" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<style>
@charset "UTF-8";
/* CSS Document */
body{
	background-color: black;
  	color: white;
  	font-family: "Spectral SC", serif;
    overflow-x: hidden;
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
.main{
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
	border-bottom: solid #ad9440;
}
.search-container {
  	float: left;
	padding-left: 40px;
}

input[type=text] {
  	padding: 6px;
  	margin-top: 8px;
  	font-size: 17px;
  	border: none;
}

.search-container button {
  	float: right;
  	padding: 6px 10px;
  	margin-top: 8px;
  	margin-right: 16px;
  	background: #ddd;
  	font-size: 17px;
  	border: none;
  	cursor: pointer;
}

.search-container button:hover {
  	background: #ccc;
}
section{
	padding: 15px;
	margin: 20px 15px;
	float: left;
	width: 22%;
	background-color: #6D6D6D;
	height: 100%;
}
section ul{
	list-style-type: none;
	text-decoration: none;
}
section h2{
	text-align: center;
}
.column {
    float: left;
	width: 24%;
	padding: auto;
	height: 170px;
	margin-top: 60px;
	text-align: center;
}
/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
.column p{
	padding-left: 50px;
}
.circle{
	height: 150px;
  	width: 150px;
  	background-color: #aaa;
  	border-radius: 50%;
	margin-left: 35%;
	position: relative;
}
.filter-list{
	text-decoration: none;
	width: auto;
	text-align: center;
	padding: 5px;
	margin: 10px;
}
.filter-list a{
	color: white;
	padding: 5px 5px;
	margin: 5px 2px;
}
.filter-list a:hover{
	color: maroon;
	background-color: #ad9440;
}
br{
	padding: 10px;
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
	<section>
		<div class="search-container">
    		<form action="/action_page.php">
     	 		<input type="text" placeholder="Search.." name="search">
      			<button type="submit"><i class="fa fa-search"></i></button>
    		</form>
  		</div>
		<br>
		<br>
		<h2>Movies</h2>
			<div class="filter-list">
    			<b>
      				<a id="all" href="#">All</a><br>
      				<a id="Dragon" href="#">THE DRAGON, THE DWARVES, AND A DARK MONSTER</a><br>
      				<a id="Ascalon" href="#">ASCALON AND THE SACRED SWORD</a><br>
      				<a id="Doctor" href="#">THE SEARCH FOR DOCTOR PEPE</a><br>
    			</b>
  			</div>
	</section>
		<h1 style="text-align: center; margin-bottom: 0px;">Actors</h1>
		<div class="row">
			<div class="column">
				<div class="Dragon item">
    			<div class="circle"></div>
				<p>John Smith</p>
				</div>	
			</div>
			<div class="column">
				<div class="Ascalon item">
				<div class="circle"></div>
				<p>Jan Richards</p>
				</div>
			</div>
			<div class="column">
				<div class="Doctor item">
				<div class="circle"></div>
				<p>Katrina Nelson</p>
				</div>
			</div>
			<div class="column">
				<div class="Dragon item">
				<div class="circle"></div>
				<p>Ted Collier</p>
				</div>	
			</div>
			<div class="column">
				<div class="Ascalon item">
				<div class="circle"></div>
				<p>Gregory Edwards</p>
				</div>
			</div>
			<div class="column">
				<div class="Doctor item">
				<div class="circle"></div>
				<p>Larry Simmons</p>
				</div>
			</div>
		</div>
	</div>
	
	
<script>
$(function(){
  $('#all').click(function(){
    $('.item').fadeIn();
    return false;
  });
  
  $('#Dragon').click(function(){
    $('.item').fadeIn();
    $('.item').not('.Dragon').hide();
    return false;
  });
  
  $('#Ascalon').click(function(){
    $('.item').fadeIn();
    $('.item').not('.Ascalon').hide();
    return false;
  });
  
  $('#Doctor').click(function(){
    $('.item').fadeIn();
    $('.item').not('.Doctor').hide();
    return false;
  });
});
</script>
</body>
</html>