<?php
declare(strict_types=1);
		// Öppnar den angivna filen
$file = file('citat.txt');


?>




<!DOCTYPE HTML>
<html lang="sv">
	<head>
		<meta charset="UTF-8">
		<title>Citatsidan</title>
	</head>
	<body>
		<h1>Citat.txt</h1>


<?php
		// Skriver ut ett random citat
		echo("Slumpat citat:<br>" . $file);
		
?>
	</body>
</html>