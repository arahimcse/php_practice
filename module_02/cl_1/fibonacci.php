<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is the example for fibonacci series example</title>
</head>
<body>
    <?php 
    $x = 0;
    $y = 1;
    $i = 3;
    echo $x, '<br/>';
    echo $y, '<br/>';
    while($i <=10)
    {
        $sum = $x+$y;
        echo $sum, '<br/>';
        $x = $y;
        $y = $sum;
        $i++;
    }
    ?>
</body>
</html>