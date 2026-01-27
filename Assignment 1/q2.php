<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //WAP to perform the swapping of two numbers.

    $a=5;
    $b=7;

    echo "Before Swapping: <br>";
    echo "a = ".$a."<br>";
    echo "b = ".$b."<br>";

    $temp = $a;
    $a = $b;
    $b = $temp;

    echo "After Swapping: <br>";
    echo "a = ".$a."<br>";
    echo "b = ".$b."<br>";

?>
</body>
</html>