<?php
	for ($i=1;$i<=100;$i++) {
	if ($i%10==0&&$i&7!=0) {
		echo "<span style='color:blue; font-weight:bold'>$i<br></span>";
	}	
	else if ($i&5==0&&$i&7!=0&&$i%10!=0) {
		echo "<span style='font-family:bold'>$i</span>";
	}
?>	