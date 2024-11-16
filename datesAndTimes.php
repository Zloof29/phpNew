<?php
$output = null;

/*
- 'Y' - the year
- 'm' - the month
- 'd' - the day
- 'D' - the day of the week short name
- 'l' - the full day of the week name
- 'h' - the hour
- 'i' - the minute
- 's' - the second
- 'a' - AM/PM
*/
// get year
$output = date('Y');

// get your with timestemp
$output = date('Y', 936345600);

// get timestamp from strtotime
$output = date('Y', strtotime('1999-09-01'));

// get month
$output = date('m');

//get day
$output = date('D');
$output = date('l');

//get month day and year
$output = date('Y-m-d');
$output = date('m-d-Y');

// get hour
$output = date('h');

// get min
$output = date('i');

// get second
$output = date('s');

// get am/pm
$output = date('a');

// put it all toghter
$output = date('Y-m-d h:i:s a');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <!-- Output -->
            <p class="text-xl"><?php echo $output; ?></p>
        </div>
    </div>
</body>

</html>