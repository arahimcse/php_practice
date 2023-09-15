<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrow Functions</title>
</head>
<body>
    <?php
    $y =1;
    $fn1 = fn($x) => $x+$y;
    $fn2 = function($x) use ($y){return $x+$y;};
    var_export($fn1(3));
    var_export($fn2(3));

    //Example #2 Arrow functions capture variables by value automatically, even when nested
    $z = 1;
    $fn = fn($x) => fn($y) => $x*$y +$z;
    var_export($fn(5)(10));
    //Example #4 Values from the outer scope cannot be modified by arrow functions
    $a = 1;
    $g = fn($a) => $a++;
    $g(2);
    var_export($a);
    ?>
</body>
</html>