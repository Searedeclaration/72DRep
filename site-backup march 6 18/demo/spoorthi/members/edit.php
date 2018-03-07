<?php
//require 'members.php';

$con = mysqli_connect("localhost","root","","72dragonsdb");

$sql = "SELECT * FROM members table";
	$result=mysqli_query($con,$sql);
	
	echo '<table id="mmbrSheet">';
    	echo "<tbody>" ; echo "<tr>";
    		echo '<th>Name</th>';
			echo '<th>Gender</th>';
			echo '<th>Native Language</th>';
			echo '<th>Other Language1</th>';
			echo '<th>Other Language2</th>';
			echo '<th>Skills/Expertise</th>';
			echo '<th>Educational Background</th>';
			echo '<th>Roles in Film Industry</th>';
			echo '<th>Interests in Film Industry</th>';
			echo '<th>Hobbies</th>';
			echo '<th>Country of Citizenship</th>';
			echo '<th>Country of Residence</th>';
			echo '<th>Address</th>';
			echo '<th>State</th>';
			echo '<th>City</th>';
			echo '<th>Zip</th>';
			echo '<th>Telepone number Primary</th>';
			echo '<th>Telepone number Secondary</th>';
			echo '<th>Email Address</th>';
			echo '</tr>';
			
			
			$count=mysqli_num_rows($result);
			for($i=0;$i<$count;++$i){
				while($row1 = mysqli_fetch_assoc($result));
				echo "<tr>";
				echo "<td>$Name</td>";echo "<td>$Gender</td>";echo "<td>$Native Language</td>";echo "<td>$Other languages #1</td>";
				echo "<td>$Other languages #2</td>";echo "<td>$Skills/Expertise</td>";echo "<td>$Educational Background</td>";echo "<td>$Roles in the Film Industry</td>";
				echo "<td>$Interests in the Film Industry</td>";echo "<td>$Hobbies</td>";echo "<td>$Country of Citizenship</td>";echo "<td>$Country of Residence</td>";
				echo "<td>$Address</td>";echo "<td>$State</td>";echo "<td>$City</td>";echo "<td>$Zip Code</td>";echo "<td>$Telepone number Primary</td>";
				echo "<td>$Telepone number Secondary</td>";echo "<td>$Email Address</td>";
				echo "</tr>";
			}
	
echo '<?table>';

mysqli_close($con);
?>