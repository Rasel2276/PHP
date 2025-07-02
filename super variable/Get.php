<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_GET Variable</title>
</head>
<body>
    <form method="GET">
        Name: <input type="text" name="fname"><br><br>
        Age : <input type="text" name="age"><br><br>
        <input type="submit" name="save">
    </form>

    <?php
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";


    echo $_GET['fname'];
    echo "<br>";
    echo $_GET['age'];
    echo "<br>";
    
    ?>
    <br>
    <br>

    <form method="get">
        Name: <input type="text" name="name"><br><br>
        Age : <input type="text" name="age"><br><br>
        <input type="submit" name="submit">
    </form>

    <?php
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
    ?>

    <br>
    <br>

    <form method="get">
        Name: <input type="text" name="name"><br><br>
        Age : <input type="text" name="age"><br><br>
        <input type="submit">
    </form>
    <br>
    <br>
    <?php
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
    ?>
</body>
</html>