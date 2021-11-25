<!DOCTYPE HTML>
<html lang="sv">
	<head>
		<title>Caesarkryptering</title>
	</head>
	<body>
		<form method="POST">
		<h1>Skriv!</h1>
			<input type="radio" name="kryptera_dekryptera" id="kryptera" value="kryptera">
			<label for="kryptera"> Kryptera</label>
			<input type="radio" name="kryptera_dekryptera" id="dekryptera" value="dekryptera">
			<label for="dekryptera"> Dekryptera</label>
			<input type="text" name="text" size="50">
			<input type="Submit" value="Skicka">
			<input type="reset" value="Ångra">
		</form>
		
<?php
	$valja =$_POST['kryptera_dekryptera'];
	$text =$_POST["text"];
	filter_var($_POST,FILTER_UNSAFE_RAW);
	$alfabet ="abcdefghijklmnopqrstuvwxyzåäöa"; 
	$alfabet ="ABCDGEFGHIJKLMNOPQRSTUVWXYZÅÄÖA";
	for ($i=0;$i<mb_strlen($text);$i++){
	if ($valja == "kryptera"){
	$bokstav1=substr($text,$i, 1);
	$bokstav2=strpos($alfabet, $bokstav1);
	$bokstav2++;
	echo$bokstav1 = substr($alfabet, $bokstav2, 1);
	}else{
	$bokstav1=substr($text,$i,1);
	$bokstav2=strpos($alfabet, $bokstav1);
	$bokstav2 --;
	echo$bokstav3 = substr($alfabet,$bokstav2, 1);
		
		}
}		
?>

	</body>
</html>