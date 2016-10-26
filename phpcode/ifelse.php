<!DOCTYPE html>
<html><head><title>hmm</title>

<style>

.r1 { background-color: #FF0000;
		color: #00000;
	}
	
.r2 { background-color:#00000;
		color: #FF0000;
	}

</style>
</head>
<body>
	<center>
<h1>
if else php example
</h1>
<h1><?php
echo "<h1>";
	for ($i = 0; $i < 100; $i++){
		if($i % 2 == 0 ){
				echo"<div class=\"r1\" >";
			}else{
			echo"<div class=\"r2\" >";
		}
	
		echo "* * * * * * * * * * * * * * * * *<br />";
		echo "</div>";

	}
?>
</h1>
</center>
</body>
</html>
