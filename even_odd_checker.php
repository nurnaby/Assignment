<!DOCTYPE html>
<html>

<head>
    <title>Even or Odd Number Check </title>
</head>

<body>
    <h1>Even or Odd Number Check</h1>
    <form method="post" action="even_odd_checker.php">
        <label for="num1">Enter the Number:</label>
        <input type="text" name="number" id="num1" required><br><br>
        <input type="submit" value="Calculate">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        $result =0;
        if($number%2 == 0){
           $result= "This Number is Even";
        }
        else{
            $result= "This Number is Odd";

        }
        echo "<h2>$result</h2>";
        
    }
    ?>
</body>

</html>