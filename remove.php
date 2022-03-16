<?php
		include './config/db.php';
		if(!$_SESSION['login']){
			header("location:index.php");
			die;
		 }
		$student_id = $_GET['id'];
		mysqli_query($connection, "DELETE FROM students WHERE id=$student_id");
		$_SESSION['message'] = "Address deleted!"; 
		header("location: student.php?delete=true");