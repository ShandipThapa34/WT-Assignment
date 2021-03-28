<!DOCTYPE html>
<html>
<head>
	<title>sort array</title>
</head>
<body>
<!-- sort() sort array $names in ascending order depends on what you have entered in array alphabet or number. -->
<?php
	$names = array("Shandip", "Anil", "Lokendra", "Jeeban");
	sort($names);

	$nameslength = count($names);
	for($x = 0; $x < $nameslength; $x++) {
  		echo $names[$x];
  		echo "<br>";
	}
?>
</body>
</html>