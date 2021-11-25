<?php

declare (strict_types=1);

$namn=$_POST['namn'];

?>
<!DOCTYPE HTML>
<html lang="sv">
	<head>
		<title>Jämt delbart tal</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<h1>Jämför tal med 5</h1>
		<form method="POST">
		Tal: <input type="text" name="namn"><br>
			<input type="Submit" name="Skicka"><br>
			<input type="Reset" name="Ångra"><br>
		</form>
<?php	
	
	echo ($namn);
	
?>