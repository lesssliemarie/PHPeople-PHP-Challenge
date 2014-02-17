<?php

// Small Pizza = 4 slices
// Medium Pizza = 6 slices
// Large Pizza = 8 slices

function get_input() {
	return trim(fgets(STDIN));
}

$runCalculator = TRUE;

do {
	// Get and store input from user
	echo 'How many guests eat only 1 slice of pizza: ' . PHP_EOL;
	$oneSlice = get_input();

	echo 'How many guests eat 2 slices of pizza: ' . PHP_EOL;
	$twoSlices = get_input();

	echo 'How many guests eat 3 slices of pizza: ' . PHP_EOL;
	$threeSlices = get_input();

	echo 'How many guests eat 4 slices of pizza: ' . PHP_EOL;
	$fourSlices = get_input();

	$totalSlices = $oneSlice + ($twoSlices * 2) + ($threeSlices * 3) + ($fourSlices * 4);

	// Divide total slices by # of slices in each size pizza
	// Store number of each pizza size and remainder slices

	$numofLarges = 0;
	$numOfMediums = 0;
	$numOfSmalls = 0;
	$extraSlices = 0;

	if ($totalSlices >= 8) {
		$numofLarges = intval($totalSlices / 8);
		$totalSlices %= 8;
	}

	if ($totalSlices >= 6) {
		$numOfMediums = intval($totalSlices / 6);
		$totalSlices %= 6;
	}

	if ($totalSlices >= 4) {
		$numOfSmalls = intval($totalSlices / 4);
		$extraSlices %= 4;
	}

	// Output answer
	echo "You need to order:\n $numofLarges large pizzas\n $numOfMediums medium pizzas\n $numOfSmalls small pizzas\n EXTRA SLICES: $extraSlices\n";

	// Prompt to run calculator again
	echo 'Do you want to calculate another order? Y/N: ' . PHP_EOL;
	$runAgain = strtoupper(get_input());

	if ($runAgain == 'N') {
		$runCalculator = FALSE;
	}

} while ($runCalculator == TRUE);

echo 'Goodbye!' . PHP_EOL;
exit(0);

?>