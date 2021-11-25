<?php
declare (strict_types=1);
	// Öppnar utforskaren och visar dess specifika innehåll
$dir_handle = opendir("C:\\Windows");

?>

<!DOCTYPE HTML>
<html lang="sv">
	<head>	
		<title>Visa mapp(4.12)</title>
		<meta charset="UTF-8">	
	</head>
	<body>
		<h1>Visa mappinnehåll</h1>
		<form method="POST">
		Ange mapp: <input type="text" name="namn"><br>
				<input type="Submit" name="Skicka"><br>
				<input type="Reset" name="Ångra"><br>
		</form>
		
<?php
	
	if(is_resource($dir_handle))
	{ 
		while(($file_name = readdir($dir_handle)) == true)
		{
			echo("Fil namn:<br>" . $file_name);
			echo "<br>" ;
			echo("namn:<br>" . $namn);
		}
		
		// stänger utforskaren
		closedir($dir_handle);
	}
	else 
	{		// Informerar om att uforskaren inte kunde öppnas.
	echo("Utforskaren kunde inte öppnas.");
	
	}
?>
	</body>
</html>