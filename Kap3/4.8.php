<?php
 declare (strict_types=1);
 $artal=Date("Y");
 $paskDagen=Date("m-d");
 
 
 if(isset($_GET['artal]'])) {
		$artal=filter_input(INPUT_GET, 'artal', FILTER_VALIDATE_INT);
		if($artal>2037 || $artal<1970) {
			$artal=date("Y");
		}
 }
 
?>
 
<!DOCTYPE HTML>
<html lang="sv">
	<head>
		<title>Påskdagen i april!</title>
		<meta charset="UTF-8">
	</head>
	<body>
		
<?php


?>

	</body>
	
</html>