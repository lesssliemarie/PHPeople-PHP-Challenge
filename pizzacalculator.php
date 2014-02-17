<?php

// Small Pizza = 4 slices
// Medium Pizza = 6 slices
// Large Pizza = 8 slices

function get_input() {
	return trim(fgets(STDIN));
}

$runCalculator = TRUE;

do {
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

	if ($totalSlices >= 8) {
		$numofLarges = 0;
		$numofLarges = intval($totalSlices / 8);
		$totalSlices %= 8;
	}

	if ($totalSlices >= 6) {
		$numOfMediums = 0;
		$numOfMediums = intval($totalSlices / 6);
		$totalSlices %= 6;
	}

	if ($totalSlices >= 4) {
		$numOfSmalls = 0;
		$extraSlices = 0;
		$numOfSmalls = intval($totalSlices / 4);
		$extraSlices %= 4;
	}

	echo "You need to order:\n $numofLarges large pizzas\n $numOfMediums medium pizzas\n $numOfSmalls small pizzas\n EXTRA SLICES: $extraSlices\n";

	echo 'Do you want to calculate another order? Y/N: ' . PHP_EOL;
	$runAgain = strtoupper(get_input());

	if ($runAgain == 'N') {
		$runCalculator = FALSE;
	}

} while ($runCalculator == TRUE);

echo 'Goodbye!' . PHP_EOL;
exit(0);

?>