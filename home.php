<?php
	include 'config.php';
	/*
		1. mysql connection 
		2. embedding php within html
	*/
	
	
?>
<html>
	<head>
		<title>Section A1</title>
	</head>
	<body>
		<table border="1">
			<tr>
				<th>ID</th>
				<th>First name</th>
				<th>Last name</th>
			</tr>
			<?php 
				$sql = "SELECT * FROM students";
				$student_query_result = mysqli_query($conn,$sql) or die(mysql_error());
				if(mysqli_num_rows($student_query_result) > 0)
				{
					while ($row = mysqli_fetch_array($student_query_result))
					{
			?>
						<tr>
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['firstname']; ?></td>
							<td><?php echo $row['lastname']; ?></td>
						</tr>
			<?php	}
				}
				
			?>
		</table>
	</body>
</html>
<?php
	include 'close.php';
?>









<?php 
/*
$query = "SELECT lid,nick FROM location";
$location_query_result = mysqli_query($conn,$query) or die(mysql_error());
if(mysqli_num_rows($location_query_result) > 0)
{
	while ($row = mysqli_fetch_array($location_query_result))
	{
		
		echo $row['lid']; 
		echo $row['nick']; 
		
	}
}
*/
?>