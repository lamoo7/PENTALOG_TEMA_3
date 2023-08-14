<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    switch ($operator) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Cannot divide by zero.";
            }
            break;
        default:
            $result = "Invalid operator.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>
    <form method="POST">
        <input type="number" name="num1" placeholder="Enter first number" required>
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="num2" placeholder="Enter second number" required>
        <button type="submit">Calculate</button>
    </form>
    
    <?php if (isset($result)) { ?>
        <h2>Result: <?php echo $result; ?></h2>
    <?php } ?>
</body>
</html>
