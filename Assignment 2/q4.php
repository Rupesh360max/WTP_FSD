<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- create a web page where you can take marks as a input from user and print their grade according the following condition.
    Marks        Grade
    if Marks >= 90 A+
    if Marks >= 80 and Marks < 90 A
    if Marks >= 70 and Marks < 80 B+
    if Marks >= 60 and Marks < 70 B
    if Marks >= 50 and Marks < 60 C
    else Fail -->
    

<h2>Grade Calculator</h2>

<form method="post">
    Enter Marks:
    <input type="number" name="marks" required min="0" max="100">
    <br><br>
    <input type="submit" name="submit" value="Check Grade">
</form>

<?php
if (isset($_POST['submit'])) {
    $marks = $_POST['marks'];

    if ($marks >= 90) {
        $grade = "A+";
    } elseif ($marks >= 80 && $marks < 90) {
        $grade = "A";
    } elseif ($marks >= 70 && $marks < 80) {
        $grade = "B+";
    } elseif ($marks >= 60 && $marks < 70) {
        $grade = "B";
    } elseif ($marks >= 50 && $marks < 60) {
        $grade = "C";
    } else {
        $grade = "Fail";
    }

    echo "<h3>Your Marks: $marks</h3>";
    echo "<h3>Your Grade: $grade</h3>";
}

?>

</body>
</html>
