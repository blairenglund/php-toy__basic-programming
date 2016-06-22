<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function uppercasesAllLetters($str) {
	return strtoupper($str);
}

// Write your own "tests" below. Refer to the the examples from exercise #1.

echo "\nTesting that 'dog' is uppercase.\n";
if (uppercasesAllLetters("dog") == "DOG") {
  echo "Success! Ruff ruff!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting that 'Cat' is uppercase.\n";
if (uppercasesAllLetters("Cat") == "CAT") {
  echo "Success! Me-ow!";
}
else{
  echo "Failed! Hiss!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\n###################################################################\n";
echo "Tests complete.\n";
?>
