<?php
// $favoriteColor = 'red';
$secondFavoritColor = 'green';

// $color = isset($favoriteColor) ? $favoriteColor : 'blue';

// $color = $favoriteColor ?? 'blue';

// $color = isset($favoriteColor) ? $favoriteColor : (isset($secondFavoritColor) ? $secondFavoritColor : 'blue');

$color = $favoriteColor ?? $secondFavoritColor ?? 'blue';

echo $color;
