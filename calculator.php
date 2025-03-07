<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>
    <form method = "POST">
        <input type = "Number" = name = "num1" placeholder="enter first nember" required>
         <select name="Operation">
            <option value = "Add">+</option>
            <option value = "multyply">*</option>
            <option value = "subtract">-</option>
            <option value = "div">/</option>
         </select>
         <input type="number" name="num2"placeholder = "enter second number" required>
         <input type="submit" name="calculate" value="calculate">
    </form>
    <?php
    if (isset($_POST["calculate"])) {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];
        $result = 0;

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