<?php 
session_start();
if(isset($_POST['uid'])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Smart Health</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include "../includes/header.php"; ?>

<div class="container mt-5">
    <h3 class="mb-4">Select Symptoms</h3>

    <form method="post" action="result.php">
        
            <label for="symptoms" class="form-label">Select Symptoms:</label>
            <select id="symptoms" name="symptoms[]" class="form-select" multiple required></select>
                <?php
            $conn = mysqli_connect("localhost", "root", "", "smart_health");
            $qry = "select * from symptoms";
            $result = mysqli_query($conn, $qry);

            // echo "<table class='table table-bordered'>";
            $i = 0;

            echo "<div class='row g-2'>";
            while($row = mysqli_fetch_assoc($result)){
                
                if($i == 0)

                echo "<div class='row mb-2'>";
                echo "<div class='col-md-2 mb-2'>";
                
                // echo "<td>";
                echo "<div class='form-check'>";
                echo "<input type = 'checkbox' name = 'symptoms[]' value = '".$row['symptom_id']."'>";
                echo "<label class='form-check-label'>".$row['symptom_name']."</label><br>";
                echo "</div>";
                echo "</div>";
                // echo "</td>";

                $i++;
                if($i == 4){
                    // echo "</tr>";
                    echo "</div>";
                    $i = 0;
                }
            }

            // echo "</table>";

            mysqli_close($conn);
            ?>

        
        <button type="submit" name="submit_symptoms" class="btn btn-primary">Submit</button>
    </form>



<?php include "../includes/footer.php"; ?>
</body>
</html>