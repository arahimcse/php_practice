<?php
if($_POST != null)
{
    if(array_key_exists('add', $_POST))
    {
        $sum = $_POST['num1'] + $_POST['num2'];
        echo "Addition of ", $_POST['num1'] , " & ",  $_POST['num2'], " = ", $sum;
    }else if (array_key_exists('sub', $_POST))
    {
        $sub = $_POST['num1'] - $_POST['num2'];
        echo "Substraction of ", $_POST['num1'] , " & ",  $_POST['num2'], " = ", $sub;
    }else if (array_key_exists('mul', $_POST))
    {
        $mul = $_POST['num1'] * $_POST['num2'];
        echo "Multiplication of ", $_POST['num1'] , " & ",  $_POST['num2'], " = ", $mul;
    } else
    {
        $div = $_POST['num1'] / $_POST['num2'];
        echo "Division of ", $_POST['num1'] , " & ",  $_POST['num2'], " = ", $div;
    }
} else 
{
    echo 'none';
}

?>
<br/>
<a href="./index.php">Back to Home</a>