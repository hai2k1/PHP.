<?php
// số nguyên int
$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));
// float
$x = 10.365;
var_dump(is_float($x));
//infinity
$x = 1.9e411;
var_dump($x);
//NaN
$x = acos(8);
var_dump($x);

?>