<!DOCTYPE html>
<html>
<head>
	<title>rsort array</title>
</head>
<body>
<!-- rsort() sort array $names in descending order depends on what you have entered in array alphabet or number. -->
<?php
	$names = array("Shandip", "Anil", "Lokendra", "Jeeban");
	rsort($names);

	$nameslength = count($names);
	for($x = 0; $x < $nameslength; $x++) {
  		echo $names[$x];
  		echo "<br>";
	}
?>
</body>
</html>