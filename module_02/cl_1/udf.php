<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this is the section for user define function</title>
</head>
<body>
    <?php
    
    //Example #1 Pseudo code to demonstrate function uses
    function foo($arg1,$arg2, ...$argn) //$arg1, $arg2, ...$argn called parameters
    {
        echo 'this is the user define function', '<br/>';
        $sum = $arg1+$arg2;
        return "sum = $sum";
    }
    echo foo(1,2), '<br/>'; //1,2 called arguments

    //Example #2 Conditional functions
    $makefoo = false;
    if($makefoo)
    {
        function foo1()
        { 
            echo 'this is the condition function';
        }
    }
    if($makefoo) foo1();

    // Example #3 Functions within functions
    function foo3()
    {
        function bar()
        {
            echo "I don't exist until foo3() is called.<br/>";
        }
    }
    foo3();
    bar();

    //Example #4 Recursive functions
    function recursion(int $a)
    {
        if($a < 20 )
        {
            echo $a, ", ";
            recursion($a+1);
        }
    } 
    recursion(0);
    ?>
    <a href="./index.php"> Back to Home</a>
</body>
</html>