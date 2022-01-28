<?php
	$index = $_GET['index'];
	$students = file_get_contents('./assets/json/student.json');
	$students = json_decode($students, true);
	unset($students[$index]);
	$students = json_encode($students, JSON_PRETTY_PRINT);
	file_put_contents('./assets/json/student.json', $students);

	header('location: student.php');
?>