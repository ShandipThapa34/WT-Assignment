<!DOCTYPE html>
<html>
<head>
	<title>asort array</title>
</head>
<body>
<!-- asort() sort array $marks in ascending order according to the value. -->
<?php
	$marks = array("Shandip"=>"35", "Anil"=>"37", "Lokendra"=>"43", "Jeeban"=>"40");
	asort($marks);

	foreach($marks as $x => $x_value) {
  		echo "Key=" . $x . ", Value=" . $x_value;
  		echo "<br>";
	}
?>
</body>
</html>