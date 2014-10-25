<?php
$con=mysqli_connect("104.131.121.27","root","emory2014","my_db");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_query($con,"INSERT INTO tbl_workouts (cburned, steps, distance)
VALUES (10, 10,10)");

mysqli_query($con,"INSERT INTO tbl_workouts (cburned, steps, distance)
VALUES (10, 10,10)");

mysqli_close($con);
?>