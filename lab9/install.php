<?php
$host="localhost"; 

$root="root"; 
$root_password="ldcmcSELlbO5"; 

$user='newuser';
$pass='newpass';
$db="websyslab9"; 

    try {
        $dbh = new PDO("mysql:host=$host", $root, $root_password);

        $dbh->exec("CREATE DATABASE if not exists `$db`;
                CREATE USER '$user'@'localhost' IDENTIFIED BY '$pass';
                GRANT ALL ON `$db`.* TO '$user'@'localhost';
                FLUSH PRIVILEGES;") 
        or die(print_r($dbh->errorInfo(), true));

    } catch (PDOException $e) {
        die("DB ERROR: ". $e->getMessage());
    }

$sql = "USE websyslab9";
$dbh->exec($sql);
 
$sql = "CREATE TABLE if not exists courses (
crn INT NOT NULL AUTO_INCREMENT, 
prefix VARCHAR(4) NOT NULL,
`number` SMALLINT(4) NOT NULL,
title VARCHAR(255) NOT NULL,
section INT(1) NOT NULL,
year INT(4) NOT NULL,
PRIMARY KEY(crn)
)";


 $dbh->exec($sql);



$sql = "CREATE TABLE IF NOT EXISTS `students` (
  `rin` int(9) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `Address1` varchar(250) NOT NULL,
  `Address2` varchar(250) NOT NULL,
  `City` varchar(250) NOT NULL,
  `State` varchar(250) NOT NULL,
  `Zip` int(5) NOT NULL,
  `Zip+4` int(9) NOT NULL,
  PRIMARY KEY (`rin`)
)";

$dbh->exec($sql);

$sql = "CREATE TABLE IF NOT EXISTS `grades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `crn` int(11) NOT NULL,
  `rin` int(9) NOT NULL,
  `grade` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
)"; 


 $dbh->exec($sql);
 echo "Database created";
?>