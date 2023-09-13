<!DOCTYPE html>
<html>

<head>
    <title>Temperature Converter</title>
</head>

<body>
    <h2>Temperature Converter</h2>
    <form method="post">
        <label for="temperature">Enter Temperature:</label>
        <input type="text" name="temperature" id="temperature" required><br>

        <label for="conversion_direction">Select Conversion Direction:</label>
        <select name="conversion_direction" id="conversion_direction" required>
            <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>
            <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>
        </select><br>

        <input type="submit" value="Convert">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input
        $temperature = floatval($_POST["temperature"]);
        $conversion_direction = $_POST["conversion_direction"];

        // Perform the temperature conversion
        if ($conversion_direction === "celsius_to_fahrenheit") {
            $converted_temperature = ($temperature * 9/5) + 32;
            $original_unit = "Celsius";
            $converted_unit = "Fahrenheit";
        } elseif ($conversion_direction === "fahrenheit_to_celsius") {
            $converted_temperature = ($temperature - 32) * 5/9;
            $original_unit = "Fahrenheit";
            $converted_unit = "Celsius";
        }

        // Display the result
        echo "<p>$temperature $original_unit is equal to $converted_temperature $converted_unit</p>";
    }
    ?>
</body>

</html>