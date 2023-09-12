<!DOCTYPE html>
<html>

<head>
    <title>Comparison Tool</title>
</head>

<body>
    <h1>Comparison Tool</h1>
    <form method="post" action="comparison_too.php">
        <label for="num1">Enter the first number:</label>
        <input type="text" name="num1" id="num1" required><br><br>

        <label for="num2">Enter the second number:</label>
        <input type="text" name="num2" id="num2" required><br><br>

        <input type="submit" value="Compare">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        
        $result = ($num1 > $num2) ? $num1 : $num2;
        
        echo "<h2>Result:</h2>";
        echo "The larger number between $num1 and $num2 is: $result";
    }
    ?>
</body>

</html>