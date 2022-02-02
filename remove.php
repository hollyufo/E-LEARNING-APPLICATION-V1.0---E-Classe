<?php
		include './assets/function/db.php';
		$student_id = $_GET['id'];
		mysqli_query($conn, "DELETE FROM students WHERE id=$student_id");
		$_SESSION['message'] = "Address deleted!"; 
		header('location: student.php');