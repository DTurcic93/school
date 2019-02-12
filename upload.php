<?php

	require_once("DbConfig.php");
	$conn=DbConfig::getInstance();

	$title=$_POST['title'];
	$sql = "INSERT INTO class ( title) VALUES (?)";
	$stmt= $conn->prepare($sql);
	$stmt->execute([$title]);

	header('Location: index.php');

	?>