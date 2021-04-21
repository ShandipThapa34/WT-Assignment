<!DOCTYPE html>
<html>
<head>
	<title>Pattern Matching</title>
</head>
<body>
	<?php
		$str = "Hello guys!!";
		$pattern = "/dolor/";
		echo preg_match_all($pattern,$str);
	?>
</body>
</html>