<?php
$morseCodes =  array(
  '0' => "-----",
  '1' => ".----",
  '2' => "..---",
  '3' => "...--",
  '4' => "....-",
  '5' => ".....",
  '6' => "-....",
  '7' => "--...",
  '8' => "---..",
  '9' => "----.",
 
  'A' => ".-",
  'B' => "-...",
  'C' => "-.-.",
  'D' => "-..",
  'E' => ".",
  'F' => "..-.",
  'G' => "--.",
  'H' => "....",
  'I' => "..",
  'J' => ".---",
  'K' => "-.-",
  'L' => ".-..",
  'M' => "--",
  'N' => "-.",
  'O' => "---",
  'P' => ".--.",
  'Q' => "--.-",
  'R' => ".-.",
  'S' => "...",
  'T' => "-",
  'U' => "..-",
  'V' => "...-",
  'W' => ".--",
  'X' => "-..-",
  'Y' => "-.--",
  'Z' => "--..",

  "." => ".-.-.-",
  "," => "--..--",
  "?" => "..--..",
  "!" => "-.-.--",
  "/" => "-..-.",
  "(" => "-.--.-",
  ")" => "-.--.-",
  "&" => ".-...",
  ":" => "---...",
  ";" => "-.-.-.",
  "=" => "-...-",
  "+" => ".-.-.",
  "-" => "-....-",
  "_" => "..--.-",
  "\"" => ".-..-.",
  "$" => "...-..-",
  "@" => ".--.-."
  );


$runMorseTranslator = TRUE;

do {
  // User inputs desired translation text in English
  echo 'Enter the text you want to translate into morse code: ' . PHP_EOL;

  // Store input and get length
  $toTranslate = strtoupper(trim(fgets(STDIN)));
  $toTranslateLength = strlen($toTranslate);
  $translation = "";

  // Loop through characters in the string
  for ($i = 0; $i < $toTranslateLength; $i++) {
  	// Get value from string
    $key = $toTranslate[$i];
    // Look up morse code
    $morseCode = $morseCodes[$key];
    // Store result
    $translation = $translation . $morseCode;
  }

  // Echo result
  echo $toTranslate . ' is ' . $translation . ' in morse code!' . PHP_EOL;
  echo 'Want to translate something else? Y/N: ';
  $runAgain = strtoupper(trim(fgets(STDIN)));

  if ($runAgain == 'N') {
    $runMorseTranslator = FALSE;
  }

} while ($runMorseTranslator == TRUE);

echo 'Goodbye!' . PHP_EOL;
exit(0);

?>