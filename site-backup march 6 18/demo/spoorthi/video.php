<?php

$target_dir = "uploads/"; //DIRECTORY WHERE THE VIDEO FILES WILL BE SAVED
$target_file = $target_dir . basename($_FILES["file"]["name"]); //PATH OF THE VIDEO FILE UPLOADED
$uploadOk = 1;
$name= $_POST["name"]; //NAME OF THE FILE GIVEN


$conn = mysqli_connect("localhost","root","","videos");

	$sql="INSERT INTO vlog(name,url)
values('$name','$target_file ')";

//Checking for size, type, and for repetition

$videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//checking if video already exists in the directory
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Checking the file size
if ($_FILES["file"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($videoFileType != "mp4" && $videoFileType != "wmv" && $videoFileType != "flv"
&& $videoFileType != "avi" ) {
    echo "Sorry, only mp4, wmv, flv & avi files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} 
else 
{
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) 
	{
        echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
		if($conn->query($sql))
		{   
           echo "New record is inserted successfully";
        }
        else {
        echo "Sorry, there was an error uploading your file.";
        }
	}
}
$conn->close();
?>