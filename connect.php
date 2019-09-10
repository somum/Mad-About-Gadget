<?php
$dbhost='localhost';
$username='root';
$password='';
$db='solution';
mysql_connect("$dbhost","$username","$password");
//echo "Connected";

mysql_select_db($db);

$sql="select * from table_sc";

$records= mysql_query($sql);


?>

<html>
<head>
<title>Information</title>
</head>
<body>
<table border="1">
<tr>
<th>Name</th>
<th>Address </th>
</tr>

<?php
while($solution=mysql_fetch_assoc($records)){
	echo"<tr>";
	echo"<td>".$solution['Name']."</td>";
	echo"<td>".$solution['Address']."</td>";
	echo"</tr>";
}
?>

</table>
</body>
</html>