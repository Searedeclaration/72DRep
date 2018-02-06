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
  background: black;
   font-family: "Spectral SC", serif;
}
#canvasCon {
  position: absolute;
  left: calc(50% - 500px);
  top: calc(50% - 200px);
}
#hover {
  position: absolute;
  width: 100px;
  height: 100px;
  z-index: 10;
  background-color: red;
  border-radius: 100%;
  display: none;
  background-image: url(https://map.viamichelin.com/map/carte?map=viamichelin&z=10&lat=40.71305&lon=-74.00723&width=550&height=382&format=png&version=latest&layer=background&debug_pattern=.*);
  background-size: 300%;
  background-position: center;
  border: 1px maroon solid;
}







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
  background: maroon;
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
<div id="canvasCon"><canvas id="canvas"  width="1000" height="475"></canvas></div>
<img id="scream" src="https://i.imgur.com/pPEQwvY.png" width="220" style="display: none;" height="277">
<img id="na" src="https://i.imgur.com/xaDKbl5.png" width="220" style="display: none;" height="277">
<img id="sa" src="https://i.imgur.com/gq4ir9S.png" width="220" style="display: none;" height="277">
<img id="eu" src="https://i.imgur.com/loh0yHZ.png" width="220" style="display: none;" height="277">
<img id="af" src="https://i.imgur.com/6QH0iGS.png" width="220" style="display: none;" height="277">
<img id="as" src="https://i.imgur.com/qDN59oQ.png" width="220" style="display: none;" height="277">
<img id="au" src="https://i.imgur.com/65ifB8V.png" width="220" style="display: none;" height="277">
<div id="hover"></div>
<script>
      function getMousePos(canvas, evt) {
        var rect = canvas.getBoundingClientRect();
        return {
          x: evt.clientX - rect.left,
          y: evt.clientY - rect.top
        };
      }
      var canvas = document.getElementById('canvas');
      var context = canvas.getContext('2d');

      canvas.addEventListener('mousedown', function(evt) {
        var mousePos = getMousePos(canvas, evt);
        var message = [];
        message.x = mousePos.x;
        message.y = mousePos.y;
        writeMessage(message);
      }, false);
  
  canvas.addEventListener('mousemove', function(evt) {
        var mousePos = getMousePos(canvas, evt);
        var message = [];
        message.x = mousePos.x;
        message.y = mousePos.y;
        showMap(message);
      }, false);
      
      var floor = 0, loc;
$(document).ready(function () {
  start();
});
function start() {
var canvas = document.getElementById('canvas'),
    ctx = canvas.getContext('2d');
    var img = document.getElementById("scream");
    ctx.drawImage(img,10,10);
  var locations = [[765, 207], [765, 213], [222, 143.5], [182, 137.5], [193, 133.5], [218, 133.5], [425, 105.5], [432, 121.5], [651, 228.5]]; //hk, sz, ny, chicago, grand rapids, montreal, london, paris, mumbai
for (var l = 0; l < locations.length; l++) {
  ctx.beginPath();
ctx.arc(locations[l][0],locations[l][1],7,0,2*Math.PI);
ctx.fillStyle = 'white';
ctx.fill();
ctx.lineWidth = 2;
ctx.strokeStyle = 'gray';
ctx.stroke();
  if (l == 20)
    break;
}
  

}

