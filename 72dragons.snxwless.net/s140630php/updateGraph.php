<?php
   include($_SERVER['DOCUMENT_ROOT']."/s140630php/config.php");
   
      	if ($db->connect_errno) {
    		echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
      
     	$epics = array();
     	$stories = array();
        $query = "SELECT pageID, page FROM webdevPage where type = 'Epic';";
	$result = mysqli_query($db,$query);
  	while($values = mysqli_fetch_array($result)) {
  		array_push($epics, $values);
  	}
  	
  	if( $_POST['choice'] == 'percent' ) {
           $query = "SELECT page, parent, percentComplete FROM webdevPage";
        } else if( $_POST['choice'] == 'mockup' ) {
           $query = "SELECT page, parent, hasMockup FROM webdevPage";
        } else if( $_POST['choice'] == 'web' ) {
           $query = "SELECT page, parent, hasWeb FROM webdevPage";
        } else if( $_POST['choice'] == 'progress' ) {
           $query = "SELECT page, parent, inProgress FROM webdevPage";
        } else if( $_POST['choice'] == 'database' ) {
           $query = "SELECT page, parent, inDatabase FROM webdevPage";
        } else if( $_POST['choice'] == 'complete' ) {
           $query = "SELECT page, parent, isComplete FROM webdevPage";
        }
	$result = mysqli_query($db,$query);
 	while($values = mysqli_fetch_array($result)) {
  		array_push($stories, $values);
  	}
 	
 	$numOfEpics = count($epics);
 	$numOfStories = count($stories);
 	$group = array(
 		array(), //epicname
 		array()  //storychoicenumber
 	);
 	for($x = 0; $x < $numOfEpics; $x++) {
 		array_push($group[0], $epics[$x][1]);
 		for($y = 0; $y < $numOfStories; $y++) {	
    			if ($epics[$x][0] == $stories[$y][1]) {
    				array_push($group[1], $stories[$y][2]);
    			}
    		}
	}
  
  echo json_encode($group);
  mysqli_close($db);
?>