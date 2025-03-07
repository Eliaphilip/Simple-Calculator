<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>
    <form method="POST">
        <label for="num1">Enter First Number:</label>
        <input type="number" name="num1" id="num1" placeholder="First number" required step="any">

        <label for="operation">Select Operation:</label>
        <select name="operation" id="operation" required>
            <option value="add" selected>+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>

        <label for="num2">Enter Second Number:</label>
        <input type="number" name="num2" id="num2" placeholder="Second number" required step="any">

        <button type="submit" name="calculate">Calculate</button>
    </form>
    <?php
   if (isset($_POST["calculate"])) {
    $num1 = trim($_POST["num1"]);
    $num2 = trim($_POST["num2"]);
    $operation = trim($_POST["operation"]);

    if (empty($operation)) {
        echo "<p style='color:red;'>Invalid operation!</p>";
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
                echo "<p style='color:red;'>Cannot divide by zero!</p>";
                exit;
            }
            $result = $num1 / $num2;
            break;
        default:
            echo "<p style='color:red;'>Invalid operation!</p>";
            exit;
    }

    echo "<h3>Result: $result</h3>";
}
    ?>
</body>
</html>