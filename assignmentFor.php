<?php

function sumOfSeries() {
    $sum = 0;
    for ( $i = 1; $i <= 100; $i++ ) {
        $sum += $i;
    }
    return $sum;
}

$result = sumOfSeries();
echo $result;
