<?php

	require_once("DbConfig.php");
	$conn=DbConfig::getInstance();


	$Fname=$_POST['Fname'];
	$Lname=$_POST['Lname'];
	$ids=$_POST['classID'];
	$cID=$ids[0];


	


	$qStudent="INSERT INTO student (fname, lname) VALUES ('$Fname', '$Lname')";
	$sStudent=$conn->prepare($qStudent);
	$sResult=$sStudent->execute();

	$query="SELECT id FROM student WHERE fname='$Fname' AND lname='$Lname'";
	$stmt=$conn->prepare($query);
	$result=$stmt->execute();
	$result=$stmt->fetchAll();

	foreach ($result as $row ) {
		$studentId=$row['id'];
	}	

	$qClassStudent="INSERT INTO class_student (class_id,student_id)VALUES('$cID','$studentId')" ;
	$stmt2=$conn->prepare($qClassStudent);
	$result=$stmt2->execute();



	header('Location: index.php');