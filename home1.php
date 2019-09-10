
<html>
	<head>
		<title>Form validation</title>
        <link href="https://fonts.googleapis.com/css?family=Imprima" rel="stylesheet">
        <link href="mAg.css" rel="stylesheet" type="text/css">
        
	</head>
	<body>

     
        
		<form action="home1.php" method="POST" style="margin-top:50px; margin-left:150px;">
            
            <label class="ilebel">Username</label> <input type="text" name="uname"><br> 
			<label class="ilebel">Review</label><input style="padding:10px; padding-right:50px;" type="text" name="ureview">
            <input style="" class="ibtn"type="submit" name="submitbtn">
		</form>
        
      <?php  
        if(isset($_POST['submitbtn'])){
        
            include 'config1.php';
        
            $name = $_POST['uname'];
	        $comment = $_POST['ureview'];

	$sql = "INSERT INTO reviewdata (uname, ureview) VALUES ('$name','$comment')";

	if ($conn->query($sql) === TRUE) {
		$last_id = $conn->insert_id;
		//echo "New record created successfully. Last inserted ID is: " . $last_id;
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
        }
   ?>     
        
        <table>
	<?php 
				include 'config1.php';
                $sql = "SELECT * FROM reviewdata";
				$phone_query_result = mysqli_query($conn,$sql) or die(mysql_error());
				if(mysqli_num_rows($phone_query_result) > 0)
				{
					while ($row = mysqli_fetch_array($phone_query_result))
					{
			?>
				<tr>
                    <td style="font-size:25px;"><?php echo $row['uname']; ?><span> :</span></td>
					<td style="font-family: 'Imprima', sans-serif;"><?php echo $row['ureview']; ?></td>					 
				</tr>
				<?php	
				}
			}
				
			?>
	</table>
	</body>
    <pre>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </pre>
    <div class="footer">
&copy 2017 madaboutgadget.com - All Rights Reserved
</div>
    
</html>

<?php 
	include 'close.php';
?>