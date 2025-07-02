<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_REQUEST Variable</title>
</head>
<body>
    <form method="post">
    Name : <input type="text" name="name"><br><br>
    Age : <input type="text" name= "age"><br><br>
    <input type="submit">
    </form>

    <br>
    <br>
    <br>

    <?php
    echo "<pre>";
    echo "<pre>";
    print_r($_REQUEST);
    echo "<pre>";
    ?>
</body>
</html>