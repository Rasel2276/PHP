<!DOCTYPE html>
<html>
<head>
    <title>Find Largest Number</title>
</head>
<body>
    <h2>Enter Three Numbers</h2>
    <form method="POST">
        <input type="number" name="num1" placeholder="First number" required><br><br>
        <input type="number" name="num2" placeholder="Second number" required><br><br>
        <input type="number" name="num3" placeholder="Third number" required><br><br>
        <input type="submit" value="Find Largest">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['num1'];
        $b = $_POST['num2'];
        $c = $_POST['num3'];

        if ($a >= $b && $a >= $c) {
            echo "<h3>Largest number is: $a</h3>";
        } elseif ($b >= $a && $b >= $c) {
            echo "<h3>Largest number is: $b</h3>";
        } else {
            echo "<h3>Largest number is: $c</h3>";
        }
    }
    ?>
</body>
</html>