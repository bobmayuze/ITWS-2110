<?php

require 'config.php';

$con=mysqli_connect($config['DB_HOST'],$config['DB_USERNAME'],$config['DB_PASSWORD'], 'websyslab9');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM students ORDER BY lname");

while($row = mysqli_fetch_array($result))
  {
  echo $row['fname'];
  echo " " . $row['lname'];
  echo " " . $row['rin'];
  echo "<br>";
  }

mysqli_close($con);
?>