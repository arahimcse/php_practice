<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="./basic.php">Basics</a></li>
        <li><a href="./predefine.php">Predefined Variables</a></li>
        <li><a href="./bsocpe.php">Variable scope</a></li>
        <li><a href="./vinv.php">Variable variables</a></li>
        <li><a href="./vfes.php">Variables From External Sources</a></li>
    </ul>

    <form action="./vfes.php" method="post">
        Name: <input type="text" name="username">
        Email: <input type="email" name="email">
        <input type="submit" value="Submit me!">
    </form>
</body>
</html>