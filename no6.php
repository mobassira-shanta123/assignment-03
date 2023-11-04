<?php
$numbers = array(2, 4, 6, 8, 10);

// i. Print the first element of the array.
echo "i. First element: " . $numbers[0] . "<br>";

// ii. Print the last element of the array.
$lastIndex = count($numbers) - 1;
echo "ii. Last element: " . $numbers[$lastIndex] . "<br>";

// iii. Add a new element with the value of 12 to the end of the array and show the new array.
$numbers[] = 12;
echo "iii. New array with 12 added: " . implode(', ', $numbers) . "<br>";

// iv. Calculate the sum of all the elements in the new array and print the result.
$sum = array_sum($numbers);
echo "iv. Sum of all elements: " . $sum . "\n";
?>

