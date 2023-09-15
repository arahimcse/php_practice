<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable functions</title>
</head>
<body>
    <?php
    //Example #1 Variable function example
    function foo()
    {
        echo 'In foo() <br/>';
    } 
    function bar( $arg='')
    {
        echo 'In bar() was ', $arg, "<br/>";
    }
    function echoit($string)
    {
        echo 'In echoit() was ', $string, "<br/>";
    }
    $func = 'foo';
    $func();

    $func = 'bar';
    $func('Bazz');

    $func = 'echoit';
    $func('arg string');

    //Example #2 Variable method example
    class Foo{
        function Variable()
        {
            echo 'this is the bazz function <br/>';
        }
        function bar()
        {
            echo 'this is the bar function <br/>';
        }
    }
    $obj = new Foo();
    $func = 'Variable';
    $obj->$func();

    //Example #3 Variable method example with static properties
        class Bar{
        static $variable = 'Static Properties <br/>';
        static function b(){
            echo 'Method variable called <br/>';
        }
    }
    echo Bar::$variable;
    $dd = 'b';
    Bar::$dd();

    //Example #4 Complex callables
    class C{
        static function d()
        {
            echo 'this is static function <br/>';
        }
        function e()
        {
            echo 'this is normal function <br/>';
        }
    }
    $func = array('C', 'd');
    $func();
    $func = array(new C(), 'e');
    $func();
    print_r(extension_loaded('xdebg'));
    ?>
    <a href="./index.php">Back to Home</a>
</body>
</html>