<?php
   include($_SERVER['DOCUMENT_ROOT']."/s140630php/config.php");
   
      if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
      $val = $_POST['city'];
      
      if( $_POST['type'] == 'city' ) {
           $query = "SELECT * FROM filmFestivals where CITY = '$val';";
           } else if( $_POST['type'] == 'country' ) {
           $query = "SELECT * FROM filmFestivals where COUNTRY = '$val';";
           } else if( $_POST['type'] == 'search' ) {
           $query = "SELECT * FROM filmFestivals where FESTIVAL LIKE '%$val%';";
           }


   
     $result = mysqli_query($db,$query);
  while($value = mysqli_fetch_array($result)) {
  	$information[] = $value;
  }
  
  echo json_encode($information);
  mysqli_close($db);
?>