<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function arguments</title>
</head>

<body>
    <?php
    //Example #1 Passing arrays to functions
    function takes_array($input)
    {
        echo "$input[0] + $input[1] = ", $input[0] + $input[1], "<br/>";
    }
    takes_array([1, 2, 3]);
    //Example #2 Function Argument List with trailing Comma
    function takes_many_args(
        $first_arg,
        $second_arg,
        $a_very_long_argument_name,
        $arg_with_default = 5,
        $again = 'a default string' // This trailing comma was not permitted before 8.0.0.
    ) {
        echo $first_arg, $second_arg, $a_very_long_argument_name, $arg_with_default, $again, "<br/>";
    }
    takes_many_args(1, 2, 3);
    //Example #3 Passing function parameters by reference
    function add_some_extra(&$string)
    {
        $string .= 'and something extra. <br/>';
    }
    $str = 'This is a string, ';
    add_some_extra($str);
    echo $str; // outputs 'This is a string, and something extra.'
    
    //Example #4 Use of default parameters in functions
    function makecoffee($type = "cappuccino")
    {
        return "Making a cup of $type.\n <br/>";
    }
    echo makecoffee();
    echo makecoffee(null);
    echo makecoffee("espresso");
    //Example #5 Using non-scalar types as default values
    function makecoffee1($types = array("cappuccino"), $coffeeMaker = NULL)
    {
        $device = is_null($coffeeMaker) ? "hands" : $coffeeMaker;
        return "Making a cup of " . join(", ", $types) . " with $device.\n <br/>";
    }
    echo makecoffee1();
    echo makecoffee1(array("cappuccino", "lavazza"), "teapot");
    //Example #6 Using objects as default values (as of PHP 8.1.0)
    class DefaultCoffeemaker
    {
        function brew()
        {
            echo 'Make a coffee <br/>';
        }
    }
    class FancyCoffeeMaker
    {
        function brew()
        {
            echo 'Make a sepcial coffee for you <br/>';
        }
    }
    function makecoffee2($makecoffee = new DefaultCoffeemaker())
    {
        $makecoffee->brew();
    }
    makecoffee2();
    makecoffee2(new FancyCoffeeMaker());
    //Example #8 Correct usage of default function arguments
    
    function makeyogurt($flavour, $container = "bowl")
    {
        return "Making a $container of $flavour yogurt.\n <br/>";
    }

    echo makeyogurt("raspberry"); // "raspberry" is $flavour
    //Example #9 Correct usage of default function arguments
    function makeyogurt1($container = "bowl", $flavour = "raspberry", $style = "Greek")
    {
        return "Making a $container of $flavour $style yogurt.\n <br/>";
    }

    echo makeyogurt1(style: "natural");
    ?>
    <a href="./index.php">Back to Home</a>
</body>

</html>