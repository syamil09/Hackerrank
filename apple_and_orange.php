<?php 

	function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges)
	{
		$apple = 0;
		$orange = 0;

		foreach ($apples as $key => $value) {
			if ($value + $a >= $s && $value + $a <= $t) {
				$apple++;
			}
		}

		foreach ($oranges as $key => $value) {
			if ($value + $b >= $s && $value + $b <= $t) {
				$orange++;
			}
		}
		echo "$apple\n";
		echo "$orange\n";
	}

	// echo "masukkan koordinat rumah a b : ";
	$handle = fopen('php://stdin', "r");

	// house coordinate
	fscanf($handle, "%[^\n]", $st_temp);
	$st = explode(' ', $st_temp);
	$s = intval($st[0]);
	$t = intval($st[1]);

	// tree coordinate
	fscanf($handle, "%[^\n]", $ab_temp);
	$ab = explode(' ', $ab_temp);
	$a = intval($ab[0]);
	$b = intval($ab[1]);

	// count of apples and orange
	fscanf($handle, "%[^\n]", $mn_temp);
	$mn = explode(' ', $mn_temp);
	$m = intval($mn[0]);
	$n = intval($mn[1]);

	// each apple coordinate from tree
	fscanf($handle, "%[^\n]", $apples_temp);
	$apples = array_map('intval', preg_split('/ /', $apples_temp, -1, PREG_SPLIT_NO_EMPTY));

	// each orange coordinate from tree
	fscanf($handle, "%[^\n]", $oranges_temp);
	$oranges = array_map('intval', preg_split('/ /', $oranges_temp, -1, PREG_SPLIT_NO_EMPTY));

	countApplesAndOranges($s, $t, $a, $b, $apples, $oranges);
	fclose($handle);
?>