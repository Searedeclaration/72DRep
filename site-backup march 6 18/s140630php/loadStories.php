<?php
   include($_SERVER['DOCUMENT_ROOT']."/s140630php/config.php");
   
      if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
   $request = $_POST['storyID'];
   $title = $_POST['storyTitle'];
   if (isset($_POST['storyTitle'])) {
   	$query = "SELECT * FROM webdevPage WHERE parent = '$request' AND page = '$title';";
   } else {
   	$query = "SELECT * FROM webdevPage WHERE parent = '$request';";
   }
   
     $result = mysqli_query($db,$query); 
  while($value = mysqli_fetch_array($result)) {
  	$information[] = $value;
  }
  
  echo json_encode($information);
  mysqli_close($db);
?>