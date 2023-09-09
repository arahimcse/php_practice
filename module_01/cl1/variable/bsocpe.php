<?php
// $a = 1; /* global scope */ 

// function test()
// { 
//     echo $a; /* reference to local scope variable */ 
// } 

// test();

// Example #1 Using global
// $a = 1;
// $b = 2;

// function Sum()
// {
//     global $a, $b;

//     $b = $a + $b;
// } 

// //Sum();
// echo $b;

// // Example #2 Using $GLOBALS instead of global
// $a = 1;
// $b = 2;

// function Sum()
// {
//     $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
// } 

// Sum();
// echo $b;


function test()
{
    static $count = 0;

    $count++;
    echo $count;
    if ($count < 10) {
        test();
    }
    
}

test();