<?php


	require_once("DbConfig.php");
	$conn=DbConfig::getInstance();

	$query="SELECT * FROM class";
	$stmt=$conn->prepare($query);
	$result=$stmt->execute();
	$result=$stmt->fetchAll();

	echo"<a href='upload.html'>Add new class</a>";
	echo"<br>";
	echo"<a href='uploadS.php'>Add new student</a><br>";
	echo"<h3>Classes:</h3>";

	foreach ($result as $row) {
		echo"<a href='students.php?classId={$row['id']}&className={$row['title']}'>{$row['title']}</a><br>";


	}



