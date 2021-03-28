<!DOCTYPE html>
<html>
<head>
	<title>ksort array</title>
</head>
<body>
<!-- ksort() sort array $marks in ascending order according to the key. -->
<?php
	$marks = array("Shandip"=>"35", "Anil"=>"37", "Lokendra"=>"43", "Jeeban"=>"40");
	ksort($marks);

	foreach($marks as $x => $x_value) {
  		echo "Key=" . $x . ", Value=" . $x_value;
  		echo "<br>";
	}
?>
</body>
</html>