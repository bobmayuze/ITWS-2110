<?php 


   require 'config.php';

   try {
      $conn = new PDO('mysql:host=localhost;dbname=websyslab9', $config['DB_USERNAME'], $config['DB_PASSWORD']);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// we could create a new table like this:
  // $tbl_sql = 'CREATE TABLE orders (id int not null, custid int, prodid int, PRIMARY KEY (id))';
  // $dbconn->exec($tbl_sql);
  // echo "Table created. ";



      $newrcd = "INSERT INTO `courses`(`crn`, `prefix`, `number`, `title`, `section`, `year`) VALUES (162534,'CSCI','2100','computer stuff',1,2013)";
      $conn->exec($newrcd);
      printf("Course inserted");
  
      $newrcd = "INSERT INTO `students`(`rin`, `fname`, `lname`, `Address1`, `Address2`, `City`, `State`, `Zip`, `Zip+4`) VALUES (661876455,'Robert','Morris','Pick Street', '', 'Troy', 'NY', 12180, 121803245)";
      $conn->exec($newrcd);
      printf("Student inserted");
  

      $newrcd = "INSERT INTO `students`(`rin`, `fname`, `lname`, `Address1`, `Address2`, `City`, `State`, `Zip`, `Zip+4`) VALUES (661876465,'Robert','Norris','Oak Street', '', 'Ney York', 'NY', 12140, 121403245)";
      $conn->exec($newrcd);
      printf("Student inserted");
  

      $newrcd = "INSERT INTO `students`(`rin`, `fname`, `lname`, `Address1`, `Address2`, `City`, `State`, `Zip`, `Zip+4`) VALUES (661876325,'Denise','Richards','Lucky Street', '', 'Lost', 'CA', 12400, 124003545)";
      $conn->exec($newrcd);
      printf("Student inserted");
  
   $newrcd = "INSERT INTO `students`(`rin`, `fname`, `lname`, `Address1`, `Address2`, `City`, `State`, `Zip`, `Zip+4`) VALUES (411876455,'Lucky','Dude','Willow Street', '', 'Troy', 'NY', 12180, 121809876)";
      $conn->exec($newrcd);
      printf("Student inserted");
  

   $newrcd = "INSERT INTO `students`(`rin`, `fname`, `lname`, `Address1`, `Address2`, `City`, `State`, `Zip`, `Zip+4`) VALUES (661873645,'Stacey','Morris','Pop Avenue', '', 'Making', 'NY', 12159, 121593243)";
      $conn->exec($newrcd);
      printf("Student inserted");
  

   $newrcd = "INSERT INTO `students`(`rin`, `fname`, `lname`, `Address1`, `Address2`, `City`, `State`, `Zip`, `Zip+4`) VALUES (661846554,'Robert','Lock','Lit Street', '', 'Troy', 'NY', 12180, 121803225)";
      $conn->exec($newrcd);
      printf("Student inserted");
  

   $newrcd = "INSERT INTO `students`(`rin`, `fname`, `lname`, `Address1`, `Address2`, `City`, `State`, `Zip`, `Zip+4`) VALUES (661364754,'Dave','Picky','Burdett Ave', '', 'Troy', 'NY', 12180, 121803245)";
      $conn->exec($newrcd);
      printf("Student inserted");
  

   $newrcd = "INSERT INTO `students`(`rin`, `fname`, `lname`, `Address1`, `Address2`, `City`, `State`, `Zip`, `Zip+4`) VALUES (661874651,'Lacy','Dirk','Burdett Ave', '', 'Troy', 'NY', 12180, 121803245)";
      $conn->exec($newrcd);
      printf("Student inserted");
  

   $newrcd = "INSERT INTO `students`(`rin`, `fname`, `lname`, `Address1`, `Address2`, `City`, `State`, `Zip`, `Zip+4`) VALUES (661836879,'Richard','Plot','Burdett Ave', '', 'Troy', 'NY', 12180, 121803245)";
      $conn->exec($newrcd);
      printf("Student inserted");
  

   $newrcd = "INSERT INTO `students`(`rin`, `fname`, `lname`, `Address1`, `Address2`, `City`, `State`, `Zip`, `Zip+4`) VALUES (661576453,'Bob','Rich','Burdett Ave', '', 'Troy', 'NY', 12180, 121803245)";
      $conn->exec($newrcd);
      printf("Student inserted");
  

  $newrcd = "INSERT INTO `grades`(`id`, `crn`, `rin`, `grade`) VALUES (1,162534,661876455,90)";
      $conn->exec($newrcd);
      printf("Grade inserted");
  
  $newrcd = "INSERT INTO `grades`(`id`, `crn`, `rin`, `grade`) VALUES (2,162534,661876465,90)";
      $conn->exec($newrcd);
      printf("Grade inserted");
  
  $newrcd = "INSERT INTO `grades`(`id`, `crn`, `rin`, `grade`) VALUES (3,162534,661876325,70)";
      $conn->exec($newrcd);
      printf("Grade inserted");
  
  $newrcd = "INSERT INTO `grades`(`id`, `crn`, `rin`, `grade`) VALUES (4,162534,411876455,80)";
      $conn->exec($newrcd);
      printf("Grade inserted");
  
  $newrcd = "INSERT INTO `grades`(`id`, `crn`, `rin`, `grade`) VALUES (5,162534,661873645,89)";
      $conn->exec($newrcd);
      printf("Grade inserted");
  
  $newrcd = "INSERT INTO `grades`(`id`, `crn`, `rin`, `grade`) VALUES (6,162534,661846554,99)";
      $conn->exec($newrcd);
      printf("Grade inserted");
  
  $newrcd = "INSERT INTO `grades`(`id`, `crn`, `rin`, `grade`) VALUES (7,162534,661364754,91)";
      $conn->exec($newrcd);
      printf("Grade inserted");
  
  $newrcd = "INSERT INTO `grades`(`id`, `crn`, `rin`, `grade`) VALUES (8,162534,661874651,100)";
      $conn->exec($newrcd);
      printf("Grade inserted");
  
  $newrcd = "INSERT INTO `grades`(`id`, `crn`, `rin`, `grade`) VALUES (9,162534,661836879,50)";
      $conn->exec($newrcd);
      printf("Grade inserted");
  
  $newrcd = "INSERT INTO `grades`(`id`, `crn`, `rin`, `grade`) VALUES (10,162534,661576453,20)";
      $conn->exec($newrcd);
      printf("Grade inserted");
  }
  catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
    }


 ?>