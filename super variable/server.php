<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_SERVER Variable</title>
</head>
<body>
    <form method="get">
        Name : <input type="text" name= "name"> <br><br>
        Age : <input type="text" name="age"> <br><br>
        <input type="submit">
    </form>
    <br>
    <br>
    <br>

    <?php
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";

    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";

    echo $_SERVER['DOCUMENT_ROOT'];
    echo "<br>";
    echo $_SERVER['PHP_SELF'];
    ?>
</body>
</html>