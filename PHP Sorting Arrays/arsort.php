<!DOCTYPE html>
<html>
<head>
	<title>arsort array</title>
</head>
<body>
<!-- arsort() sort array $marks in descending order according to the value. -->
<?php
	$marks = array("Shandip"=>"35", "Anil"=>"37", "Lokendra"=>"43", "Jeeban"=>"40");
	arsort($marks);

	foreach($marks as $x => $x_value) {
  		echo "Key=" . $x . ", Value=" . $x_value;
  		echo "<br>";
	}
?>
</body>
</html>