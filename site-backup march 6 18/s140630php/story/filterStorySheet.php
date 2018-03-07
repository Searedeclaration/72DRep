<?php
include($_SERVER['DOCUMENT_ROOT']."/s140630php/config.php");
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$hasMockup = $_POST['hasMockup'];
$inProgress = $_POST['inProgress'];
$inDatabase = $_POST['inDatabase'];
$storyType = $_POST['storyType'];
$isComplete = $_POST['isComplete'];
$search = $_POST['search'];
$hasWebpage = $_POST['hasWebpage'];
$perComp = $_POST['perComp'];
$perCompType = $_POST['perCompType'];

$query = "Select * from webdevPage";

if ($hasMockup != 'All') {
	$addToQuery[] = " hasMockup = '".$hasMockup."'";
}
if ($inProgress != 'All') {
	$addToQuery[] = " inProgress = '".$inProgress."'";
}
if ($inDatabase != 'All') {
	$addToQuery[] = " inDatabase = '".$inDatabase."'";
}
if ($isComplete != 'All') {
	$addToQuery[] = " isComplete = '".$isComplete."'";
}
if ($hasWebpage != 'All') {
	$addToQuery[] = " hasWeb = '".$hasWebpage."'";
}
if (isset($storyType)) {
	$addToQuery[] = " type = '".$storyType."'";
}
if ($search != '') {
	$addToQuery[] = " page LIKE '%".$search."%'";
}
/*if ($perCompType != 'none') {
	$addToQuery[] = " percentComplete LIKE '".$perComp."'%";
}*/

$addToLength = count($addToQuery);
$i = 0;
if ($addToLength != 0) {
foreach ($addToQuery as $value) {
	if ($i == 0) {
		$query .= " WHERE";
	}
	if ($i == $addToLength - 1) {
		$query .= $value; //.";"
	} else {
		$query .= $value." AND";
	}
	$i++;
}
}

switch ($perCompType) {
	case 'equals':
		$query .= " WHERE percentComplete = '$perComp'";
		break;
	case 'greater':
		$query .= " WHERE percentComplete >= '$perComp'";
		break;
	case 'less':
		$query .= " WHERE percentComplete <= '$perComp'";
		break;
}

$result = mysqli_query($db,$query);
while($data = mysqli_fetch_array($result)) {
	$parent = '';	
	$query = "Select * from webdevPage;";
	$checkResult = mysqli_query($db,$query);
	while($check = mysqli_fetch_array($checkResult)) {
		if ($data[3] == $check[0]) {
			$parent = $check[1];
			break;
		}
	}
	$row = "<tr><td><input type='hidden' value=".$data[0].">".$data[1]."</td><td>".$data[2]."</td><td><input type='hidden' value=".$data[3].">".$parent."</td><td>".$data[4]."</td>";
			if ($data[5] == 1) {
				$row .= "<td><div class='table-options'><div class='table-file'><i class='fas fa-file-alt'></i></div><div class='table-comment'><i class='fas fa-comment'></i></div></div>".$data[5]."</td>";
			} else {
				$row .= "<td>".$data[5]."</td>";
			}
			if ($data[6] == 1) {
				$row .= "<td><div class='table-options'><div class='table-file'><i class='fas fa-file-alt'></i></div><div class='table-comment'><i class='fas fa-comment'></i></div></div>".$data[6]."</td>";
			} else {
				$row .= "<td>".$data[6]."</td>";
			}
			if ($data[7] == 1) {
				$row .= "<td><div class='table-options'><div class='table-file'><i class='fas fa-file-alt'></i></div><div class='table-comment'><i class='fas fa-comment'></i></div></div>".$data[7]."</td>";
			} else {
				$row .= "<td>".$data[7]."</td>";
			}
			if ($data[8] == 1) {
				$row .= "<td><div class='table-options'><div class='table-file'><i class='fas fa-file-alt'></i></div><div class='table-comment'><i class='fas fa-comment'></i></div></div>".$data[8]."</td>";
			} else {
				$row .= "<td>".$data[8]."</td>";
			}
			$row .= "<td>".$data[9]."</td>";
			if ($data[10] == 1) {
				$row .= "<td><div class='table-options'><div class='table-file'><i class='fas fa-file-alt'></i></div><div class='table-comment'><i class='fas fa-comment'></i></div></div>".$data[10]."</td>";
			} else {
				$row .= "<td>".$data[10]."</td>";
			}
			$row .= "</tr>";
	
	$information[] = $row;
}

echo json_encode($information);

mysqli_close($db);
?>