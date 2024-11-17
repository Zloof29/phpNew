<?php

$age = 15;

// if statement 
// if ($age >= 21) {
// code to be executed of the condition is true.
//     echo 'You are old enough to drink in the US';
// }

//if-else
// if ($age >= 21) {
//     // code to be executed of the condition is true.
//     echo 'You are old enough to drink in the US';
// } else {
//     echo 'You are not old enough to drink in the US';
// }

// nested if statement
// if ($age >= 21) {
//     // code to be executed of the condition is true.
//     echo 'You are old enough to drink and vote in the US';
// } else {
//     if ($age >= 18) {
//         echo 'You are old enough to vote in the US';
//     } else {
//         echo 'You are not enough to vote or drink in the US';
//     }
// }

// if-else-if
if ($age >= 21) {
    // code to be executed of the condition is true.
    echo 'You are old enough to drink and vote in the US';
} else if ($age >= 18) {
    echo 'You are old enough to vote in the US';
} else {
    echo 'You are NOT old enough to drink or vote in the US';
}
