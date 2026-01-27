<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*Create a web page with one textbox and one button
    1. Take number as a input and on the click of button print the cube of that number
    2. Take number as a input and on the click of button print the table of the number
    3. Take radius as input and on the click of button print the factorial of that number
    4. Take number as input and on the click of button print whether the number is prime or not*/
    if(isset($_POST['submit1'])){
        $num = $_POST['number1'];
        $cube = $num * $num * $num;
        echo "The cube of ".$num." is ".$cube."<br>";
    }
    if(isset($_POST['submit2'])){
        $num = $_POST['number2'];
        echo "The table of ".$num." is:<br>";
        for($i=1; $i<=10; $i++){
            $table = $num * $i;
            echo $num." x ".$i." = ".$table."<br>";
        }
    }
    if(isset($_POST['submit3'])){
        $radius = $_POST['number3'];
        $factorial = 1;
        for($i=1; $i<=$radius; $i++){
            $factorial *= $i;
        }
        echo "The factorial of ".$radius." is ".$factorial."<br>";
    }
    if(isset($_POST['submit4'])){
        $num = $_POST['number4'];
        $isPrime = true;
        if($num <= 1){
            $isPrime = false;
        } else {
            for($i=2; $i<=sqrt($num); $i++){
                if($num % $i == 0){
                    $isPrime = false;
                    break;
                }
            }
        }
        if($isPrime){
            echo $num." is a prime number.<br>";
        } else {
            echo $num." is not a prime number.<br>";
        }
    }
    ?>
    <form method="post" action="">
        <input type="number" name="number1" placeholder="Enter number for cube">
        <input type="submit" name="submit1" value="Calculate Cube"><br><br>

        <input type="number" name="number2" placeholder="Enter number for table" >
        <input type="submit" name="submit2" value="Calculate Table"><br><br>

        <input type="number" name="number3" placeholder="Enter radius for factorial">
        <input type="submit" name="submit3" value="Calculate Factorial"><br><br>

        <input type="number" name="number4" placeholder="Enter number to check prime">
        <input type="submit" name="submit4" value="Check Prime"><br><br>
    </form>
    
</body>
</html>