<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve input values from the form
    $principal = $_POST['principal'];
    $rate = $_POST['rate'];
    $time = $_POST['time'];
    
    // Validate input values
    if (is_numeric($principal) && is_numeric($rate) && is_numeric($time)) {
        // Calculate simple interest
        $simple_interest = ($principal * $rate * $time) / 100;
        
        // Display the result
        echo "<h2>Simple Interest Calculation Result</h2>";
        echo "Principal Amount: $" . number_format($principal, 2) . "<br>";
        echo "Rate of Interest: " . number_format($rate, 2) . "%<br>";
        echo "Time Period: " . number_format($time, 2) . " years<br>";
        echo "<h3>Simple Interest: $" . number_format($simple_interest, 2) . "</h3>";
    } else {
        echo "<h2>Invalid Input</h2>";
        echo "Please enter valid numbers for principal, rate, and time.";
    }
} else {
    echo "<h2>Invalid Request Method</h2>";
    echo "Please use the form to submit data.";
}
?>
