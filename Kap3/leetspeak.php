<?php

$text=filter_input(INPUT_POST, "text", FILTER_SANITIZE_STRING);


$lower=['a', 'b', 'e', 'g', 'i', 'o', 's', 't', 'z'];
$leet=['4', '8', '3', '9', '1', '0', '5', '7', '2'];


$leetText=str_ireplace($lower, $leet, $text);

?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>LeetSpeak (L3375p34k) (4.3)</title>
	</head>
	<body>
		<form method="POST">
			Text: <input type="text" name="text" size=50><br>
			<input type="Submit" value"Skicka">
			</form>
		<?php
			echo "$text in 1347 is...<br><q>$leetText</q>";
		?>
		</body>
</html>