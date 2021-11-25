<!DOCTYPE html>
<html
	<header>
		<meta charset="UTF-8">
		<title>Palindrom</title>
	</header>
	<body>
		<h1>Skriv in valfri t</h1>
		<form method="POST">
		Text: <input type="text" name="text" size=50><br>
		<input type="submit" value="Skicka">
		<input type="reset" value="Rensa">
	</form>
	<pre>

<?php

	
	$text=filter_input(INPUT_POST, "text", FILTER_SANITIZE_STRING);
	$check=str_replace(" ", "", $text);
	$check=str_replace(" ", "", $check);
	$check=mb_strtolower($check);
	
	$isPalindrom= ($check==strrev($check))
?>
		</pre>
	</body>
</html>
	
	
<?php
	if ($isPalindrom) {
		echo "$text är ett palindrom";
	} else {
		echo "$text är inget palindrom";
		
	}
?>
	</body>
</html>