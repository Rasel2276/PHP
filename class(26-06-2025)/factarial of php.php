<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Find out factarial number</h1>
    <form method="POST">
        <input type="number" name="num" placeholder="enter your number"><br><br>
        <input type="submit">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $a = $_POST["num"];

        $result = 1;
        for ( $i = 1;  $i <= $a; $i++){
            $result *= $i;
        }
        echo "<h1>the factarial number of $a is : $result </h1>";
    }
    ?>
</body>
</html>