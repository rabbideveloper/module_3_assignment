<?php

function checkEvenOdd( $num ) {
    if ( $num % 2 == 0 ) {
        return "{$num} is Even Number";
    } else {
        return "{$num} is Odd Number";
    }
}

$result = checkEvenOdd( 5 );
echo $result;
