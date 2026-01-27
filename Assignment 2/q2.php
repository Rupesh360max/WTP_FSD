<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*
    create a web page that take 5 textboxes for taking 5 subjects marks from the user and one button.
    task: print total marks, percentage
    */
    if(isset($_POST['submit'])){
        $sub1 = $_POST['sub1'];
        $sub2 = $_POST['sub2'];
        $sub3 = $_POST['sub3'];
        $sub4 = $_POST['sub4'];
        $sub5 = $_POST['sub5'];

        $total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
        $percentage = ($total / 500) * 100;

        echo "Total Marks: ".$total."<br>";
        echo "Percentage: ".$percentage."%<br>";
    }   
    ?>
    <form method="post" action="">
        <input type="number" name="sub1" placeholder="Enter marks for Subject 1" required><br>
        <input type="number" name="sub2" placeholder="Enter marks for Subject 2" required><br>
        <input type="number" name="sub3" placeholder="Enter marks for Subject 3" required><br>
        <input type="number" name="sub4" placeholder="Enter marks for Subject 4" required><br>
        <input type="number" name="sub5" placeholder="Enter marks for Subject 5" required><br>
        <input type="submit" name="submit" value="Calculate Total and Percentage">
    </form>
    
</body>
</html>