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
background-color: black;
  font-family: 'Spectral SC', serif;
  }
.create{
    position: relative;
z-index: 10;
	text-align: center;
	padding-top: 50px;
}
.create-button{
	padding-top: 5px;
	padding-bottom: 5px;
	padding-left: 135px;
	padding-right: 135px;
	border-radius: 15px;
	background-color: #ad9440;
	border-color: #ad9440;
	font-size: 15px;
}
.for-button{
	padding-top: 10px;
}
.gif{
	display: block;
    margin: 0 auto;
    animation: rotate 10s linear infinite;
      filter: invert(1) hue-rotate(180deg);
      width: 200px;
}
@keyframes rotate {
	from{transform: rotate(0deg);}
	to{transform: rotate(359deg);}
}
input{
	width: 11%;
	height: 30px;
	font-size: 15px;
}
.forgot {
color: maroon;
}
select{
	width: 11%;
	height: 30px;
	font-size: 15px;
}
</style>
</head>
<body>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>72 Dragons</title>
<meta name="viewport" content="width=device-width, height=device-height">
<link href="https://fonts.googleapis.com/css?family=Spectral+SC:300" rel="stylesheet">
<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="createscript.js"></script>
<link rel="stylesheet" type="text/css" href="createstyle.css"> 

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
      <li><a href="http://72dragons.snxwless.net/community/bubble.php">Community</a></li>
      <li><a href="http://72dragons.snxwless.net/about/default.php">About</a></li>
      <li><a href="#">Shop</a></li>
      <li><a href="http://72dragons.snxwless.net/login.php">Login</a></li>
    </ul>
  </nav>
</header>
</body>
</html>

	<h1 style="padding-bottom: 15px; color: #ad9440"><center>CREATE AN ACCOUNT <img src="The Dragon.gif" height="80px" width="140px" margin-top="90px"></center></h1>
	<div class="row" >
	<div class="LeftCont">
		<form method="POST" enctype="multipart/form-data" >
			<input type="text" name="f" placeholder="First Name" required="required" /><br>
			<input type="text" name="l" placeholder="Last Name" required="required" /><br>
			<input type="email" name="e" placeholder="Email ID" required="required" /><br>
			<input type="tel" name="c" placeholder="Phone" required="required" /><br>
			<select name="g" placeholder="Gender"><option>Male<option>Female</select><br>
			<input type="date" name="d"placeholder="D.O.B" required="required"/> <br>
			<div id="map" style="height:250px; width=750px;">
                <script>
                 function locMap() {
                 var pos = {lat: -25.363, lng: 131.044};
                 var map = new google.maps.Map(document.getElementById('map'), {
                 zoom: 4,
                 center: pos
                 });
                 var marker = new google.maps.Marker({ 
                 position: pos,
                 map: map
            });
            }
                </script>
             <script async defer
               src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBctX3ve_i0TeIh6l6W62BX7LQP8Q2CSZg&callback=locMap">
             </script>
	        </div><br>
			<input type="password" name="pw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
			title="Must contain at least one number and one uppercase and lowercase letter,
			and at least 8 or more characters" placeholder="New Password"><br>
			<div class="photoList" id="postList">
              <div class="addMember">
              <input class="input-file" type="file" name="poster[]" accept="image/*">
              <span>Picture</span>
              </div>
			</div><br>
			
			<p class="for-button" style="margin-left: 15px;"><center><button type="submit" class="create-button">CREATE</button></center></p> 
		</form>
	</div> <!-- close LeftCont Class -->
	<br><br><br>
	<div class="RightCont">
	    <img src="dragon3.gif" width ="400px" height ="400px" >
	</div> <!-- close RightCont Class -->
			
	</div><!-- close row effect -->
	
	
	<br> <br>
	<br><br>
	<img class="gif" src="72DragonsLogo.jpg" alt="gif_logo">
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