<?php

require 'config.php';

$con=mysqli_connect($config['DB_HOST'],$config['DB_USERNAME'],$config['DB_PASSWORD'], 'websyslab9');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }



$result = mysqli_query($con,"SELECT `grade` FROM `grades` WHERE `grade` > 90"); 
$count = 0;

while($row = mysqli_fetch_array($result))
  {
  	$count += 1;
  }
echo "90 - 100: ".$count."<br>";

$result = mysqli_query($con,"SELECT `grade` FROM `grades` WHERE `grade` > 80 AND `grade` < 90"); 
$count = 0;

while($row = mysqli_fetch_array($result))
  {
  	$count += 1;
  }
echo "80 - 89: ".$count."<br>";

$result = mysqli_query($con,"SELECT `grade` FROM `grades` WHERE `grade` > 70 AND `grade` < 80"); 
$count = 0;

while($row = mysqli_fetch_array($result))
  {
  	$count += 1;
  }
echo "70 - 79: ".$count."<br>";

$result = mysqli_query($con,"SELECT `grade` FROM `grades` WHERE `grade` > 60 AND `grade` < 70"); 
$count = 0;

while($row = mysqli_fetch_array($result))
  {
  	$count += 1;
  }
echo "60 - 69: ".$count."<br>";

$result = mysqli_query($con,"SELECT `grade` FROM `grades` WHERE `grade` < 60"); 
$count = 0;

while($row = mysqli_fetch_array($result))
  {
  	$count += 1;
  }
echo "0 - 60: ".$count."<br>";

mysqli_close($con);
?>


