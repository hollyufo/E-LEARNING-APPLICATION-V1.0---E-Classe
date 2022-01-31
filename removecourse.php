<?php
		include './assets/function/db.php';
		$course_id = $_GET['id'];
		mysqli_query($conn, "DELETE FROM course WHERE id=$course_id");
		$_SESSION['message'] = "Address deleted!"; 
		header('location: course.php');