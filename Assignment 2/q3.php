<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //create a web page where you can take basic salary of an employee, HRA, and DA and print the total salary of that employee on the web page.
    $basic_salary = 50000;
    $hra = 0.20 * $basic_salary; // HRA is 20% of basic salary
    $da = 0.10 * $basic_salary;  // DA is 10% of basic salary
    $total_salary = $basic_salary + $hra + $da;
    echo "Basic Salary: $basic_salary<br>";
    echo "HRA: $hra<br>";
    echo "DA: $da<br>";
    echo "Total Salary: $total_salary<br>";
?>

</body>
</html>