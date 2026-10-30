<!DOCTYPE html>
<html>
<head>
    <title>GCF and LCM</title>
</head>
<body>

<h2>GCF and LCM Calculator</h2>

<form method="post">
    Enter first number:
    <input type="number" name="num1" required>
    <br><br>

    Enter second number:
    <input type="number" name="num2" required>
    <br><br>

    <input type="submit" name="calculate" value="Calculate">
</form>

<?php

if (isset($_POST['calculate'])) {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $a = $num1;
    $b = $num2;

    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }

    $gcf = $a;

    $lcm = ($num1 * $num2) / $gcf;

    echo "<h3>Result</h3>";
    echo "GCF of $num1 and $num2 = $gcf<br>";
    echo "LCM of $num1 and $num2 = $lcm";
}

?>

</body>
</html>