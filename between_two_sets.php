<?php 
	
	function getTotalX($arr, $brr)
	{
		// i : initial value
		$i = end($arr);
		$betweenArr = [];	

		while ($i <= $brr[0]) {	
			$statusA = 0;
			foreach ($arr as $value) {
				if ($i % $value == 0) {
					$statusA++;
				}
			}

			foreach ($brr as $value) {
				if ($value % $i == 0) {
					$statusA++;
				}
			}

			if ($statusA == (count($arr) + count($brr))) {
				$betweenArr[] = $i;
			}
			$i++;
			$statusA = 0;
		}

		return count($betweenArr);
	}

	$handle = fopen('php://stdin', 'r');

	// n : count of first array
	// m : count of second array
	// actually not used
	$nm = array_map('intval', explode(' ',rtrim(fgets($handle))));
	$n = $nm[0];
	$m = $nm[1];

	// get first array
	$arr_temp = rtrim(fgets($handle));
	$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

	// get second array
	$brr_temp = rtrim(fgets($handle));
	$brr = array_map('intval', preg_split('/ /', $brr_temp, -1, PREG_SPLIT_NO_EMPTY));

	$total = getTotalX($arr, $brr);

	print($total);
	fclose($handle);
 ?>