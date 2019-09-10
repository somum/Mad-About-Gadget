<?php 
	include 'config.php';
?>
<html>
    <head>
		<title>Form validation</title>
	</head>
	<body>
		<form action="online2.php" method="post">
			First Name:<br>
				<input type="text" name="fname"> <br>
			Last Name: <br>
				<input type="text" name="lname"> <br>
			<input type="submit">	
		</form>
        
        
	</body>
</html>

<?php 
	include 'close.php';
?>