<?php 
	$handle = fopen ("php://stdin","r");
	$line = fgets($handle);

	$explode = explode(':', $line);

	$getFormat = substr($explode[2], 2,3);
	$newFormat = $explode[0].':'.$explode[1].':'.substr($explode[2], 0,2);
	
	if (trim($getFormat) === "PM") {
		if ($explode[0] != 12) {
			$newFormat = ($explode[0]+12).':'.$explode[1].':'.substr($explode[2], 0,2);
		}	
	} elseif (trim($getFormat) === "AM" && $explode[0] == 12) {
		$newFormat = '00:'.$explode[1].':'.substr($explode[2], 0,2);
	}

	print("\n$newFormat");
	fclose($handle);
 ?>