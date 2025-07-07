<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
</head>
<body>
       <h2>Student Info Form (OOP)</h2>
    <form method="post" action="create.php">
        <label>Name:</label>
        <input type="text" name="name" required><br><br>

        <label>ID:</label>
        <input type="text" name="id" required><br><br>

        <label>Adress:</label>
        <textarea name="address" id="address" required></textarea><br><br>

        <input type="submit" value="Create File">
    </form>
</body>
</html>