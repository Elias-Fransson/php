<?php
declare (strict_types=1);

// Ta emot uppgifter från formuläret
$artal=filter_input(INPUT_POST, "namn", FILTER_SANITIZE_STRING);
$fodelsedag=filter_input(INPUT_POST, "namn", FILTER_SANITIZE_STRING);

?>


<!DOCTYPE HTML>		
<html lang="sv">
	<head>
		<title>Födelsedag :D (4.7)</title>
		<meta charset="UTF-8">
		<h1>Födelsedag!!</h1>
	</head>
	<body>
		<form method="GET">
		Skriv din födelsedag!:<input type="date" name="fodelsedag"><br>
		<input type="Submit" value="Skicka"><br>
		<input type="Reset" value="Ångra"><br>
		
		</form>
<?php
	function födelsedag(int $ar): string {
		
	return date("Y-m-d");
	}

?>
	</body>

</html>	