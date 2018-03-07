<?php
   include($_SERVER['DOCUMENT_ROOT']."/s140630php/config.php");
   
      if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
      $choice = $_POST['choice'];
      $query = "SELECT * FROM 72Devent WHERE 1";
      
        if( !empty($choice[0]) ) { /*Switch doesnt like this for some reason so i have to use if-else*/
      		$query .= " AND eventType = '$choice[0]' ";
      	}
      	if( !empty($choice[1]) ) {
      		$query .= " AND community = '$choice[1]' ";
      	}
      	if( !empty($choice[2]) ) {
      		$query .= " AND city = '$choice[2]' ";
      	}
      	if( !empty($choice[3]) ) {
      		$query .= " AND state = '$choice[3]' ";
      	}
      	if( !empty($choice[4]) ) {
      		$query .= " AND country = '$choice[4]' ";
      	}
      	if( !empty($choice[5]) ) {
      		$query .= " AND communitySponsor = '$choice[5]' ";
      	}
      $query .= ' ORDER BY eventType ASC;';
      $result = mysqli_query($db,$query);
  	while($value = mysqli_fetch_array($result)) {
  		$information[] = $value;
  	}
  
  echo json_encode($information);
  mysqli_close($db);
?>