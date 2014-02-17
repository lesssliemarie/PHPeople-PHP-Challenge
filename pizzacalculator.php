<?php

// Small Pizza = 4 slices
// Medium Pizza = 6 slices
// Large Pizza = 8 slices
$numberOfSmalls = 0;
$numberOfMediums = 0;
$numberofLarges = 0;

function get_input() {
	$input = trim(fgets(STDIN));
}

// Input from user
echo 'How many guests eat only 1 slice of pizza: ' . PHP_EOL;
$oneSlice = get_input();

echo 'How many guests eat 2 slices of pizza: ' . PHP_EOL;
$twoSlices = get_input();

echo 'How many guests eat 3 slices of pizza: ' . PHP_EOL;
$threeSlices = get_input();

echo 'How many guests eat 4 slices of pizza: ' . PHP_EOL;
$fourSlices = get_input();

$totalSlices = $oneSlice + ($twoSlices * 2) + ($threeSlices * 3) + ($fourSlices * 4);

// If greater than 8, divide by 8 and get remainder - store large pizza # and remainder
// If remainder is greater than 6, divide by 6, get remainder - store med pizza # and remainder
// If remainder is greater than 4, divide by 4, get remainder - store small pizaa # and remainder



?>