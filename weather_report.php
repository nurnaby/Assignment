<!DOCTYPE html>
<html>

<head>
    <title>Simple Calculator</title>
</head>

<body>
    <h1>Simple up Calculator</h1>
    <form method="post" action="weather_report.php">
        <label for="num1">Enter the Temperature:</label>
        <input type="text" name="temperature" id="num1" required><br><br>
        <input type="submit" value="Calculate">
    </form>
    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = $_POST["temperature"];
        $result =0;
        if($temperature<0){
           $result= "It's freezing";
        }elseif($temperature>=0 && $temperature<=20){
            $result= "It's cool";

        }else{
            $result= "It's warm";

        }
        echo "<h2>weather Information:$result</h2>";
        
    }
    ?>
</body>

</html>