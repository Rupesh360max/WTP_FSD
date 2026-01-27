<?php
session_start();

/* QUESTIONS ARRAY */
$questions = [
    [
        "q" => "PHP stands for?",
        "options" => ["Personal Home Page", "Private Home Page", "Pretext Hypertext", "None"],
        "answer" => 0
    ],
    [
        "q" => "Which symbol is used for variable in PHP?",
        "options" => ["#", "$", "@", "&"],
        "answer" => 1
    ],
    [
        "q" => "Which function is used to print output?",
        "options" => ["print()", "echo()", "write()", "output()"],
        "answer" => 1
    ],
    [
        "q" => "Which method is secure?",
        "options" => ["GET", "POST", "REQUEST", "FETCH"],
        "answer" => 1
    ],
    [
        "q" => "Which is a loop?",
        "options" => ["if", "switch", "for", "include"],
        "answer" => 2
    ],
    [
        "q" => "Which is used to connect MySQL?",
        "options" => ["mysqli", "mysql", "connect", "db"],
        "answer" => 0
    ],
    [
        "q" => "PHP is ___ side scripting?",
        "options" => ["Client", "Server", "Both", "None"],
        "answer" => 1
    ],
    [
        "q" => "Which is PHP file extension?",
        "options" => [".html", ".css", ".php", ".js"],
        "answer" => 2
    ],
    [
        "q" => "Which function counts array elements?",
        "options" => ["size()", "length()", "count()", "total()"],
        "answer" => 2
    ],
    [
        "q" => "Which tag starts PHP?",
        "options" => ["<?", "<?php", "<php>", "<script>"],
        "answer" => 1
    ]
];

/* INITIALIZE SESSION */
if (!isset($_SESSION['order'])) {
    $_SESSION['order'] = array_rand($questions, 10);
    $_SESSION['index'] = 0;
    $_SESSION['score'] = 0;
}

/* CHECK ANSWER */
if (isset($_POST['option'])) {
    $current = $_SESSION['order'][$_SESSION['index']];
    if ($_POST['option'] == $questions[$current]['answer']) {
        $_SESSION['score']++;
    }
    $_SESSION['index']++;
}

/* FINISH QUIZ */
if ($_SESSION['index'] >= 10) {
    $finalScore = $_SESSION['score'];
    session_destroy();
    echo "
    <div class='container mt-5'>
        <div class='card text-center shadow'>
            <div class='card-body'>
                <h3>Quiz Completed</h3>
                <h4>Your Final Score: $finalScore / 10</h4>
                <a href='index.php' class='btn btn-success mt-3'>Restart Quiz</a>
            </div>
        </div>
    </div>";
    exit;
}

/* CURRENT QUESTION */
$qIndex = $_SESSION['order'][$_SESSION['index']];
$q = $questions[$qIndex];
$currentScore = $_SESSION['score'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">

                    <!-- QUESTION -->
                    <h5>Question <?php echo $_SESSION['index'] + 1; ?> / 10</h5>
                    <p><?php echo $q['q']; ?></p>

                    <!-- OPTIONS -->
                    <form method="post">
                        <?php foreach ($q['options'] as $key => $opt): ?>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="option" value="<?php echo $key; ?>" required>
                                <label class="form-check-label"><?php echo htmlspecialchars($opt); ?></label>

                            </div>
                        <?php endforeach; ?>

                        <!-- SCORE + BUTTON -->
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="badge bg-success fs-6">
                                Score: <?php echo $currentScore; ?> / 10
                            </span>
                            <button class="btn btn-primary">Submit & Next</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
