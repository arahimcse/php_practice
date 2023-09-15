<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this is for anonymous function</title>
</head>

<body>
    <?php
    //Example #1 Anonymous function example
    echo preg_replace_callback('~-([a-z])~', function ($match) {
        return strtoupper($match[1]);
    }, 'hello-world<br/>');

    //Example #2 Anonymous function variable assignment example
    $geet = function ($var) {
        echo "Hello " . $var . "<br/>"; }; //it is trailing semicolon
    $geet("World");
    $geet("PHP");

    //Example #3 Inheriting variables from the parent scope
    $message = 'hello';

    // No "use"
    // $example = function () {
    //     var_dump($message);
    // };
    // $example();

    $example = function() use ($message)
    {
        var_dump($message);
    };
    $example();
    $message = "World";
    $example();

    //Example #4 Closures and scoping
    /**
     * A basic shopping cart which contains a list of added products and the quantity of each product. Includes a method which calculates the total price of the items in the cart using a closure as a callback.
     */
    class Cart{
        const PRICE_BUTTER = 1.00;
        const PRICE_MILK = 3.00;
        const PRICE_EGGS = 6.95;
        protected $products = array();

        public function addProducts($product, $quantity)
        {
            $this->products[$product] = $quantity;
        }
        public function getQuantity($product)
        {
            return isset($this->products[$product]) ? $this->products[$product] : false;
        }
        public function getTotal($tax)
        {
            $Total = 0.0;
            $callback = function($value, $key) use ($tax, &$Total) {
                $pricePerItem = constant(__CLASS__."::PRICE_".strtoupper($key));
                $Total += ($pricePerItem*$value)*($tax+1.00);
            };
            array_walk($this->products, $callback);
            return round($Total, 2);
        }
    }
    $my_card = new Cart();
    //add products
    $my_card->addProducts('eggs', 6);
    $my_card->addProducts('milk', 3);
    $my_card->addProducts('butter', 1);

    //get total price with 5 sales tax
    echo $my_card->getTotal(0.05);

    //Example #5 Automatic binding of $this

    class Test{
        public function test()
        {
            return function(){var_dump($this);};
        }
    }
    $objj = new Test();
    $function = $objj->test();
    $function();
    ?>
    <a href="./index.php">Back to Home</a>
</body>

</html>