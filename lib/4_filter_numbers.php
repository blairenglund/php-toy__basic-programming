<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function filterNumbers($arr) {
  $smallNumbers = array();
  foreach ($i as $i) {
  	if ($i < 10) {
  		array_push($smallNumbers, $i);
  	}
  }
  return $smallNumbers
}

// Write your own "tests" below. Refer to the the examples from exercise #1.

echo "\nTesting that the function returns numbers less than 10 from the array.\n";
if (filterNumbers(array(1, 2, 11)) == array(1, 2)) {
  echo filterNumbers(array(1, 2, 11);
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting that the function returns numbers less than 10 from the array.\n";
if (filterNumbers(array(1, 2, 13, 122, 16, 4, 1.1)) == array(1, 2, 4, 1.1)) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting that the function returns numbers less than 10 from the array.\n";
if (filterNumbers(array(10, 2, 11)) == array(2)) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

?>