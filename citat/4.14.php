<?php
declare (strict_types=1);

$file = file('citat.txt');
$citat = array_rand($file, 1);

?>


<!DOCTYPE HTML>
<html lang="sv">
	<head>
		<meta charset="UTF-8">
		<title>Random citat</title>
	</head>
	<body>
		<h1>Citat.txt</h1>
	
		<blockquote cite="citat.txt">
		<?= $file[$citat] ?>
		
		</blockquote>
	</body>
</html>


