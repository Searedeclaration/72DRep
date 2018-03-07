<?php 


$con = mysqli_connect("localhost","root","","72dragonsdb");
   
	
    
	$Name= $_POST["n"];
	$Gender= $_POST["g"];
	$native1= $_POST["nl1"];
	$other1= $_POST["ol1"];
	$other2= $_POST["ol2"];
	$skills= $_POST["sk"];
	$edu= $_POST["eb"];
	$interest= $_POST["int"];
	$hobbies= $_POST["hobbies"];
	$add= $_POST["Address"];
	$state= $_POST["State"];
	$cname1= $_POST["cName1"];
	$cname2= $_POST["cName2"];
	$city= $_POST["City"];
	$zip= $_POST["zip"];
	$tel1= $_POST["tel1"];
	$tel2= $_POST["tel2"];
	$email= $_POST["e1"];
	
	$sql="INSERT INTO Members Table(`Name`, `Gender`, `Native Language`, `Other laguages #1`, `Other laguages #2`, 
	`Skills/Expertise`, `Educational Background`, `Roles in the Film Industry`, `Interests in the Film Industry`, `Hobbies`,
	`Country of Citizenship`, `Country of Residence`, `Address`, `State`, `City`, `Zip Code`, `Telepone number  Primary`, 
	`Telepone number  Secondary`, `Email Address`)) values('$Name','$Gender','$native1','$other1','$other2','$skills', '$edu', 
	'$interest', '$hobbies', '$add', '$state','$cname1','$cname2','$city','$zip','$tel1','$tel2','$email')";
	if(ISSET($_POST['submit'])){
		if(mysqli_query($con,$sql))
		{   
           echo "New record is inserted successfully";
        }
        else {
        echo "Sorry, there was an error uploading your file.";
        }
	}
	mysqli_close($conn);
 
?>