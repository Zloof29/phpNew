<?php

declare(strict_types=1);

function getSum(int $a, int $b): int
{
    return $a + $b;
    // return 'Hello';
}

// echo getSum(1, 1);

// function greeting(string $name): string {
//     return 'Hello ' . $name;
// }

function greeting(string $name): void {
    echo 'Hello ' . $name;
}

// echo greeting('Lior');
