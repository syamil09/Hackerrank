<?php 

function kangaroo($x1, $v1, $x2, $v2) {

	if ($v1 <= $v2) {
		return 'NO';
	}

	while ($x1 < $x2) {
		$x1 += $v1;
		$x2 += $v2;

		if ($x1 == $x2) {
			return 'YES';
		} 
	}

	return 'NO';

}

$handle = fopen('php://stdin', 'r');

fscanf($handle, "%[^\n]", $x1v1x2v2_temp);
$x1v1x2v2 = explode(' ', $x1v1x2v2_temp);

$x1 = intval($x1v1x2v2[0]);
$v1 = intval($x1v1x2v2[1]);
$x2 = intval($x1v1x2v2[2]);
$v2 = intval($x1v1x2v2[3]);

print(kangaroo($x1, $v1, $x2, $v2));

fclose($handle);

 ?>