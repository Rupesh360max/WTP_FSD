<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Start Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card text-center shadow">
                <div class="card-body">
                    <h4>“An interactive PHP quiz with 10 randomly ordered questions. Each correct answer is awarded one mark, and the final score is displayed after completion.”</h4>
                    <p>There are 10 questions. Each correct answer gives 1 point.</p>

                    <form action="quiz.php" method="post">
                        <button class="btn btn-primary">Start Quiz</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
