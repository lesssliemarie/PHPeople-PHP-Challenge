<?php

$euro = 0.73;
$pound = 0.60;
$peso = 13;

echo 'Enter the amount that you want to convert: ';

$dollarsToConvert = (trim(fgets(STDIN)));

echo 'What currency do you want to convert it to? (E)uros, (P)esos, (B)ritish Pounds: ';

$input = strtoupper(trim(fgets(STDIN)));

if ($input == 'E') {
	// convert to euros
	$convertedValue = $euro * $dollarsToConvert;
	echo '$' . $dollarsToConvert . ' is equivalent to ' . $convertedValue . ' euros.' . PHP_EOL;
} elseif ($input == 'P') {
	// convert to pesos
	$convertedValue = $peso * $dollarsToConvert;
	echo '$' . $dollarsToConvert . ' is equivalent to ' . $convertedValue . ' pesos.' . PHP_EOL;
} elseif ($input == 'B') {
	// convert to british pounds
	$convertedValue = $pound * $dollarsToConvert;
	echo '$' . $dollarsToConvert . ' is equivalent to ' . $convertedValue . ' pounds.' . PHP_EOL;
} 




?>