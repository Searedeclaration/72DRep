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
<link href="https://fonts.googleapis.com/css?family=Spectral+SC:300" rel="stylesheet">
<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<style>
body {
  padding: 0;
  margin: 0;
  background: black;
  font-family: "Spectral SC", serif;
}
#user-row {
  width: 100%;
  height: 520px;
  position: absolute;
  top: calc(50% - 260px);
  display: flex;
  overflow-x: auto;

}
.user-container {
  position: relative;
  width: 400px;
  height: 500px;
  background: #1b1b1b;
  border: 2px #595959 solid;
  margin: auto;
}
.user-title {
  width: 100%;
  height: 98px;
  border-bottom: 2px #030202 solid;
  color: #CFCECE;
  text-align: center;
  font-size: 36px;
  line-height: 98px;
}
.user-assignmentList {
  overflow: auto;
  width: 100%;
  height: 400px;
  color: #FFFFFF;
}
.task {
    height: 150px;
    width: 380px;
    padding-top: 2px;
    background: #161616;
    padding: 0 10px;
    border-bottom: 2px #030202 solid;
}
.task-title {
  text-align: center;
  font-size: 18px;
  margin-bottom: 5px;
}
.task-details {
  display: flex;
}
.task-dates {
  width: 199px;
  height: 76px;
  line-height: 38px;
  border-right: 1px #030202 solid;
}
.task-notes {
  width: 199px;
  height: 70px;
  border-left: 1px #030202 solid;
  padding: 3px;
  overflow: auto;
  text-align: justify;
}
.buttons {
  width: 100%;
  display: flex;
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
<div id="user-row">
<div class="user-container">
  <div class="user-title">David Moreno</div>
  <div class="user-assignmentList">
            <?php
	$query = "SELECT * FROM webdevAssigned WHERE staffID = 1 ORDER BY dateDue ASC";
	  $result = mysqli_query($db,$query);
  while($data = mysqli_fetch_array($result)) {
  echo '<div class="task"><div class="task-title">'.$data[1].'</div><div class="task-details"><div class="task-dates"><div class="task-dateAssigned">Assigned: '.$data[5].'</div><div class="task-dateDue">Due: '.$data[6].'</div></div><div class="task-notes">Notes: '.$data[7].'</div></div><div class="buttons"><button>Completed</button><button>Edit</button><button>Reassign</button><button>Remove</button></div></div>';
  }
?>
  </div>
</div>
</div>
</body>
</html>