<!DOCTYPE html>
<html>

<head>
    <title>Grade Calculator</title>
</head>

<body>
    <h1>Grade Calculator</h1>
    <form method="post" action="grade_calculator.php">
        <label for="num1">Enter the Bangla number:</label>
        <input type="text" name="bangla" id="num1" required><br><br>
        <label for="num2">Enter the English number:</label>
        <input type="text" name="english" id="num2" required><br><br>
        <label for="num2">Enter the Math number:</label>
        <input type="text" name="math" id="num2" required><br><br>

        <input type="submit" value="Calculate Greade">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bangla  = $_POST["bangla"];
        $english = $_POST["english"];
        $math    = $_POST["math"];
        
        $average_result = ($bangla+$english+$math)/3;
        $average_result =round($average_result,1);
        $grade_mark = '';
        if($average_result>= 90 && $average_result<= 100){
            $grade_mark= "A";
        }elseif($average_result>= 80 && $average_result<= 90){
            $grade_mark= "B";
        }elseif($average_result>= 70 && $average_result<= 80){
            $grade_mark= "C";
        }elseif($average_result>= 60 && $average_result<= 70){
            $grade_mark= "D";
        }else{
            $grade_mark= "F";
        }
        
        echo "<h2>Result:</h2>";
        echo " Calculate the average mark is $average_result";
        echo"<br>";
        echo "The Grade Number is:$grade_mark";
    }
    ?>
</body>

</html>