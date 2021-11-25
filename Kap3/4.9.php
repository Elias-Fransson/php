<?php
declare	(strict_types=1);

$artal=Date("Y");


if(isset($_GET['artal'])) {
	
		$artal=filter_input(INPUT_GET, 'artal', FILTER_VALIDATE_INT);
		if($artal>2050 || $artal<1988) {
			$artal=date("Y");
		}
		
}	
?>
<!DOCTYPE HTML>
<html lang="sv">
	<head>
		<title>Vasaloppet (4.9)</title>
		<meta charset="UTF-8">
	</head>
	
	<body>
		<form method="GET">
			Valfritt år:<input type="number" name="artal" value="<?=$artal;?>"><br>
			<input type="submit" value="Skicka">
			</form>
			<p>Vasaloppet genomförs de följande 5 åren följande datum:<br>
			<?php
				for($i=0;$i<5;$i++) {
						echo $artal+$i . " den " . vasaloppet($artal+$i) . "<br>";
				}
			?>
			</p>
	</body>
</html>
<?php


function vasaloppet(int $ar):string {

		$datum=strtotime("First Sunday of March $ar");
	
		$datum=strtotime("+5 years" , $datum);

		return date("m-d", $datum);
}