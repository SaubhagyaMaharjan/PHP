<?php
// Define a function that calculates the square of a number
function calculateSquare($number) {
    // Calculate the square
    $square = $number * $number;
    
    // Return the calculated square
    return $square;
}

// Example usage of the function
$inputNumber = 4;
$result = calculateSquare($inputNumber);

// Output the result
echo "The square of " . $inputNumber . " is: " . $result;
?>
