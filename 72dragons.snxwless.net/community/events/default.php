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
<link rel="stylesheet" type="text/css" href="default.css">
<link href="https://fonts.googleapis.com/css?family=Spectral+SC" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="default.js"></script>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/header.html';?>
<div id="sidebar">
  
  <div id="eventInfo">
        <div id="eventPreview"></div>
    <div id="close">Close</div>
    <div id="eventText">
    <div id="eventTitle"></div>
              <div id="eventDate"></div>
    <div id="eventDescription"></div>
      </div>
  </div>
  
  <div id="search">
    <h1>Events</h1>
    <div class="searchBar">
      <input type="text" id="searchInput" name="search" placeholder="Search"><button id="searchButton" onclick="search('search', $('#searchInput').val())">&#10004;</button>
    </div><br>
    <span>OR</span>
    <br><br>
    <div class="dropDown">
          <select id="country" name="country" onchange="select('country', $(this).val())">
  <option value="">Country</option>
      <?php
	$countryQuery = "SELECT DISTINCT COUNTRY FROM filmFestivals ORDER BY COUNTRY ASC";
	  $countryResult = mysqli_query($db,$countryQuery);
  while($country = mysqli_fetch_array($countryResult)) {
  echo '<option value="'.$country[0].'">'.$country[0].'</option>';
  }
?>
  </select>
  <br>
    <span>OR</span>
    <br><br>
      <select id="city" name="city" onchange="search('city', $(this).val())">
  <option value="">City</option>
    <?php
	$cityQuery = "SELECT DISTINCT CITY FROM filmFestivals ORDER BY CITY ASC";
	  $cityResult = mysqli_query($db,$cityQuery);
  while($city = mysqli_fetch_array($cityResult)) {
  echo '<option value="'.$city[0].'">'.$city[0].'</option>';
  }
?>
</select>
    </div>
  </div>
</div>
<div id="globe"></div>
</div>
<div id="trash">
    <?php
	$query = "SELECT * FROM filmFestivals ORDER BY ID LIMIT 15;";
	  $result = mysqli_query($db,$query);
  while($event = mysqli_fetch_array($result)) {
  echo '<script type="text/javascript">',
     'createBubble("'.$event[1].'","'.$event[2].'","'.$event[3].'","'.$event[4].'","'.$event[5].'","'.$event[6].'", "'.$event[7].'");',
     '</script>';
  }
  echo '<script type="text/javascript">$("#trash").remove();</script>';
  mysqli_close($db);
?>
</div>
</body>
</html>