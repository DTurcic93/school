	<!DOCTYPE html>
<html>
	<head>
		<title>class</title>
	</head>
	<body>
		<form method="POST" action="uploadSS.php">
			<input type="text" name="Fname" placeholder="first name">
			<input type="text" name="Lname" placeholder="last name">			
			<select name="classID">
				<?php
					require_once("DbConfig.php");
					$conn=DbConfig::getInstance();	

					$qClass="SELECT * FROM class";
					$sClass=$conn->prepare($qClass);
					$cResult=$sClass->execute();
					$cResult=$sClass->fetchAll();

					foreach ($cResult as $row )
						{									
							?> "<option  value=<?php echo $row['id']; ?>><?php echo $row['title']; ?></option>";<?php
	  					}?>
	  		</select>
			<button type='submit' value='upload'>Add</button>
		</form>			
	</body>
</html>




