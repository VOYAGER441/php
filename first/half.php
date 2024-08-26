<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processed Text</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f0f0f0;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 600px;
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Processed Text</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!empty(trim($_POST['inputText']))) {
                $inputText = trim($_POST['inputText']);

                // Calculate the length of the input text
                $textLength = strlen($inputText);

                // Determine the length of the first 50%
                $halfLength = ceil($textLength / 2);

                // Extract the first 50% of the text
                $outputText = substr($inputText, 0, $halfLength);

                // Display the processed text
                echo "<p><strong>Original Text:</strong> " . htmlspecialchars($inputText) . "</p>";
                echo "<p><strong>Processed Text:</strong> " . htmlspecialchars($outputText) . "</p>";
            } else {
                echo "<p>No text was submitted.</p>";
            }
        } else {
            echo "<p>No text was submitted.</p>";
        }
        ?>
        <br>
        <a href="index.html">Go Back</a>
    </div>
</body>
</html>
