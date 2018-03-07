<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Upload Video - 72 Dragons</title>
<meta name="viewport" content="width=device-width, height=device-height">
<link rel="stylesheet" type="text/css" href="main.css">
<link href="https://fonts.googleapis.com/css?family=Spectral+SC:300" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="default.js"></script>
</head>
<body>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>72 Dragons</title>
<meta name="viewport" content="width=device-width, height=device-height">
<link href="https://fonts.googleapis.com/css?family=Spectral+SC:300" rel="stylesheet">
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
.as1 {
    background-color: #ad9440;
    width: 150px;
    border: 5px #000000;
    padding: 15px;
    margin: 5px;
}
.as2 {
    background-color: #ad9440;
    width: 250px;
    border: 5px #000000;
    padding: 15px;
    margin: 5px;
}

.myVid {
	margin: 0 auto;
	border: 10px outset #ddd;
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
<a href="#upload"><div class="button">Upload</div></a> 
<a href="#gallery"><div class="button">Gallery</div></a> 
<body><br><br>
<section>
<center>
<a id="upload"></a> 
<h3>Upload Videos</h3>

<form method="POST" enctype="multipart/form-data">
     name <input type="text" name="name" placeholder="name for the file"><br><br>
     choose the file <input class="as2" type="file" name="file" placeholder="choose a file"><br><br>
     <input class="as1" type="submit" value="Upload Video" name="submit">
</form><br>
<?php require 'video.php'; ?>		
<br>
</center>
</section><br>
<section>
<center><br><br>
<a id="gallery"></a> 
<h3>Gallery</h3>
<div id="as1">
<?php require'show.php'; ?> <!-- to show all the videos -->
</div>
<br><br>
<video class="myVid" width="256" height="192"  id="myuploads" controls autoplay>
    <source src="uploads/v1.mp4" id="mp4Src" type="video/mp4">
    Your browser does not support the video tag.
</video>

<script type='text/javascript'>
   var count=1;
   var player=document.getElementById('myuploads');
   var mp4Vids = document.getElementById('mp4Src');
   player.addEventListener('ended',myHandler,false);

   function myHandler(e)
   {

      if(!e) 
      {
         e = window.event; 
      }
      count++;
      $(mp4Vids).attr('src', "uploads/v"+count+".mp4");
      player.load();
      player.play();
   }

</script><br><br><br><br>
</div>

</section>

</body>
</html></div>
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