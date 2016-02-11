<?php

$servername = "localhost";
$username = "testuser";
$password = "password";
$dbname = "testuser";



$con=mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM resources");

while($row = mysqli_fetch_array($result))
  {
	
  echo $row['user'] . ": " . $row['url'] . "<br />";
  
}

mysqli_close($con);

?>