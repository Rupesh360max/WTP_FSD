<?php
$msg = "";
if (isset($_POST['add_symptom'])) {
    $symptom_name = $_POST['symptom_name'];

    $conn = mysqli_connect("localhost", "root", "", "smart_health");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $qry = "INSERT INTO symptoms (symptom_name) VALUES ('$symptom_name')";
    
    mysqli_query($conn, $qry);

    if (mysqli_affected_rows($conn) > 0) {
        $msg = "<b class='text-success'>Symptom added successfully!!!</b>";
    } else {
        $msg = "<b class='text-danger'>Error: in adding the symptom!!!</b>  ". mysqli_error($conn);
    }

    mysqli_close($conn);
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
    <h4 class="mb-4">Add New Symptom</h4>
    <form method="post">

        <div class="mb-3">
            <input type="text" name="symptom_name" class="form-control" placeholder="Symptom Name" required>
        </div>
        
        <button type="submit" name="add_symptom" class="btn btn-primary">Add Symptom</button>

        <a href="../admin/dashboard.php" class="btn btn-secondary">Go to Dashboard</a>

    </form>

    <?php
    echo $msg;
    ?>


<?php include "../includes/footer.php"; ?>
</body>
<html>
