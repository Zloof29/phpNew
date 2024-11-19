<?php

// Global scope
$name = 'Alice';

function sayHello()
{
    global $name;
    // local scope
    $name = 'Bob';
    echo 'Hello ' . $name;
}

function sayGoodBye()
{
    $names = ['Jack', 'Jill'];
    // echo 'GoodBye ' . $names[0];
}

// global scope
sayGoodBye();
echo $names[0];
