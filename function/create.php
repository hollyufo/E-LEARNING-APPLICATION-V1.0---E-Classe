<?php
include './../config/db.php';
if(isset($_POST['save'])){
    // taking values from the form
    $fName =  $_POST['name'];
    $Email = $_POST['Email'];
    $Phone =  $_POST['phone'];
    $Enrollnumber = $_POST['enroolnum'];
    $dateofadmin = $_POST['dateofadmission'];
        
    // adding it to the data base
    $sql = "INSERT INTO students VALUES (null,'$fName', 
        '$Email','$Phone','$Enrollnumber','$dateofadmin')";
        
    if(mysqli_query($connection, $sql)){
        header('location: ./../student.php?add=true');
    } else{
        echo "ERROR: Hush! Sorry $sql. " 
            . mysqli_error($conn);
    }
        
    // Close connection
    mysqli_close($conn);
    }else{
        header('location: ./../student.php?message=true');
    }

?>