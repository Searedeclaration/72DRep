
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
<link href="https://fonts.googleapis.com/css?family=Spectral+SC" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<style>
body {
  margin: 0;
  padding: 0;
  background: black;
  font-family: "Spectral SC", serif;
}




.eventContainer {
  color: white;
}
.taskbar {
  display: flex;
  margin: 20px;
}
.date {
  display: flex;
  width: max-content;
  background: #1b1b1b;
  padding: 5px;
  margin: auto;
}
.calendar {
  width: 22px;
  height: 22px;
  margin-right: 5px;
  position: relative;
  transition: transform 0.5s, filter 0.5s;
}
.calendar:before {
  content: '';
  position: absolute;
  border: 1px #ad9440 solid;
  width: 22px;
  top: 11px;
  transition: transform 0.5s, border-color 0.5s;
}
.calendar:after {
  content: '';
  position: absolute;
  border: 1px #ad9440 solid;
  height: 22px;
  left: 11px;
  transition: transform 0.5s, border-color 0.5s;
}
.remove {
  transform: rotate(45deg);
  border-color: maroon;
}

.eventContainer {
    width: 1000px;
    margin: auto;
}
.mainTitle {
  color: #ad9440;
}
.eventTitle {
  font-size: 70px;
  text-align: center;
}
.eventLocation {
    display: flex;
    width: 500px;
    margin: auto;
}
.eventLocation span {
  margin: auto;
}
.eventContent {
  display: grid;
  grid-template-columns: 500px 500px;
}
.box {
  border: 5px #1b1b1b solid;
  margin: 50px auto;
  width: 450px;
  height: 200px;
}
.box-title {
  background: #161616;
    font-size: 24px;
    text-align: center;
  color: #ad9440;
}
.box-content {
padding: 10px;
    height: 144px;
    overflow: auto;
  text-align: justify;
}


/*#googleMap {
  position: fixed;
  width: 100px;
  height: 100px;
  background-image: url(https://camo.githubusercontent.com/6f53eeb8108ef87ccdb03ef0a8f51e9368be6e3a/68747470733a2f2f676f6f676c656d6170732e6769746875622e696f2f6a732d6d61702d6c6162656c2f73637265656e73686f742e706e67);
  background-size: cover;
  background-position: center;
  border-top: 4px maroon solid;
  border-left: 4px maroon solid;
  bottom: 0;
  right: 0;
  cursor: pointer;
  transition: width 0.5s, height 0.5s;
}
#googleMap:hover {
  width: 110px;
  height: 110px;
}
*/
</style>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/header.html';?>





<div class="eventContainer">
  <div class="mainTitle"><div class="eventTitle">Chinese New Year Party</div>
    <div class="eventLocation"><span>Central</span><span>-</span><span>Hong Kong</span><span>-</span><span>China</span></div>
    <div class="eventDate"></div>
  </div>
  
  <div class="taskbar"><div class="date"><div class="calendar"></div>February 16, 2018
</div>
  <div class="date"><div class="calendar"></div>RSVP
    </div></div>
  
<div class="eventContent">
  <div class="box"><div class="box-title">About the Event</div><div class="box-content">Chinese New Year, also known as the Spring Festival (simplified Chinese: 春节; traditional Chinese: 春節; pinyin: Chūn Jié) in modern China, or simply the Lunar New Year, is an important Chinese festival celebrated at the turn of the traditional lunisolar Chinese calendar. Celebrations traditionally run from the evening preceding the first day, to the Lantern Festival on the 15th day of the first calendar month. The first day of the New Year falls on the new moon between 21 Jan and 20 Feb. In 2017, the first day of the Lunar New Year was on Saturday, 28 January, initiating the year of the Rooster.</div></div>
  <div class="box"><div class="box-title">Location</div><div class="box-content" style="background-image: url(http://images.indianexpress.com/2016/11/hazaribagh-759.jpg); background-size: 100%;"></div></div>
  <div class="box"><div class="box-title">Previous Events</div><div class="box-content" style="background-image: url(https://upload.wikimedia.org/wikipedia/commons/f/f1/Hendrik_van_den_Berg_-_NAN_HUA_TEMPLE-_Chinese_New_Year_2008.jpg); background-size: 100%;"></div></div>
  <div class="box"><div class="box-title">Similar Events</div><div class="box-content"></div></div>

  </div>
  
</div>

<script type="text/javascript">
$(document).ready(function () {
  $('.calendar').click(function () {
    $(this).toggleClass('remove');
  });
});

</script>