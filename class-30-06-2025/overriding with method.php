<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>overriding with method</title>
</head>
<body>
    <?php
    echo "<h1>Overriding with method</h1>";
    class base{
        public $name;

        public function cal($a,$b){
            return $a * $b;
        }
    }
    class derived extends base{
        public $name;
        public function cal($a , $b){
            return $a + $b;
        }
    }
    $test1 = new base();
    $test1->name = "Rasel";
    echo $test1->name;
    echo "<br>";
    echo "The multiplication of a and b :  " .$test1->cal(5,10);

        echo "<br>";
        echo "<br>";



    $test2 = new derived();
    $test2->name = "Saiful";
    echo $test2->name;
    echo "<br>";
    echo "The addition of a and b :  " .$test2->cal(5,50);

    ?>
</body>
</html>