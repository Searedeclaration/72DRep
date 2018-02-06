<?php
   include($_SERVER['DOCUMENT_ROOT']."/s140630php/config.php");
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$page = $_POST['page'];
	$staff = $_POST['staff'];
	$dateDue = $_POST['dateDue'];
	$notes = $_POST['notes'];
	
	$query = "SELECT firstName, lastName FROM webdevStaff WHERE ID = '$staff'";
	  $result = mysqli_query($db,$query);
  while($data = mysqli_fetch_array($result)) {
  $firstName = $data[0];
  $lastName = $data[1];
  }
	
$today = date("Y/m/d");

	$query = "INSERT INTO webdevAssigned (page, staffID, firstName, lastName, dateAssigned, dateDue, additionalNotes) VALUES ('$page', $staff, '$firstName', '$lastName', '$today', '$dateDue', '$notes');";
  
	$db->query($query);
  
	mysqli_close($db);
	
	$alert = $firstName." ".$lastName." was assigned the task of ".$page." to be completed by ".$dateDue.".";
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
body {
  padding: 0;
  margin: 0;
  background: black;
  font-family: "Spectral SC", serif;
  
}
select{
  width: auto;
  margin-right: 20px;
  min-width: 100px;
  background-color: maroon;
  color: white;
  font-size: 14px;
  border: none;
}
button {
  border: none;
  width: 100px;
    background: #030202;
    color: white;
    padding: 10px;
    font-size: 14px;
  transition: background 0.5s;
  cursor: pointer;
  margin: 3px;
}
button:hover {
  background: maroon;
}
button:active {
  background: #A21616;
}
 button:focus{
  outline: none;
  border-color: maroon;
}
</style>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/header.html';?>
<form action = "" method = "post">
  <select id="page" name="page">
        <?php
	$query = "SELECT page FROM webdevPage";
	  $result = mysqli_query($db,$query);
  while($data = mysqli_fetch_array($result)) {
  echo '<option value="'.$data[0].'">'.$data[0].'</option>';
  }
?>
<option value="Other"> Other (See Notes)</option>
  </select>
    <select id="staff" name="staff">
            <?php
	$query = "SELECT ID, firstName, lastName FROM webdevStaff";
	  $result = mysqli_query($db,$query);
  while($data = mysqli_fetch_array($result)) {
  echo '<option value="'.$data[0].'">'.$data[1].' '.$data[2].'</option>';
  }
?>
  </select>
      <input type="date" name="dateDue">
  <input type="text" name="notes">
    <input type="submit">
</form>
<div id="notify"><?php echo $alert; ?></div>
</body>
</html>