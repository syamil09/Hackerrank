<?php 
	$handle = fopen("php://stdin", "r");
	$nStudent = intval(trim(fgets($handle)));

	$grades = [];

	for ($i=0; $i < $nStudent; $i++) { 
		$grades_item = intval(trim(fgets($handle)));
		if ($grades_item >= 38 && $grades_item % 5 > 2) {
			$grades_item += 5 - ($grades_item % 5); 
		}
		$grades[] = $grades_item;
	}

	foreach ($grades as $value) {
		print("$value\n");
	}
	fclose($handle);
 ?>