<?php
// প্রথম মডিউল শেষে আপনার এসাইনমেন্ট জমা দিন

// How can you use the ternary operator in PHP to shorten this if statement?

$num = 5;
// Using if statement
/*
if ($num > 0) {
$result = 'positive';
}
if ($num < 0 {
$result = ‘negative’;
if( $num < -10) {
$result = ‘value is below -10’;
}
}
else {
$result = ‘its zero’;
}
*/

$result = ($num > 0)? 'positive' : ( $num < 0 ? ( $num <-10 ? 'value is below -10' : 'negative')  : 'its zero');

echo $result;

?>
