<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="refresh" content="1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
</head>
<body>
	<?php
		$states="Mississippi Alabama Texas Massachusetts Kansas";
		$split=explode(" " , $states);
		$statesArray=[];
		echo "<br>Original Array: <br>";
		foreach ($split as $i => $value) {
			echo "states[$i]=$value<br>";

		}

		foreach($split as $states)
		{
			if(preg_match('/xas$/',$states))
				$statesArray[0]=$states;
		}
		foreach($split as $states)
		{
			if(preg_match('/^K.*s$/',$states))
				$statesArray[1]=$states;
		}
		foreach($split as $states)
		{
			if(preg_match('/^M.*s$/',$states))
				$statesArray[2]=$states;
		}

		foreach($split as $states)
		{
			if(preg_match('/a$/',$states))
				$statesArray[3]=$states;
		}
		


		echo "<br>Resultant Array: <br>";
		for($i=0;$i<count($statesArray);$i++)
			echo "stateslist[$i]=$statesArray[$i]<br>";

	?>
</body>
</html>