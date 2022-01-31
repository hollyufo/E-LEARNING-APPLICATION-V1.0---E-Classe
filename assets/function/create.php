<?php
include './db.php'; 
    
  // taking values from the form
  $fName =  $_POST['name'];
  $Email = $_POST['Email'];
  $Phone =  $_POST['phone'];
  $Enrollnumber = $_POST['enroolnum'];
  $dateofadmin = $_POST['dateofadmission'];
    
  // adding it to the data base
  $sql = "INSERT INTO students VALUES (null,'$fName', 
      '$Email','$Phone','$Enrollnumber','$dateofadmin')";
    
  if(mysqli_query($conn, $sql)){
    header('location: ../../student.php');
  } else{
      echo "ERROR: Hush! Sorry $sql. " 
          . mysqli_error($conn);
  }
    
  // Close connection
  mysqli_close($conn);
  ?>