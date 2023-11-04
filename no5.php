<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>
    <form method="post">
        Enter the first number: <input type="text" name="num1"><br><br>
        Enter the second number: <input type="text" name="num2"><br>
        <input type="submit" value="Calculate">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get input values
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        // Check if both inputs are valid numbers
        if (is_numeric($num1) && is_numeric($num2)) {
            // Perform calculations
            $sum = $num1 + $num2;
            $difference = $num1 - $num2;
            $product = $num1 * $num2;
            $quotient = $num1 / $num2;

            // Display the results
            echo "<p>Sum: $sum</p>";
            echo "<p>Difference: $difference</p>";
            echo "<p>Product: $product</p>";
            echo "<p>Quotient: $quotient</p>";
        } else {
            // Display an error message if inputs are not valid numbers
            echo "<p>Please enter valid numbers for both inputs.</p>";
        }
    }
    ?>
</body>
</html>
