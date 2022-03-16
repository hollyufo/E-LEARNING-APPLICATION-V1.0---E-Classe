<?php
		include './config/db.php';
		if(!$_SESSION['login']){
			header("location:index.php");
			die;
		 }
		 include './controllers/time.php';
		$course_id = $_GET['id'];
		mysqli_query($connection, "DELETE FROM course WHERE id=$course_id");
		$_SESSION['message'] = "Address deleted!";
		// uesed get to send a message for crud operation
		header('location: course.php?delete=true');