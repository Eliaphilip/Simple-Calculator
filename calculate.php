<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculation Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Calculation Result</h2>
        <?php
        if (isset($_POST["calculate"])) {
            $num1 = trim($_POST["num1"]);
            $num2 = trim($_POST["num2"]);
            $operation = trim($_POST["operation"]);

            if (empty($operation)) {
                echo "<p class='error'>Invalid operation!</p>";
                exit;
            }

            switch ($operation) {
                case "add":
                    $result = $num1 + $num2;
                    break;
                case "subtract":
                    $result = $num1 - $num2;
                    break;
                case "multiply":
                    $result = $num1 * $num2;
                    break;
                case "divide":
                    if ($num2 == 0) {
                        echo "<p class='error'>Cannot divide by zero!</p>";
                        exit;
                    }
                    $result = $num1 / $num2;
                    break;
                default:
                    echo "<p class='error'>Invalid operation!</p>";
                    exit;
            }

            echo "<p class='result'>Result: $result</p>";
        }
        ?>
        <br>
        <a href="index.html"><button>Go Back</button></a>
    </div>
</body>
</html>
