<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Member Details</title>
<link href="Member Details stylesheet.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Spectral+SC" rel="stylesheet">
<style>
@charset "UTF-8";
/* CSS Document */
body{
	background-color: #000;
	color:#fff;
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
	text-align: center;
	padding: 10px 20px;
	padding-left: 10%;
	padding-right: 10%;
}
#video{
	float: right;
	height: 400px;
	overflow: hidden;
	position: relative;
	height: 80%;
}
.heading{
	padding: 20px;
	text-align: left;
	background-color: #2E2E2E;
	border-radius: 10px;
}
.heading img{
	position: absolute;
	height: 100px;
	float: right;
	bottom: 62%;
}
.projects img{
	height: 300px;
	padding-top: 10px;
	float: left;
	padding-left: 20px;
	padding-right: 20px;
}
.projects{
	text-align: left;
}
#images{
    text-align:center;
	float: left;
	padding-bottom: 5px;
}
#images a{
    display:inline-block;
    text-decoration:none;
    color:#FFFFFF;
}
.caption{
	padding-top: 10px;
	max-width: 265px;
	text-align: center;
}
.projects h2{
	padding-left: 25px;
}
.wrapper{
	text-align: center;
	padding: 10px 20px;
	padding-left: 10%;
	padding-right: 10%;
	overflow: hidden;
}
#following h2{
	text-align: left;
}
section{
	text-align: left;
	padding-left: 5px;
}
.people{
	float: left;
	width: 200px;
}
.people img{
	height: 50px;
	width: 50px;
	padding-right: 5px;
}
.posts{
	background-color: #2E2E2E;
	margin-left: 250px;
	width: 60%;
	padding-top: 0px;
	padding-bottom: 10px;
	margin-top: 1px;
	border-radius: 15px;
	overflow: hidden;
}
.posts h4{
	text-align: left;
	padding-left: 20px;
	margin-bottom: 0em;
}
.date{
	text-align: left;
	padding-left: 80px;
	margin-top: 0em;
	font-size: 10px;
}
.posts img{
	height: 60px;
	width: 60px;
	padding-right: 10px;
	text-align: left;
	float: left;
	padding-top: 10px;
	padding-left: 5px;
}
h3{
	text-align: left;
	margin-left: 260px;
	font-size: 25px;
}
.resume{
	margin-top: 0px;
	text-align: left;
	border: solid 2px;
	border-color: #ad9440;
	padding-left: 10px;
}
.main h2{
	text-align: left;
	padding-left: 30px;
}
.resume p{
	padding-left: 20px;
	font-size: 14px;
}
.resume h4{
	font-size: 20px;
}
.resume h5{
	font-size: 16px;
	border-bottom: solid 1px;
	border-bottom-color: #ad9440;
	width: 12%;
}
.resume img{
	float: right;
	height: 300px;
	padding-right: 20px;
}
.title-task{
	color: #AEAEAE;
}
dl{
	font-size: 14px;
}
.resume ul{
	list-style: none;
	font-size: 14px;
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
		<h1>Dragon Profile</h1>
		<div class="heading">
			<video id="video" width="400" height="250">
				<source src="https://r4---sn-i3belne6.c.drive.google.com/videoplayback?id=d7eb7240af32c663&itag=59&source=webdrive&requiressl=yes&mm=30&mn=sn-i3belne6&ms=nxu&mv=u&pl=24&sc=yes&ttl=transient&ei=rYJVWsalEIHxqQW5wZeIBA&driveid=1mk1KO7RVdbg312Uwb-JsyhSviMvTkmC3&app=texmex&mime=video/mp4&lmt=1515023905625080&mt=1515552647&ip=59.188.225.20&ipbits=0&expire=1515567853&cp=QVNGV0ZfVlhTRFhOOnp2eUxic1RIN0Iz&sparams=ip,ipbits,expire,id,itag,source,requiressl,mm,mn,ms,mv,pl,sc,ttl,ei,driveid,app,mime,lmt,cp&signature=492AD0B79AD7E4B97FB654B30AC7884145B3D40B.0157940BEACE0AD43299BD49182309DF7F60BA77&key=ck2&cpn=liXXcodpkdNtM2lB&c=WEB_EMBEDDED_PLAYER&cver=20180108" type="video/mp4">
  				<source src="https://r4---sn-i3belne6.c.drive.google.com/videoplayback?id=d7eb7240af32c663&itag=59&source=webdrive&requiressl=yes&mm=30&mn=sn-i3belne6&ms=nxu&mv=u&pl=24&sc=yes&ttl=transient&ei=rYJVWsalEIHxqQW5wZeIBA&driveid=1mk1KO7RVdbg312Uwb-JsyhSviMvTkmC3&app=texmex&mime=video/mp4&lmt=1515023905625080&mt=1515552647&ip=59.188.225.20&ipbits=0&expire=1515567853&cp=QVNGV0ZfVlhTRFhOOnp2eUxic1RIN0Iz&sparams=ip,ipbits,expire,id,itag,source,requiressl,mm,mn,ms,mv,pl,sc,ttl,ei,driveid,app,mime,lmt,cp&signature=492AD0B79AD7E4B97FB654B30AC7884145B3D40B.0157940BEACE0AD43299BD49182309DF7F60BA77&key=ck2&cpn=liXXcodpkdNtM2lB&c=WEB_EMBEDDED_PLAYER&cver=20180108" type="video/ogg">
  				Your browser does not support the video tag.
			</video>
			<p style="color: #AD9440; font-weight: 10000">Hilda Aparicio</p>
				
			<p>Profession: Screenwriter</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris condimentum ullamcorper interdum. Morbi tempor vehicula dolor a efficitur. Sed eget laoreet neque. Nam ac lectus finibus, cursus elit ac, volutpat quam. Duis et est in nulla malesuada consequat. Etiam ultricies ante vel enim accumsan, eget ultrices tortor interdum. Nulla non nisi ut nisi ornare mollis. Etiam at dignissim diam. Donec ut auctor odio.</p>
			<img src="/images/dragon-members/72D-HildaSierra.jpg" alt="Hilda">
		</div>
		<div class="projects">
			<h2 class="projects">Projects</h2>
			<div class="projects" id="images">
    			<a href="#">
        		<img src="https://cinando.com/img/film/Poster_261966.jpg?" alt="Dragon, Dwarves and a Monster">
        			<p class="caption">The Dragon, The Dwarves, and A Dark Monster</p>
    			</a>
   				<a href="#">
        		<img src="/images/world.jpeg" alt="World"> 
        			<div class="caption">On the Other Side of The World</div>
    			</a>
				<a href="#">
        		<img src="https://cinando.com/img/film/Poster_274441.jpg?" alt="Ascalon"> 
        			<div class="caption">Ascalon and The Sacred Sword</div>
    			</a>
				<a href="#">
        		<img src="/images/world.jpeg" alt="World"> 
        			<div class="caption">On the Other Side of The World</div>
    			</a>
			</div>
		</div>
	</div>
	<div class="main">
		<h2>Resume</h2>
		<div class="resume">
			<h4>Hilda Aparicio</h4>
			<h5>Contact Details:</h5>
			<img src="/images/dragon3.gif" alt="fire dragon">
			<p>80 John St. 5D, New York, NY, 10038</p> <p>646-334-4487</p> <p>hia2@students.calvin.edu</p>
			<h5>Experience:</h5>
				<p>Candidate exchange student to Switzerland</p>
				<dl style="margin-left: 20px;">
					<dt>American Field Service (AFS); Tegucigalpa, Honduras — 2012-2013</dt>
					<dd>Volunteer work at the Hospital Escuela: visiting cancer patients and giving toys to sick children. Volunteer work in nursing homes: entertainment and fundraising.</dd>
				</dl>
			<h5>Education:</h5>
			<p>High school: Instituto Gran Comision. Tegucigalpa, Honduras (2008-2012).</p>
			<p>AFS: Exchange Student at Gymnase de Morges (student listener). Morges, Switzerland (2013-2014).</p>
			<p>International school of English, Anglo Continental. Bournemouth, England (2014).</p>
			<p>Mcgill University: Greek Mythology and Classics in Modern Media. Montreal, Canada (2014).</p>
			<p>The Center for Continuing Education, Concordia University: English intensiveprogram, Creative writing, I & II, Screenwriting. Montreal, Canada (2014-2015).</p>
			<p>Toastmasters: Public Speaking. Montreal, Canada (2014-2015).</p>
			<p>Current student at Calvin College. GR, Michigan. Majoring in International Relations (2015-2019).</p>
			<h5>Skills:</h5>
				<ul>
					<li>Energetic and organized</li>
					<li>Hardworking</li>
					<li>Fluent in Spanish, French, & English</li> 
					<li>Microsoft Office, Word, PowerPoint intermediate level</li>
					<li>Creative and Artistic</li>
					<li>Quick learner</li>
					<li>Currently learning Adobe programs; Photoshop, InDesign, Illustration, Adapt</li>
					<li>Adjust quickly</li>
					<li>Photography</li> 
					<li>Drawing</li>
					<li>Screenwriting</li>
					<li>Creative writing</li>
				</ul>
		</div>
	</div>	
	<div class="wrapper">
	  <section>
			<h2>Working with:</h2>
			<div class="people">
				<img src="/images/dragon-members/72D-SanderAparicio.jpg" alt="Baby">
				<img src="/images/dragon-members/72D-BradleyMiller.jpg" alt="Brad">
				<img src="/images/dragon-members/72D-PietroAparicio.jpg" alt="Pepe"><br>
				<img src="/images/dragon-members/72D-AntonioHo.jpg" alt="Tony">
			</div>
		</section>
			<h3>Posts</h3>
			<div class="posts">
				<img src="/images/dragon-members/72D-HildaSierra.jpg" alt="Hilda"><h4>Hilda Aparicio</h4>
				<p class="date">Date: 2017</p>
				<p>Check Out the Film I wrote: "On The Other Side of The World"</p>
			</div>	
	</div>
	<script>
		setTimeout(function(){
  document.getElementById("video").play();
}, 10000);
	</script>
</body>
</html>