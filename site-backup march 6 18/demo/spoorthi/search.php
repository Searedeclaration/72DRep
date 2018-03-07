<?php
$n= $_POST["name"];
$conn = mysqli_connect("localhost","root","","videos");
if(!$conn){
	
	die("Connection failed: " .mysqli_connect_error());
}
else{
	
	if(isset( $search)){
	$sql = "SELECT name,url FROM vlog where name='n'";
    if ($result=mysqli_query($conn,$sql))
  {
	   $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
       $name = $row['name'];
	   $url =  $row['url'];
	   echo $name;
	   echo "<embed src='$url' width='60' height='15'></embed>";
	
	
}}}
	?>
	
	