<?php

function add($a = 1, $b = 2)
{
    return $a + $b;
}

echo add(5, 6);
echo '<br />';
echo add(5, 5);
echo '<br />';
echo add();
echo '<br />';

function sayHello($name)
{
    return 'Hello ' . $name;
}

echo sayHello('Lior');
echo '<br />';

function addAll(...$numbers)
{
    $total = 0;
    foreach ($numbers as $number) {
        $total += $number;
    }
    return $total;
}

echo addAll(1, 2, 3, 4, 5, 6);
