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
    <h3 class="mb-4">View Symptoms</h3>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "smart_health");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $qry = "SELECT * FROM symptoms";
    $result = mysqli_query($conn, $qry);

    if (mysqli_num_rows($result) > 0) {
        echo "<table class='table table-bordered'>";
        echo "<thead><tr><th>Symptom Name</th></tr></thead>";
        echo "<tbody>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" .($row['symptom_name']) . "</td>";
            echo "</tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "<p>No symptoms found.</p>";
    }

    mysqli_close($conn);
    ?>

<?php include "../includes/footer.php"; ?>
</body>
</html>
