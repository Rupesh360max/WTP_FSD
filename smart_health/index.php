<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Smart Health</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
          crossorigin="anonymous">
</head>
<body>

<?php include "includes/header.php"; ?>

<div class="container-fluid">
    <div class="row">
        <div id="d1" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="https://wpassets.adda247.com/wp-content/uploads/multisite/sites/5/2023/04/07093112/who75-whd2023-web-banner-white-1.jpg"
                         class="d-block w-100" style="height:200px;"
                         alt="Banner 1">
                </div>

                <div class="carousel-item">
                    <img src="https://teldoc.org/wp-content/uploads/2022/11/2020_08_03_TheFirstStep_1920x1080_Landscape-1-1280x720.jpg"
                         class="d-block w-100" style="height:200px;"
                         alt="Banner 2">
                </div>

                <div class="carousel-item">
                    <img src="https://www.mdpi.com/applsci/applsci-13-08869/article_deploy/html/images/applsci-13-08869-g002.png"
                         class="d-block w-100" style="height:200px;"
                         alt="Banner 3">
                </div>

                <div class="carousel-item">
                    <img src="https://cms.sportexsafety.com/uploads/campaign-template/originals/bfb03a0d-da04-43ef-8e13-21813c9ba177.jpg"
                         class="d-block w-100" style="height:200px;"
                         alt="Banner 4">
                </div>

            </div>

            <!-- Left & Right Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#d1" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#d1" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>

        </div>
    </div>
</div>


<div class="container mt-5 text-center">
    <h2><b>Smart Health Prediction System</b></h2>
    <p>Select symptoms and get instant health guidance.</p>
    <a href="../class_work/smart_health/user/login.php" class="btn btn-primary">Get Started</a>


    <div class="row mt-5">
        <h4>How It Works</h4>
        <div class="col-md-4 mt-3">
            <div class="card p-3">Step 1<br><b>Register & Login</b></div>
        </div>
        <div class="col-md-4 mt-3">
            <div class="card p-3">Step 2<br><b>Select Symptoms</b></div>
        </div>
        <div class="col-md-4 mt-3">
            <div class="card p-3">Step 3<br><b>View Result</b></div>
        </div>
    </div>
</div>

<?php include "includes/footer.php"; ?>

<!-- Bootstrap JS (Place before closing body) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

</body>
</html>
