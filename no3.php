<?php
function countVowels($inputString) {
    // Convert the input string to lowercase to make the comparison case-insensitive
    $inputString = strtolower($inputString);

    // Define an array of vowels
    $vowels = ['a', 'e', 'i', 'o', 'u'];

    // Initialize a variable to count the vowels
    $vowelCount = 0;

    // Loop through each character in the string and check if it's a vowel
    for ($i = 0; $i < strlen($inputString); $i++) {
        $char = $inputString[$i];
        if (in_array($char, $vowels)) {
            $vowelCount++;
        }
    }

    return $vowelCount;
}

// Example usage:
$inputString = "Hello, World!";
$result = countVowels($inputString);
echo "Number of vowels in the string: $result";
?>