function showMap(hovered) {
      $('#hover').css('display', 'none');
  if (floor) {
    var con = [[[640,203, "https://map.viamichelin.com/map/carte?map=viamichelin&z=10&lat=40.71305&lon=-74.00723&width=550&height=382&format=png&version=latest&layer=background&debug_pattern=.*"], [633,181, "https://map.viamichelin.com/map/carte?map=viamichelin&z=10&lat=45.50906&lon=-73.55336&width=550&height=382&format=png&version=latest&layer=background&debug_pattern=.*"], [590,194, "https://i.pinimg.com/564x/19/fe/20/19fe205d5eacf9dc76e50b605854b24b--grand-rapids-michigan-maps.jpg"], [581,215, "https://media.istockphoto.com/photos/map-of-chicago-picture-id505233467"]],[],[[303,249, "https://map.viamichelin.com/map/carte?map=viamichelin&z=10&lat=51.50022&lon=-0.1265&width=550&height=382&format=png&version=latest&layer=background&debug_pattern=.*"], [328,288, "https://map.viamichelin.com/map/carte?map=viamichelin&z=10&lat=48.85682&lon=2.35111&width=550&height=382&format=png&version=latest&layer=background&debug_pattern=.*"]],[],[[448,279, "http://www.mapsofmumbai.com/images/mumbai-map.jpg"],[599,248, "http://www.voyagesphotosmanu.com/Complet/images/hong_kong_map.jpg"],[599,242, "https://www.weather-forecast.com/locationmaps/Shenzhen.10.gif"]]];
    for (var i = 0; i < con[loc].length; i++)
    if (hovered.x > con[loc][i][0] - 7 && hovered.x < con[loc][i][0] + 7 && hovered.y > con[loc][i][1] - 7 && hovered.y < con[loc][i][1] + 7) {
      var x = event.clientX, y = event.clientY; 
      $('#hover').css({
        'background-image': 'url(' + con[loc][i][2] + ')',
        'display': 'block',
        'left': (x - 100) + 'px',
        'top': (y - 105) + 'px'
      });
    }
  }
}


function writeMessage(clicked) {
  if (!floor) {
  console.log(clicked.x + "," + clicked.y + " was clicked");
  var coords = [[19, 0, 289, 239], [175, 239, 322, 475], [400, 54, 527, 162], [372, 162, 584, 400], [527, 32, 873, 277], [760, 277, 1000, 439]]; //na, sa, eu, af, as, au
  for (var i = 0; i < coords.length; i++) 
  if (clicked.x > coords[i][0] && clicked.x < coords[i][2] && clicked.y > coords[i][1] && clicked.y < coords[i][3]) {
    $('#canvas').fadeOut();
    var image;
    loc = i;
    switch (i) {
      case 0:
        image = document.getElementById("na");
        break;
      case 1:
        image = document.getElementById("sa");
        break;
      case 2:
        image = document.getElementById("eu");
        break;
      case 3:
        image = document.getElementById("af");
        break;
      case 4:
        image = document.getElementById("as");
        break;
      case 5:
        image = document.getElementById("au");
        break;
      default:
        console.log("Error");
    }
    setTimeout(function () {
      var canvas = document.getElementById('canvas'),
    ctx = canvas.getContext('2d');
      context.clearRect(0, 0, 1000, 475);
      ctx.drawImage(image,250,0);
      $('#canvas').fadeIn();
      floor = 1;
            ctx.beginPath();
ctx.arc(15,15,15,0,2*Math.PI);
ctx.fillStyle = 'white';
ctx.fill();
ctx.lineWidth = 2;
ctx.strokeStyle = 'gray';
ctx.stroke();
      
      //locations by con
      var con = [[[640,203], [633,181], [590,194], [581,215]],[],[[303,249], [328,288]],[],[[448,279],[599,248],[599,242]]];
      
        for (var c = 0; c < con[loc].length; c++) {
                      ctx.beginPath();
ctx.arc(con[loc][c][0],con[loc][c][1],7,0,2*Math.PI);
ctx.fillStyle = 'white';
ctx.fill();
ctx.lineWidth = 2;
ctx.strokeStyle = 'gray';
ctx.stroke();
        }
      
    }, 500);
  }
  } else {
    if (clicked.x > 0 && clicked.x < 34 && clicked.y > 0 && clicked.y < 34) {
      $('#canvas').fadeOut();
      setTimeout(function () {
      context.clearRect(0, 0, 1000, 475);
      start();
      $('#canvas').fadeIn();
      floor = 0;
      }, 500);
    }
    
    
    
  }
}






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
</body>
</html>