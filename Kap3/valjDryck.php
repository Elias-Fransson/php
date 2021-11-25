<?php 
	declare(strict_types=1);
	function valjDryck(string $dryck='vatten') {
		return "Vald dryck är $dryck.";
	}
	echo valjDryck();
	echo valjDryck('Te');
	echo valjDryck(null);

?>
