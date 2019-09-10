<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "hplaptop2";
	// Create connection

	$conn = new mysqli($servername, $username, $password,$dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	echo "Connected successfully" . "<br >";
?> 
	
<!doctype html>
<html>
<head>
<title>Samsung S8</title>
<link rel="stylesheet" type="text/css" href="Samsung_s8.css">
<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
</head>

<body background='Web-background2.jpg'>
<div id="wrapper">
	       
<div id="header">

	<div id="img">
		<img src="mag1.png" title="Mad about Gadget"width="120px" height="100px"/>
	</div>
		<span class="slogan">Discover your product !</span>
		
</div>

<div class ="navbar">
<ul>
	<li><a href="#home">HOME</a></li>
	<li><a href="#NEWS">NEWS</a></li>
	<li><a href="#VIDEOS">VIDEOS</a></li>
	<li><a href="#REVIEWS">REVIEWS</a></li>
	<li><a href="#Others">OTHERS</a></li>
	<li><a href="#About us">ABOUT US</a></li>
	
</ul>
</div>
	
	<div class= "phone_name">
	<h2 class="font">HP 450 G3</h2>
	</div>
	
	<div class="box1">
		<img src="hp_probook450g3.jpg" width= "500px" height="320px"/>
	</div>
	<div style="margin-left:100px">
	<table>
	<?php 
				$sql = "SELECT * FROM hplaptopsecond";
				$phone_query_result = mysqli_query($conn,$sql) or die(mysql_error());
				if(mysqli_num_rows($phone_query_result) > 0)
				{
					while ($row = mysqli_fetch_array($phone_query_result))
					{
			?>
				<tr>
					<td><h3><?php echo $row['id']; ?></h3></td>
					<td><h3><?php echo $row['Category']; ?></h3></td>					
					<td><h4><?php echo $row['Type']; ?></h4></td> 
					<td><h5><?php echo $row['ans']; ?></h5></td>  
				</tr>
				<?php	
				}
			}
				
			?>
	</table>
    </div>
	<footer>
		&copy 2017 madaboutgadget.com - All Rights Reserved
	</footer>
	</body>
	</html>
