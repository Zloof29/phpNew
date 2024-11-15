<?php

$number1 = 5;
$number2 = 10;
$number3 = '20';
$fruit = 'apple';
$bool1 = true;
$bool2 = false;
$null = null;

// implicit conversion
$result = $number1 + $number2;
$result = $number1 + $number3; // int (string to int)
$result = $number3 + $number3; // int (string to int)
$result = $number1 . $number2; //string (int to string)
// $result = $fruit + $number2; // error
$result = $number1 + $bool1; // int (bool to int)
$result = $number1 + $bool2; // int (bool to int)
$result = $number1 + $null; // int (null to int)

// explicit conversion
$result = (string) $number1;
$result = (int) $number3;
$result = (bool) $number1; // if the number is 0 the result will be false

var_dump($result);
