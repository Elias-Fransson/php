 <?php
 //Ta emot text och radera "farliga" tecken
 $text=filter_input(INPUT_POST, "text" , FILTER_SANITIZE_STRING);
 
 //Konvertera texten så att alla ord börjar med en versal
 $text=ucwords($text);
 
 // Ta bort alla mellanslag
 $text=str_replace(" " ,"",$text);
 
 // Sätt första bokstäven till gemener
 $text=lcfirst($text);		
 ?>
 
 <!DOCTYPE HTML>
 <html>
	<head>
		<meta charset="UTF-8">
		<title>camelCase (4.2)</title>
	</head>
	<body>
	
		<form method="POST">
			Text: <input type="text" name="text" size=50><br>
		</form>
	<?php
		
			echo "$text";
	?>
	</body>
</html>