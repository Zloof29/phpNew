<?php

// string
$name = 'Lior Bas';
$name2 = "Lior Bas";

var_dump($name);
echo '<br />';
echo gettype($name2);

// integer
echo '<br />';
$age = 35;
var_dump($age);

// float
echo '<br />';
$rating = 4.5;
var_dump($rating);

// boolean
echo '<br />';
$isLoaded = true;
var_dump($isLoaded);

// array
echo '<br />';
$friends = ['Lior', 'Noy', 'Moshe'];
var_dump($friends);

//object
echo '<br />';
$person = new stdClass();
var_dump($person);

// null
echo '<br />';
$car = null;
var_dump($car);

//Resource
echo '<br />';
$file = fopen('index.php', 'r');
var_dump($file);
