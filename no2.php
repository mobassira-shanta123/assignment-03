<?php
function sumEvenNumbers($arr) {
    $sum = 0;

    foreach ($arr as $num) {
        if ($num % 2 == 0) { // Check if the number is even
            $sum += $num;
        }
    }

    return $sum;
}

// Example usage:
$numbers = [1, 2, 3, 4, 5, 6];
$result = sumEvenNumbers($numbers);
echo "Sum of even numbers: $result";
?>
