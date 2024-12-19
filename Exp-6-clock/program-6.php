<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="refresh" content="1">
	<title>Clock</title>
	<style>
		body{
			position:absolute;
			top:50%;
			left:50%;
			font-size:50px;
			transform: translate(-50%,-50%);
			color:white;
			background-color:black;
			
		}
	</style>
</head>
<body>
	<?php
		echo "<div> Asia Timings </div>";
		date_default_timezone_set("Asia/Calcutta");
		echo date("h:i:s a");
	?>
</body>
</html>