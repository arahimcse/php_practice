<?php

/**
 *Link@ https://www.php.net/manual/en/language.variables.basics.php
 */

 $foo = 'foo';
 $bar = 'bar';
 echo $foo, $bar;


/**
 * PHP also offers another way to assign values to variables: assign by reference. This means that the new variable simply references (in other words, "becomes an alias for" or "points to") the original variable. Changes to the new variable affect the original, and vice versa.
 * 
 * */
 $foo1 = 'Bob';              // Assign the value 'Bob' to $foo
$bar1 = &$foo1;              // Reference $foo via $bar.
$bar1 = "My name is $bar1";  // Alter $bar...
echo $bar1;
echo $foo1; 



/**
 * 
 */

 $foo2 = 25;
$bar2 = &$foo2;      // This is a valid assignment.
//$bar2 = &(24 * 7);  // Invalid; references an unnamed expression.

function test()
{
   return 25;
}

$bar = &test();    // Invalid.


/**
 * Undefined variable
 * It is not necessary to initialize variables in PHP however it is a very good practice. Uninitialized variables have a default value of their type depending on the context in which they are used - booleans default to false, integers and floats default to zero, strings (e.g. used in echo) are set as an empty string and arrays become to an empty array.
 */
// Unset AND unreferenced (no use context) variable; outputs NULL
var_dump($unset_var);

// Boolean usage; outputs 'false' (See ternary operators for more on this syntax)
echo $unset_bool ? "true\n" : "false\n";

// String usage; outputs 'string(3) "abc"'
$unset_str .= 'abc';
var_dump($unset_str);

// Integer usage; outputs 'int(25)'
$unset_int += 25; // 0 + 25 => 25
var_dump($unset_int);

// Float usage; outputs 'float(1.25)'
$unset_float += 1.25;
var_dump($unset_float);

// Array usage; outputs array(1) {  [3]=>  string(3) "def" }
$unset_arr[3] = "def"; // array() + array(3 => "def") => array(3 => "def")
var_dump($unset_arr);

// Object usage; creates new stdClass object (see http://www.php.net/manual/en/reserved.classes.php)
// Outputs: object(stdClass)#1 (1) {  ["foo"]=>  string(3) "bar" }
$unset_obj->foo = 'bar';
var_dump($unset_obj);