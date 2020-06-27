<?php

function birthday($s, $d, $m) {
    // initial value of possibility to divide the chocolate(array of integer)
    $ways = 0;

    // loop array untill before lenght array minus $m(month) to prevent index out of bounds
    for ($i = 0; $i <= count($s) - $m; $i++){

        $sum = 0; //initial value sum of segment the bar

        // loop length month to get indexes to sum
        for ($j = 0; $j < $m; $j++){
            $sum += $s[$i + $j];
        }

        // if total sum equal to day add possibility
        if ($sum == $d) {
            $ways++;
        }
        
    }
    return $ways;
}

$fptr = fopen('php://stdin', "r");

$n = intval(trim(fgets(STDIN)));

$s_temp = rtrim(fgets(STDIN));

$s = array_map('intval', preg_split('/ /', $s_temp, -1, PREG_SPLIT_NO_EMPTY));

$dm = explode(' ', rtrim(fgets(STDIN)));

$d = intval($dm[0]);

$m = intval($dm[1]);

$result = birthday($s, $d, $m);

print($result);

fclose($fptr);
