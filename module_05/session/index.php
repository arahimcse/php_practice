<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php simple session practice project</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php 
      echo "Welcome to ".$_SESSION["username"];
      echo '<br/>';
    ?>
    <a href="logout.php">Logout</a>
</body>
</html>