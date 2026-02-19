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
    <h3 class="mb-4"> Prediction Result</h3>
    <div class="alert alert-info">
        Based on the symptoms you selected, you may have the following diseases: <strong>
            <?php
            include "../config/db.php";
            $symptomid= $_POST['symptom'];
            $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);
            $s = implode(",", $symptomid);
            $qry = "select d.disease_id, d.disease_name, d.disease_description, count(ds.symptom_id) as match_count
                    from diseases_symptom ds join diseases d on ds.disease_id = d.disease_id where ds.symptom_id in ($s) group by d.disease_id order by match_count desc limit 3";
            // $qry = "SELECT d.disease_name FROM diseases d JOIN disease_symptom ds ON d.disease_id = ds.disease_id WHERE ds.symptom_id IN (".implode(",", $symptomid).") GROUP BY d.disease_id";

            $result = mysqli_query($conn, $qry);
            if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
            echo "<br>".$row['disease_name']. " : ".$row['disease_description']  . "<br>";
            } } else {
                echo "No diseases found matching the selected symptoms.";
            }

            ?>
            </strong>
        </h5>
        <ul>
    </div>
    
    <a href="select_symptoms.php" class="btn btn-secondary">Check Symptoms Again</a>
    </div>

    



<?php include "../includes/footer.php"; ?>
</body>
</html>