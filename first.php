<html>

<head>
	<h1>online</h1>
</head>
<body>
<?php
	
		
		$n=4;
		$result=0;
	
		for($i=1;$i<=$n;$i++){
			
			for($j=1;$j<=$i;$j++){
				$result+=$j;
			}
			
		}
		echo $result;
?>
</body>
</html>