<?php

function sayHello()
{
    echo 'Hello World';
}

function sayGoodBye()
{
    return 'GoodBye';
}

$goodBye = sayGoodBye();
echo $goodBye;
