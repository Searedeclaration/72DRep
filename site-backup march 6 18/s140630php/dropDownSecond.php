<?php
   include($_SERVER['DOCUMENT_ROOT']."/s140630php/config.php");
   
      if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
      $choice = $_POST['choice'];
        if( $_POST['choice'] == 'eventType' ) {
      	$query = "SELECT DISTINCT eventType FROM 72Devent;";
      	} else if( $_POST['choice'] == 'community' ) {
      	$query = "SELECT DISTINCT community FROM 72Devent;";
      	} else if( $_POST['choice'] == 'city' ) {
      	$query = "SELECT DISTINCT city FROM 72Devent;";
      	} else if( $_POST['choice'] == 'state' ) {
      	$query = "SELECT DISTINCT state FROM 72Devent;";
      	} else if( $_POST['choice'] == 'country' ) {
      	$query = "SELECT DISTINCT country FROM 72Devent;";
      	} else if( $_POST['choice'] == 'communitySponsor' ) {
      	$query = "SELECT DISTINCT communitySponsor FROM 72Devent;";
      	}
     $result = mysqli_query($db,$query);
  while($value = mysqli_fetch_array($result)) {
  	if ($value != null) {
  	$information[] = $value;
  	}
  }
  
  echo json_encode($information);
  mysqli_close($db);
?>