<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTML Code Runner (PHP)</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        textarea {
            font-family: Consolas, monospace;
            font-size: 14px;
        }
        iframe {
            width: 100%;
            height: 400px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>

<div class="container-fluid mt-4">
    <div class="row">

        <!-- LEFT BLOCK : CODE INPUT -->
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-dark text-white">
                    HTML / CSS Code
                </div>
                <div class="card-body">
                    <form method="post">
                        <textarea name="code" rows="15" class="form-control"><?php
                            echo htmlspecialchars($_POST['code'] ?? '<!DOCTYPE html>
<html>
<head>
<style>
h1 { color: brown; }
</style>
</head>
<body>

<h1>This is a Heading</h1>
<p>This is a paragraph.</p>

</body>
</html>');
                        ?></textarea>

                        <br>
                        <button class="btn btn-primary">Run Code</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- RIGHT BLOCK : OUTPUT -->
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-success text-white">
                    Output
                </div>
                <div class="card-body p-0">

                    <iframe sandbox="allow-same-origin"></iframe>

                    <?php if (!empty($_POST['code'])): ?>
                        <script>
                            const iframe = document.querySelector("iframe");
                            iframe.contentDocument.open();
                            iframe.contentDocument.write(`<?php
                                echo str_replace('`', '\`', $_POST['code']);
                            ?>`);
                            iframe.contentDocument.close();
                        </script>
                    <?php endif; ?>

                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>
