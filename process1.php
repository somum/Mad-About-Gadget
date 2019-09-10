<?php
	include 'config1.php';
	//echo $_GET['fname'];
	//echo "<br>";
	//echo $_GET['age'];

	$name = $_POST['uname'];
	$comment = $_POST['ureview'];

	$sql = "INSERT INTO reviewdata (uname, ureview) VALUES ('$name','$comment')";

	if ($conn->query($sql) === TRUE) {
		$last_id = $conn->insert_id;
		echo "New record created successfully. Last inserted ID is: " . $last_id;
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

include 'close1.php';
?>