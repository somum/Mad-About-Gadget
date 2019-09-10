<?php
	include 'config.php';
	//echo $_GET['fname'];
	//echo "<br>";
	//echo $_GET['age'];

	$name = $_POST['fname'];
	$age = $_POST['lname'];

	$sql = "INSERT INTO online1 (fname, lname) VALUES ('$name','$age')";

	if ($conn->query($sql) === TRUE) {
		$last_id = $conn->insert_id;
		echo "New record created successfully. Last inserted ID is: " . $last_id;
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

include 'close.php';
?>