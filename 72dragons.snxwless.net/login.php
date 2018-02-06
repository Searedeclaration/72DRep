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
.login{
    position: relative;
z-index: 10;
	text-align: center;
	padding-top: 50px;
}
.login-button{
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
</style>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/header.html';?>
<div class="login">
	<h1 style="padding-bottom: 15px; color: #ad9440">Login</h1>
		<form method="post">
			<input type="text" name="u" placeholder="Username" required="required" />
			<input type="text" name="p" placeholder="Password" required="required" />
			<p class="for-button"><button type="submit" class="login-button">Login</button></p> 
		</form>
		<a class="forgot" href="#">Forgot Username or Password?</a>
	</div>
	<img class="gif" src="images/72DragonsLogo.jpg" alt="gif_logo">
<?php include $_SERVER['DOCUMENT_ROOT'].'/footer.html';?>
</body>
</html>