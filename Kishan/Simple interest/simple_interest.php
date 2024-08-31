<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Interest Calculator</title>
</head>
<body>
    <h1>Simple Interest Calculator</h1>
    <form action="interest.php" method="post">
        <label for="principal">Principal Amount:</label>
        <input type="number" id="principal" name="principal" required><br>
        
        <label for="rate">Rate of Interest (in %):</label>
        <input type="number" id="rate" name="rate" step="0.01" required><br>
        
        <label for="time">Time (in years):</label>
        <input type="number" id="time" name="time" required><br>
        
        <input type="Submit" value="Calculate">
    </form>
</body>
</html>
