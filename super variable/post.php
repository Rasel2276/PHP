<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_POST Variable</title>
</head>
<body>
    <form method="post">
        Name: <input type="text" name="name"><br><br>
        Age : <input type="text" name="age"><br><br>
        <input type="submit">
    </form>
    <br>
    <br>

    <?php
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    ?>


<br>
<br>
<br>

<form method="post">
    Name: <input type="text" name="name"><br><br>
    Age : <input type="text" name= "age"><br><br>
    <input type="submit">
</form>
<br>
<br>
<br>

<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>
</body>
</html>