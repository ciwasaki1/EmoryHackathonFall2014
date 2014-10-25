<?php  
// Connects to your Database 
$link = mysql_connect($my_db, $db_user, $db_pass)
or die ("Could not connect to mysql because ".mysql_error());
 
mysql_select_db($database)
or die ("Could not select database because ".mysql_error());
 
$data = mysql_query("SELECT calories, steps, distance FROM workout") 
or die(mysql_error()); 

echo "<table border cellpadding=3>"; 
while($info = mysql_fetch_array( $data )) 
{ 
echo "<tr>"; 
echo "<th>Calories Burned:</th> <td>".$info['calories'] . "</td> ";
echo "<th>Steps Taken:</th> <td>".$info['steps'] . "</td> "; 
echo "<th>Distance:</th> <td>".$info['distance'] . "</td> ";
} 
echo "</table>"; 
?>