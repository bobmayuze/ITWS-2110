<?php

require 'config.php';

if (isset($_GET['Students'])) {
    $value = $_GET['Students'];
}
if (isset($_GET['Grades'])) {
    $value = $_GET['Grades'];
}
if($value == 'Students'){

	try {
	     $dbh = new PDO('mysql:host=localhost;dbname=websyslab9', $config['DB_USERNAME'], $config['DB_PASSWORD']);
	     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    echo 'Connected to database<br />';


	    /*** prepare the SQL statement ***/
	    $stmt = $dbh->prepare("SELECT * FROM students ORDER BY lname");

	    /*** bind the paramaters ***/
	    /***$stmt->bindParam(':animal_id', $animal_id, PDO::PARAM_INT);
	    $stmt->bindParam(':animal_name', $animal_name, PDO::PARAM_STR, 5);***/

	    /*** execute the prepared statement ***/
	    $stmt->execute();

	    /*** fetch the results ***/
	    $result = $stmt->fetchAll();

	    /*** loop of the results ***/
	    foreach($result as $row)
	        {
	        echo $row['rin'].' ';
	        echo $row['fname'].' ';
	        echo $row['lname'].'<br />';
	        }

	    /*** close the database connection ***/
	    $dbh = null;
	}
	catch(PDOException $e)
	    {
	    echo $e->getMessage();
	    }
	}



if($value == 'Grades'){
	$dbh = new PDO('mysql:host=localhost;dbname=websyslab9', $config['DB_USERNAME'], $config['DB_PASSWORD']);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	echo 'Connected to database<br />';


	$stmt = $dbh->prepare("SELECT `grade` FROM `grades` WHERE `grade` > 90");

	$stmt->execute();

    $result = $stmt->fetchAll();
 
	$count = 0;

	foreach($result as $row)
	  {
	  	$count += 1;
	  }
	echo "90 - 100: ".$count."<br>";

	$stmt = $dbh->prepare("SELECT `grade` FROM `grades` WHERE `grade` > 80 AND `grade` < 90");

	$stmt->execute();

    $result = $stmt->fetchAll();
 
	$count = 0;

	foreach($result as $row)
	  {
	  	$count += 1;
	  }
	echo "80 - 89: ".$count."<br>";

	$stmt = $dbh->prepare("SELECT `grade` FROM `grades` WHERE `grade` > 70 AND `grade` < 80");

	$stmt->execute();

    $result = $stmt->fetchAll();
 
	$count = 0;

	foreach($result as $row)
	  {
	  	$count += 1;
	  }
	echo "70 - 79: ".$count."<br>";

	$stmt = $dbh->prepare("SELECT `grade` FROM `grades` WHERE `grade` > 60 AND `grade` < 70");

	$stmt->execute();

    $result = $stmt->fetchAll();
 
	$count = 0;

	foreach($result as $row)
	  {
	  	$count += 1;
	  }
	echo "60 - 69: ".$count."<br>";

	$stmt = $dbh->prepare("SELECT `grade` FROM `grades` WHERE `grade` < 60");

	$stmt->execute();

    $result = $stmt->fetchAll();
 
	$count = 0;

	foreach($result as $row)
	  {
	  	$count += 1;
	  }
	echo "Below 60: ".$count."<br>";
	}


?>