<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function addUpNumbers($arr) {
  array_sum($arr);
}

// Write your own "tests" below. Refer to the the examples from exercise #1.

echo "\nTesting that the sum of 1 + 2 + 3 is 6.\n";
if (addUpNumbers(array(1, 2, 3) == 6) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting that the sum of 11 + 22 + 33 is 66.\n";
if (addUpNumbers(array(11, 22, 33) == 66) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting that the sum of 1.5 + 2.5 + 4.75 is 8.75.\n";
if (addUpNumbers(array(1.5, 2.5, 4.75) == 8.75) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

?>
