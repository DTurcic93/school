<?php

	require_once("DbConfig.php");
	$conn=DbConfig::getInstance();

	$cId=$_GET['classId'];
	$cName=$_GET['className'];

	echo"<a href='index.php'>home</a>";
	echo"<h3>{$cName}</h3>";

	$q="SELECT * FROM student INNER JOIN class_student ON student.id=class_student.student_id WHERE class_student.class_id = $cId";

	$stmt=$conn->prepare($q);
	$res=$stmt->execute();
	$res=$stmt->fetchall();

	foreach ($res as $row ) {
		echo"<p>{$row['fname']} {$row['lname']}</p>";
	}