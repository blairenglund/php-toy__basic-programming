<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function addUpNumbers($arr) {
  return array_sum($arr);
}

// Write your own "tests" below. Refer to the the examples from exercise #1.

echo "\nTesting that the sum of 1 + 2 + 3 is 6.\n";
$arr1 = array(1, 2, 3);
if (addUpNumbers($arr1) == 6) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting that the sum of 11 + 22 + 33 is 66.\n";
$arr2 = array(11, 22, 33);
if (addUpNumbers($arr2) == 66) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting that the sum of 1.5 + 2.5 + 4.75 is 8.75.\n";
$arr3 = array(1.5, 2.5, 4.75)
if (addUpNumbers($arr3) == 8.75) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\n###################################################################\n";
echo "Tests complete.\n";

?>
