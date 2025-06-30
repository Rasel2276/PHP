<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Check your given number is prime or not</h1>
    <form method="POST">
        <input type="number" name="number"><br><br>
        <input type="submit" >
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $number = $_POST["number"];
        $isPrime = true;

        if($number <= 1){
            $isPrime = false;
        }
        else {
            for( $i = 2; $i < $number ; $i++){
                if($number % $i == 0){
                    $isPrime = false;
                    break;
                }
            }
        }
        if($isPrime){
            echo "<h3 style=color:green;>$number is a prime number.</h3>";
        }
        else{
            echo "<h3 style=color:red;>$number is not a prime number.</h3>";
        }
    }
    ?>
</body>
</html>