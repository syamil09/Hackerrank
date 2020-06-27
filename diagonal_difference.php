<?php 
	function diagonalDifference($arr) {
		// initial value of each diagonal
	    $ltr = 0; 
	    $rtl = 0;

	    // looping rows
	    foreach ($arr as $i => $val1) {
	    	// looping columns 
	        foreach ($val1 as $j => $val2) {
	        	// get diagonal number right to left
	            if ($i == $j) {
	                $ltr += $val2;
	            } 
	            // get diagonal number left to right
	            if ($j == count($val1) - ($i+1) ) {
	                $rtl += $val2;
	            }
	        }

	    }
	    // difference diagonal (absolute number)
	    return abs($ltr - $rtl);
	}

	$fptr = fopen('php://stdin', "w");

	$n = intval(trim(fgets(STDIN)));

	$arr = array();

	for ($i = 0; $i < $n; $i++) {
	    $arr_temp = rtrim(fgets(STDIN));

	    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
	}

	$result = diagonalDifference($arr);

	print($result);

	fclose($fptr);
 ?>