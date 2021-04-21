<!DOCTYPE html>
<html>
<head>
	<title>Writing Text File</title>
</head>
<body>
	<?php
		$fp = fopen("hello.txt","w+") or die("Unable to open file for write operation");
		$str = "Hello guys!!";
		fwrite($fp, $str);
		echo fread($fp, filesize("hello.txt"));
		fclose($fp);
	?>
</body>
</html>