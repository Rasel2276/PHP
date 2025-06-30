<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overriding without method</title>
</head>
<body>
    <?php
    echo"<h1> overriding without method </h1>";
    class base{
        public  $name = "Rasel hossain <br>";
    }
    class derived extends base{
        public $name = "saiful islam";
    }
    $test1 = new base();
    $test2 = new derived();
    echo $test1->name;
    echo $test2->name;

    ?>
</body>
</html>