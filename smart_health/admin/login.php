<?php 
if(isset($_POST['btn_login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    include '../config/db.php';
    $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);
    $qry = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $qry);

    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['admin_id'] = $row['admin_id'];
        $_SESSION['username'] = $row['username'];

        header("Location: dashboard.php");

    }
    else{
        echo "<b class='text-danger m-5'>Invalid username or password!!!</b>";
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
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card p-4 shadow">
                <h4 class="text-center">Admin Login</h4>

                <form method="post">
                    <input type="text" name="username" class="form-control mb-3" placeholder="Enter Username" required>
                    <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
                    <button name="btn_login" class="btn btn-danger w-100">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include "../includes/footer.php"; ?>
</body>
</html>
