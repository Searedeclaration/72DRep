<?php

$conn = mysqli_connect("localhost","root","","videos");

	$sql = "SELECT name,url FROM vlog";
     if ( ! isset( $show ) )
	 {		 
    if ($result=mysqli_query($conn,$sql))
  {
	$count=mysqli_num_rows($result);
	
	while ($count!=0)
	{
       $row = mysqli_fetch_array($result);
       $name = $row['name'];
	   $url =  $row['url'];
	   echo $name;
	   echo "<embed src='$url' width='140' height=140'></embed>";
	   $count--;
    }

}
}
mysqli_close($conn);
?>