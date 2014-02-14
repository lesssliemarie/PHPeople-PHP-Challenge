<?php
// if 99 to 3
$i = 99;
for ($i = 99; $i >= 0; $i--) {
	
	if ($i >= 3) {

	echo "$i bottles of beer on the wall, $i bottles of beer. Take one down, pass it around, " . ($i - 1) . " bottles of beer on the wall." . PHP_EOL;
	}

	if ($i == 2) {
	echo "$i bottles of beer on the wall, $i bottles of beer. Take one down, pass it around, " . ($i - 1) . " bottle of beer on the wall." . PHP_EOL;
	}

	if ($i == 1) {
	echo "No more bottles of beer on the wall, no more bottles of beer. Go to the store, buy some more, 99 bottles of beer on the wall." . PHP_EOL;	
	}

}

?>