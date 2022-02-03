<?php
		include './config/db.php';
		$student_id = $_GET['id'];
		mysqli_query($connection, "DELETE FROM students WHERE id=$student_id");
		$_SESSION['message'] = "Address deleted!"; 
		echo "<script>window.location.href = './course.php';</script>";